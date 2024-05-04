<?php
 
namespace Facebook;

use Facebook\Authentication\AccessToken;
use Facebook\Authentication\OAuth2Client;
use Facebook\FileUpload\FacebookFile;
use Facebook\FileUpload\FacebookVideo;
use Facebook\GraphNodes\GraphEdge;
use Facebook\Url\UrlDetectionInterface;
use Facebook\Url\FacebookUrlDetectionHandler;
use Facebook\PseudoRandomString\PseudoRandomStringGeneratorInterface;
use Facebook\PseudoRandomString\McryptPseudoRandomStringGenerator;
use Facebook\PseudoRandomString\OpenSslPseudoRandomStringGenerator;
use Facebook\PseudoRandomString\UrandomPseudoRandomStringGenerator;
use Facebook\HttpClients\FacebookHttpClientInterface;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookStreamHttpClient;
use Facebook\HttpClients\FacebookGuzzleHttpClient;
use Facebook\PersistentData\PersistentDataInterface;
use Facebook\PersistentData\FacebookSessionPersistentDataHandler;
use Facebook\PersistentData\FacebookMemoryPersistentDataHandler;
use Facebook\Helpers\FacebookCanvasHelper;
use Facebook\Helpers\FacebookJavaScriptHelper;
use Facebook\Helpers\FacebookPageTabHelper;
use Facebook\Helpers\FacebookRedirectLoginHelper;
use Facebook\Exceptions\FacebookSDKException;

 
class Facebook
{
     
    const VERSION = '5.0.0';

     
    const DEFAULT_GRAPH_VERSION = 'v2.4';

     
    const APP_ID_ENV_NAME = 'FACEBOOK_APP_ID';

     
    const APP_SECRET_ENV_NAME = 'FACEBOOK_APP_SECRET';

     
    protected $app;

     
    protected $client;

     
    protected $oAuth2Client;

     
    protected $urlDetectionHandler;

     
    protected $pseudoRandomStringGenerator;

     
    protected $defaultAccessToken;

     
    protected $defaultGraphVersion;

     
    protected $persistentDataHandler;

     
    protected $lastResponse;

     
    public function __construct(array $config = [])
    {
        $appId = isset($config['app_id']) ? $config['app_id'] : getenv(static::APP_ID_ENV_NAME);
        if (!$appId) {
            throw new FacebookSDKException('Required "app_id" key not supplied in config and could not find fallback environment variable "' . static::APP_ID_ENV_NAME . '"');
        }

        $appSecret = isset($config['app_secret']) ? $config['app_secret'] : getenv(static::APP_SECRET_ENV_NAME);
        if (!$appSecret) {
            throw new FacebookSDKException('Required "app_secret" key not supplied in config and could not find fallback environment variable "' . static::APP_SECRET_ENV_NAME . '"');
        }

        $this->app = new FacebookApp($appId, $appSecret);

        $httpClientHandler = null;
        if (isset($config['http_client_handler'])) {
            if ($config['http_client_handler'] instanceof FacebookHttpClientInterface) {
                $httpClientHandler = $config['http_client_handler'];
            } elseif ($config['http_client_handler'] === 'curl') {
                $httpClientHandler = new FacebookCurlHttpClient();
            } elseif ($config['http_client_handler'] === 'stream') {
                $httpClientHandler = new FacebookStreamHttpClient();
            } elseif ($config['http_client_handler'] === 'guzzle') {
                $httpClientHandler = new FacebookGuzzleHttpClient();
            } else {
                throw new \InvalidArgumentException('The http_client_handler must be set to "curl", "stream", "guzzle", or be an instance of Facebook\HttpClients\FacebookHttpClientInterface');
            }
        }

        $enableBeta = isset($config['enable_beta_mode']) && $config['enable_beta_mode'] === true;
        $this->client = new FacebookClient($httpClientHandler, $enableBeta);

        if (isset($config['url_detection_handler'])) {
            if ($config['url_detection_handler'] instanceof UrlDetectionInterface) {
                $this->urlDetectionHandler = $config['url_detection_handler'];
            } else {
                throw new \InvalidArgumentException('The url_detection_handler must be an instance of Facebook\Url\UrlDetectionInterface');
            }
        }

        if (isset($config['pseudo_random_string_generator'])) {
            if ($config['pseudo_random_string_generator'] instanceof PseudoRandomStringGeneratorInterface) {
                $this->pseudoRandomStringGenerator = $config['pseudo_random_string_generator'];
            } elseif ($config['pseudo_random_string_generator'] === 'mcrypt') {
                $this->pseudoRandomStringGenerator = new McryptPseudoRandomStringGenerator();
            } elseif ($config['pseudo_random_string_generator'] === 'openssl') {
                $this->pseudoRandomStringGenerator = new OpenSslPseudoRandomStringGenerator();
            } elseif ($config['pseudo_random_string_generator'] === 'urandom') {
                $this->pseudoRandomStringGenerator = new UrandomPseudoRandomStringGenerator();
            } else {
                throw new \InvalidArgumentException('The pseudo_random_string_generator must be set to "mcrypt", "openssl", or "urandom", or be an instance of Facebook\PseudoRandomString\PseudoRandomStringGeneratorInterface');
            }
        }

        if (isset($config['persistent_data_handler'])) {
            if ($config['persistent_data_handler'] instanceof PersistentDataInterface) {
                $this->persistentDataHandler = $config['persistent_data_handler'];
            } elseif ($config['persistent_data_handler'] === 'session') {
                $this->persistentDataHandler = new FacebookSessionPersistentDataHandler();
            } elseif ($config['persistent_data_handler'] === 'memory') {
                $this->persistentDataHandler = new FacebookMemoryPersistentDataHandler();
            } else {
                throw new \InvalidArgumentException('The persistent_data_handler must be set to "session", "memory", or be an instance of Facebook\PersistentData\PersistentDataInterface');
            }
        }

        if (isset($config['default_access_token'])) {
            $this->setDefaultAccessToken($config['default_access_token']);
        }

        if (isset($config['default_graph_version'])) {
            $this->defaultGraphVersion = $config['default_graph_version'];
        } else {
 
            $this->defaultGraphVersion = static::DEFAULT_GRAPH_VERSION;
        }
    }

     
    public function getApp()
    {
        return $this->app;
    }

     
    public function getClient()
    {
        return $this->client;
    }

     
    public function getOAuth2Client()
    {
        if (!$this->oAuth2Client instanceof OAuth2Client) {
            $app = $this->getApp();
            $client = $this->getClient();
            $this->oAuth2Client = new OAuth2Client($app, $client, $this->defaultGraphVersion);
        }

        return $this->oAuth2Client;
    }

     
    public function getLastResponse()
    {
        return $this->lastResponse;
    }

     
    public function getUrlDetectionHandler()
    {
        if (!$this->urlDetectionHandler instanceof UrlDetectionInterface) {
            $this->urlDetectionHandler = new FacebookUrlDetectionHandler();
        }

        return $this->urlDetectionHandler;
    }

     
    public function getDefaultAccessToken()
    {
        return $this->defaultAccessToken;
    }

     
    public function setDefaultAccessToken($accessToken)
    {
        if (is_string($accessToken)) {
            $this->defaultAccessToken = new AccessToken($accessToken);

            return;
        }

        if ($accessToken instanceof AccessToken) {
            $this->defaultAccessToken = $accessToken;

            return;
        }

        throw new \InvalidArgumentException('The default access token must be of type "string" or Facebook\AccessToken');
    }

     
    public function getDefaultGraphVersion()
    {
        return $this->defaultGraphVersion;
    }

     
    public function getRedirectLoginHelper()
    {
        return new FacebookRedirectLoginHelper(
            $this->getOAuth2Client(),
            $this->persistentDataHandler,
            $this->urlDetectionHandler,
            $this->pseudoRandomStringGenerator
        );
    }

     
    public function getJavaScriptHelper()
    {
        return new FacebookJavaScriptHelper($this->app, $this->client, $this->defaultGraphVersion);
    }

     
    public function getCanvasHelper()
    {
        return new FacebookCanvasHelper($this->app, $this->client, $this->defaultGraphVersion);
    }

     
    public function getPageTabHelper()
    {
        return new FacebookPageTabHelper($this->app, $this->client, $this->defaultGraphVersion);
    }

     
    public function get($endpoint, $accessToken = null, $eTag = null, $graphVersion = null)
    {
        return $this->sendRequest(
            'GET',
            $endpoint,
            $params = [],
            $accessToken,
            $eTag,
            $graphVersion
        );
    }

     
    public function post($endpoint, array $params = [], $accessToken = null, $eTag = null, $graphVersion = null)
    {
        return $this->sendRequest(
            'POST',
            $endpoint,
            $params,
            $accessToken,
            $eTag,
            $graphVersion
        );
    }

     
    public function delete($endpoint, array $params = [], $accessToken = null, $eTag = null, $graphVersion = null)
    {
        return $this->sendRequest(
            'DELETE',
            $endpoint,
            $params,
            $accessToken,
            $eTag,
            $graphVersion
        );
    }

     
    public function next(GraphEdge $graphEdge)
    {
        return $this->getPaginationResults($graphEdge, 'next');
    }

     
    public function previous(GraphEdge $graphEdge)
    {
        return $this->getPaginationResults($graphEdge, 'previous');
    }

     
    public function getPaginationResults(GraphEdge $graphEdge, $direction)
    {
        $paginationRequest = $graphEdge->getPaginationRequest($direction);
        if (!$paginationRequest) {
            return null;
        }

        $this->lastResponse = $this->client->sendRequest($paginationRequest);
 
        $subClassName = $graphEdge->getSubClassName();
        $graphEdge = $this->lastResponse->getGraphEdge($subClassName, false);

        return count($graphEdge) > 0 ? $graphEdge : null;
    }

     
    public function sendRequest($method, $endpoint, array $params = [], $accessToken = null, $eTag = null, $graphVersion = null)
    {
        $accessToken = $accessToken ?: $this->defaultAccessToken;
        $graphVersion = $graphVersion ?: $this->defaultGraphVersion;
        $request = $this->request($method, $endpoint, $params, $accessToken, $eTag, $graphVersion);

        return $this->lastResponse = $this->client->sendRequest($request);
    }

     
    public function sendBatchRequest(array $requests, $accessToken = null, $graphVersion = null)
    {
        $accessToken = $accessToken ?: $this->defaultAccessToken;
        $graphVersion = $graphVersion ?: $this->defaultGraphVersion;
        $batchRequest = new FacebookBatchRequest(
            $this->app,
            $requests,
            $accessToken,
            $graphVersion
        );

        return $this->lastResponse = $this->client->sendBatchRequest($batchRequest);
    }

     
    public function request($method, $endpoint, array $params = [], $accessToken = null, $eTag = null, $graphVersion = null)
    {
        $accessToken = $accessToken ?: $this->defaultAccessToken;
        $graphVersion = $graphVersion ?: $this->defaultGraphVersion;

        return new FacebookRequest(
            $this->app,
            $accessToken,
            $method,
            $endpoint,
            $params,
            $eTag,
            $graphVersion
        );
    }

     
    public function fileToUpload($pathToFile)
    {
        return new FacebookFile($pathToFile);
    }

     
    public function videoToUpload($pathToFile)
    {
        return new FacebookVideo($pathToFile);
    }
}
