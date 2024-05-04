<?php
 

require_once "Google_Verifier.php";
require_once "Google_LoginTicket.php";
require_once "service/Google_Utils.php";

 
class Google_OAuth2 extends Google_Auth {
  public $clientId;
  public $clientSecret;
  public $developerKey;
  public $token;
  public $redirectUri;
  public $state;
  public $accessType = 'offline';
  public $approvalPrompt = 'force';

   
  public $assertionCredentials;

  const OAUTH2_REVOKE_URI = 'https://accounts.google.com/o/oauth2/revoke';
  const OAUTH2_TOKEN_URI = 'https://accounts.google.com/o/oauth2/token';
  const OAUTH2_AUTH_URL = 'https://accounts.google.com/o/oauth2/auth';
  const OAUTH2_FEDERATED_SIGNON_CERTS_URL = 'https://www.googleapis.com/oauth2/v1/certs';
  const CLOCK_SKEW_SECS = 300; // five minutes in seconds
  const AUTH_TOKEN_LIFETIME_SECS = 300; // five minutes in seconds
  const MAX_TOKEN_LIFETIME_SECS = 86400; // one day in seconds

   
  public function __construct() {
    global $apiConfig;
    
    if (! empty($apiConfig['developer_key'])) {
      $this->developerKey = $apiConfig['developer_key'];
    }

    if (! empty($apiConfig['oauth2_client_id'])) {
      $this->clientId = $apiConfig['oauth2_client_id'];
    }

    if (! empty($apiConfig['oauth2_client_secret'])) {
      $this->clientSecret = $apiConfig['oauth2_client_secret'];
    }

    if (! empty($apiConfig['oauth2_redirect_uri'])) {
      $this->redirectUri = $apiConfig['oauth2_redirect_uri'];
    }
    
    if (! empty($apiConfig['oauth2_access_type'])) {
      $this->accessType = $apiConfig['oauth2_access_type'];
    }

    if (! empty($apiConfig['oauth2_approval_prompt'])) {
      $this->approvalPrompt = $apiConfig['oauth2_approval_prompt'];
    }
  }

   
  public function authenticate($service, $code = null) {
    if (!$code && isset($_GET['code'])) {
      $code = $_GET['code'];
    }

    if ($code) {
 
      $request = Google_Client::$io->makeRequest(new Google_HttpRequest(self::OAUTH2_TOKEN_URI, 'POST', array(), array(
          'code' => $code,
          'grant_type' => 'authorization_code',
          'redirect_uri' => $this->redirectUri,
          'client_id' => $this->clientId,
          'client_secret' => $this->clientSecret
      )));

      if ($request->getResponseHttpCode() == 200) {
        $this->setAccessToken($request->getResponseBody());
        $this->token['created'] = time();
        return $this->getAccessToken();
      } else {
        $response = $request->getResponseBody();
        $decodedResponse = json_decode($response, true);
        if ($decodedResponse != null && $decodedResponse['error']) {
          $response = $decodedResponse['error'];
        }
        throw new Google_AuthException("Error fetching OAuth2 access token, message: '$response'", $request->getResponseHttpCode());
      }
    }

    $authUrl = $this->createAuthUrl($service['scope']);
    header('Location: ' . $authUrl);
    return true;
  } 

   
  public function createAuthUrl($scope) {
    $params = array(
        'response_type=code',
        'redirect_uri=' . urlencode($this->redirectUri),
        'client_id=' . urlencode($this->clientId),
        'scope=' . urlencode($scope),
        'access_type=' . urlencode($this->accessType),
        'approval_prompt=' . urlencode($this->approvalPrompt)
    );

    if (isset($this->state)) {
      $params[] = 'state=' . urlencode($this->state);
    }
    $params = implode('&', $params);
    return self::OAUTH2_AUTH_URL . "?$params";
  }

   
  public function setAccessToken($token) {
    $token = json_decode($token, true);
    if ($token == null) {
      throw new Google_AuthException('Could not json decode the token');
    }
    if (! isset($token['access_token'])) {
      throw new Google_AuthException("Invalid token format");
    }
    $this->token = $token;
  }

  public function getAccessToken() {
    return json_encode($this->token);
  }

  public function setDeveloperKey($developerKey) {
    $this->developerKey = $developerKey;
  }

  public function setState($state) {
    $this->state = $state;
  }

  public function setAccessType($accessType) {
    $this->accessType = $accessType;
  }

  public function setApprovalPrompt($approvalPrompt) {
    $this->approvalPrompt = $approvalPrompt;
  }

  public function setAssertionCredentials(Google_AssertionCredentials $creds) {
    $this->assertionCredentials = $creds;
  }

   
  public function sign(Google_HttpRequest $request) {
 
    if ($this->developerKey) {
      $requestUrl = $request->getUrl();
      $requestUrl .= (strpos($request->getUrl(), '?') === false) ? '?' : '&';
      $requestUrl .=  'key=' . urlencode($this->developerKey);
      $request->setUrl($requestUrl);
    }
 
    if (null == $this->token && null == $this->assertionCredentials) {
      return $request;
    }
 
 
    if ($this->isAccessTokenExpired()) {
      if ($this->assertionCredentials) {
        $this->refreshTokenWithAssertion();
      } else {
        if (! array_key_exists('refresh_token', $this->token)) {
            throw new Google_AuthException("The OAuth 2.0 access token has expired, "
                . "and a refresh token is not available. Refresh tokens are not "
                . "returned for responses that were auto-approved.");
        }
        $this->refreshToken($this->token['refresh_token']);
      }
    }
 
    $request->setRequestHeaders(
        array('Authorization' => 'Bearer ' . $this->token['access_token'])
    );

    return $request;
  }

   
  public function refreshToken($refreshToken) {
    $this->refreshTokenRequest(array(
        'client_id' => $this->clientId,
        'client_secret' => $this->clientSecret,
        'refresh_token' => $refreshToken,
        'grant_type' => 'refresh_token'
    ));
  }

   
  public function refreshTokenWithAssertion($assertionCredentials = null) {
    if (!$assertionCredentials) {
      $assertionCredentials = $this->assertionCredentials;
    }

    $this->refreshTokenRequest(array(
        'grant_type' => 'assertion',
        'assertion_type' => $assertionCredentials->assertionType,
        'assertion' => $assertionCredentials->generateAssertion(),
    ));
  }

  private function refreshTokenRequest($params) {
    $http = new Google_HttpRequest(self::OAUTH2_TOKEN_URI, 'POST', array(), $params);
    $request = Google_Client::$io->makeRequest($http);

    $code = $request->getResponseHttpCode();
    $body = $request->getResponseBody();
    if (200 == $code) {
      $token = json_decode($body, true);
      if ($token == null) {
        throw new Google_AuthException("Could not json decode the access token");
      }

      if (! isset($token['access_token']) || ! isset($token['expires_in'])) {
        throw new Google_AuthException("Invalid token format");
      }

      $this->token['access_token'] = $token['access_token'];
      $this->token['expires_in'] = $token['expires_in'];
      $this->token['created'] = time();
    } else {
      throw new Google_AuthException("Error refreshing the OAuth2 token, message: '$body'", $code);
    }
  }

     
  public function revokeToken($token = null) {
    if (!$token) {
      $token = $this->token['access_token'];
    }
    $request = new Google_HttpRequest(self::OAUTH2_REVOKE_URI, 'POST', array(), "token=$token");
    $response = Google_Client::$io->makeRequest($request);
    $code = $response->getResponseHttpCode();
    if ($code == 200) {
      $this->token = null;
      return true;
    }

    return false;
  }

   
  public function isAccessTokenExpired() {
    if (null == $this->token) {
      return true;
    }
 
    $expired = ($this->token['created']
        + ($this->token['expires_in'] - 30)) < time();

    return $expired;
  }
 
 
 
  private function getFederatedSignOnCerts() {
 
    $request = Google_Client::$io->makeRequest(new Google_HttpRequest(
        self::OAUTH2_FEDERATED_SIGNON_CERTS_URL));
    if ($request->getResponseHttpCode() == 200) {
      $certs = json_decode($request->getResponseBody(), true);
      if ($certs) {
        return $certs;
      }
    }
    throw new Google_AuthException(
        "Failed to retrieve verification certificates: '" .
            $request->getResponseBody() . "'.",
        $request->getResponseHttpCode());
  }

   
  public function verifyIdToken($id_token = null, $audience = null) {
    if (!$id_token) {
      $id_token = $this->token['id_token'];
    }

    $certs = $this->getFederatedSignonCerts();
    if (!$audience) {
      $audience = $this->clientId;
    }
    return $this->verifySignedJwtWithCerts($id_token, $certs, $audience);
  }
 
 
  function verifySignedJwtWithCerts($jwt, $certs, $required_audience) {
    $segments = explode(".", $jwt);
    if (count($segments) != 3) {
      throw new Google_AuthException("Wrong number of segments in token: $jwt");
    }
    $signed = $segments[0] . "." . $segments[1];
    $signature = Google_Utils::urlSafeB64Decode($segments[2]);
 
    $envelope = json_decode(Google_Utils::urlSafeB64Decode($segments[0]), true);
    if (!$envelope) {
      throw new Google_AuthException("Can't parse token envelope: " . $segments[0]);
    }
 
    $json_body = Google_Utils::urlSafeB64Decode($segments[1]);
    $payload = json_decode($json_body, true);
    if (!$payload) {
      throw new Google_AuthException("Can't parse token payload: " . $segments[1]);
    }
 
    $verified = false;
    foreach ($certs as $keyName => $pem) {
      $public_key = new Google_PemVerifier($pem);
      if ($public_key->verify($signed, $signature)) {
        $verified = true;
        break;
      }
    }

    if (!$verified) {
      throw new Google_AuthException("Invalid token signature: $jwt");
    }
 
    $iat = 0;
    if (array_key_exists("iat", $payload)) {
      $iat = $payload["iat"];
    }
    if (!$iat) {
      throw new Google_AuthException("No issue time in token: $json_body");
    }
    $earliest = $iat - self::CLOCK_SKEW_SECS;
 
    $now = time();
    $exp = 0;
    if (array_key_exists("exp", $payload)) {
      $exp = $payload["exp"];
    }
    if (!$exp) {
      throw new Google_AuthException("No expiration time in token: $json_body");
    }
    if ($exp >= $now + self::MAX_TOKEN_LIFETIME_SECS) {
      throw new Google_AuthException(
          "Expiration time too far in future: $json_body");
    }

    $latest = $exp + self::CLOCK_SKEW_SECS;
    if ($now < $earliest) {
      throw new Google_AuthException(
          "Token used too early, $now < $earliest: $json_body");
    }
    if ($now > $latest) {
      throw new Google_AuthException(
          "Token used too late, $now > $latest: $json_body");
    }
 
 
    $aud = $payload["aud"];
    if ($aud != $required_audience) {
      throw new Google_AuthException("Wrong recipient, $aud != $required_audience: $json_body");
    }
 
    return new Google_LoginTicket($envelope, $payload);
  }
}
