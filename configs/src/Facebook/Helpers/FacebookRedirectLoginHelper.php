<?php
 
namespace Facebook\Helpers;

use Facebook\Authentication\AccessToken;
use Facebook\Authentication\OAuth2Client;
use Facebook\Url\UrlDetectionInterface;
use Facebook\Url\FacebookUrlDetectionHandler;
use Facebook\Url\FacebookUrlManipulator;
use Facebook\PersistentData\PersistentDataInterface;
use Facebook\PersistentData\FacebookSessionPersistentDataHandler;
use Facebook\PseudoRandomString\PseudoRandomStringGeneratorInterface;
use Facebook\PseudoRandomString\McryptPseudoRandomStringGenerator;
use Facebook\PseudoRandomString\OpenSslPseudoRandomStringGenerator;
use Facebook\PseudoRandomString\UrandomPseudoRandomStringGenerator;
use Facebook\Exceptions\FacebookSDKException;

 
class FacebookRedirectLoginHelper
{
     
    const CSRF_LENGTH = 32;

     
    protected $oAuth2Client;

     
    protected $urlDetectionHandler;

     
    protected $persistentDataHandler;

     
    protected $pseudoRandomStringGenerator;

     
    public function __construct(OAuth2Client $oAuth2Client, PersistentDataInterface $persistentDataHandler = null, UrlDetectionInterface $urlHandler = null, PseudoRandomStringGeneratorInterface $prsg = null)
    {
        $this->oAuth2Client = $oAuth2Client;
        $this->persistentDataHandler = $persistentDataHandler ?: new FacebookSessionPersistentDataHandler();
        $this->urlDetectionHandler = $urlHandler ?: new FacebookUrlDetectionHandler();
        $this->pseudoRandomStringGenerator = $prsg ?: $this->detectPseudoRandomStringGenerator();
    }

     
    public function getPersistentDataHandler()
    {
        return $this->persistentDataHandler;
    }

     
    public function getUrlDetectionHandler()
    {
        return $this->urlDetectionHandler;
    }

     
    public function getPseudoRandomStringGenerator()
    {
        return $this->pseudoRandomStringGenerator;
    }

     
    public function detectPseudoRandomStringGenerator()
    {
 
 
        if (function_exists('mcrypt_create_iv')) {
            return new McryptPseudoRandomStringGenerator();
        }

        if (function_exists('openssl_random_pseudo_bytes')) {
            return new OpenSslPseudoRandomStringGenerator();
        }

        if (!ini_get('open_basedir') && is_readable('/dev/urandom')) {
            return new UrandomPseudoRandomStringGenerator();
        }

        throw new FacebookSDKException('Unable to detect a cryptographically secure pseudo-random string generator.');
    }

     
    private function makeUrl($redirectUrl, array $scope, array $params = [], $separator = '&')
    {
        $state = $this->pseudoRandomStringGenerator->getPseudoRandomString(static::CSRF_LENGTH);
        $this->persistentDataHandler->set('state', $state);

        return $this->oAuth2Client->getAuthorizationUrl($redirectUrl, $state, $scope, $params, $separator);
    }

     
    public function getLoginUrl($redirectUrl, array $scope = [], $separator = '&')
    {
        return $this->makeUrl($redirectUrl, $scope, [], $separator);
    }

     
    public function getLogoutUrl($accessToken, $next, $separator = '&')
    {
        if (!$accessToken instanceof AccessToken) {
            $accessToken = new AccessToken($accessToken);
        }

        if ($accessToken->isAppAccessToken()) {
            throw new FacebookSDKException('Cannot generate a logout URL with an app access token.', 722);
        }

        $params = [
            'next' => $next,
            'access_token' => $accessToken->getValue(),
        ];

        return 'https://www.facebook.com/logout.php?' . http_build_query($params, null, $separator);
    }

     
    public function getReRequestUrl($redirectUrl, array $scope = [], $separator = '&')
    {
        $params = ['auth_type' => 'rerequest'];

        return $this->makeUrl($redirectUrl, $scope, $params, $separator);
    }

     
    public function getReAuthenticationUrl($redirectUrl, array $scope = [], $separator = '&')
    {
        $params = ['auth_type' => 'reauthenticate'];

        return $this->makeUrl($redirectUrl, $scope, $params, $separator);
    }

     
    public function getAccessToken($redirectUrl = null)
    {
        if (!$code = $this->getCode()) {
            return null;
        }

        $this->validateCsrf();

        $redirectUrl = $redirectUrl ?: $this->urlDetectionHandler->getCurrentUrl();
 
        $redirectUrl = FacebookUrlManipulator::removeParamsFromUrl($redirectUrl, ['state']);

        return $this->oAuth2Client->getAccessTokenFromCode($code, $redirectUrl);
    }

     
    protected function validateCsrf()
    {
        $state = $this->getState();
        $savedState = $this->persistentDataHandler->get('state');

        if (!$state || !$savedState) {
            throw new FacebookSDKException('Cross-site request forgery validation failed. Required param "state" missing.');
        }

        $savedLen = strlen($savedState);
        $givenLen = strlen($state);

        if ($savedLen !== $givenLen) {
            throw new FacebookSDKException('Cross-site request forgery validation failed. The "state" param from the URL and session do not match.');
        }

        $result = 0;
        for ($i = 0; $i < $savedLen; $i++) {
            $result |= ord($state[$i]) ^ ord($savedState[$i]);
        }

        if ($result !== 0) {
            throw new FacebookSDKException('Cross-site request forgery validation failed. The "state" param from the URL and session do not match.');
        }
    }

     
    protected function getCode()
    {
        return $this->getInput('code');
    }

     
    protected function getState()
    {
        return $this->getInput('state');
    }

     
    public function getErrorCode()
    {
        return $this->getInput('error_code');
    }

     
    public function getError()
    {
        return $this->getInput('error');
    }

     
    public function getErrorReason()
    {
        return $this->getInput('error_reason');
    }

     
    public function getErrorDescription()
    {
        return $this->getInput('error_description');
    }

     
    private function getInput($key)
    {
        return isset($_GET[$key]) ? $_GET[$key] : null;
    }
}
