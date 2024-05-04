<?php
 
namespace Facebook\HttpClients;

use Facebook\Http\GraphRawResponse;
use Facebook\Exceptions\FacebookSDKException;

 
class FacebookCurlHttpClient implements FacebookHttpClientInterface
{
     
    protected $curlErrorMessage = '';

     
    protected $curlErrorCode = 0;

     
    protected $rawResponse;

     
    protected $facebookCurl;

     
    const CURL_PROXY_QUIRK_VER = 0x071E00;

     
    const CONNECTION_ESTABLISHED = "HTTP/1.0 200 Connection established\r\n\r\n";

     
    public function __construct(FacebookCurl $facebookCurl = null)
    {
        $this->facebookCurl = $facebookCurl ?: new FacebookCurl();
    }

     
    public function send($url, $method, $body, array $headers, $timeOut)
    {
        $this->openConnection($url, $method, $body, $headers, $timeOut);
        $this->sendRequest();

        if ($curlErrorCode = $this->facebookCurl->errno()) {
            throw new FacebookSDKException($this->facebookCurl->error(), $curlErrorCode);
        }
 
        list($rawHeaders, $rawBody) = $this->extractResponseHeadersAndBody();

        $this->closeConnection();

        return new GraphRawResponse($rawHeaders, $rawBody);
    }

     
    public function openConnection($url, $method, $body, array $headers, $timeOut)
    {
        $options = [
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => $this->compileRequestHeaders($headers),
            CURLOPT_URL => $url,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => $timeOut,
            CURLOPT_RETURNTRANSFER => true, // Follow 301 redirects
            CURLOPT_HEADER => true, // Enable header processing
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_CAINFO => __DIR__ . '/certs/DigiCertHighAssuranceEVRootCA.pem',
        ];

        if ($method !== "GET") {
            $options[CURLOPT_POSTFIELDS] = $body;
        }

        $this->facebookCurl->init();
        $this->facebookCurl->setoptArray($options);
    }

     
    public function closeConnection()
    {
        $this->facebookCurl->close();
    }

     
    public function sendRequest()
    {
        $this->rawResponse = $this->facebookCurl->exec();
    }

     
    public function compileRequestHeaders(array $headers)
    {
        $return = [];

        foreach ($headers as $key => $value) {
            $return[] = $key . ': ' . $value;
        }

        return $return;
    }

     
    public function extractResponseHeadersAndBody()
    {
        $headerSize = $this->getHeaderSize();

        $rawHeaders = mb_substr($this->rawResponse, 0, $headerSize);
        $rawBody = mb_substr($this->rawResponse, $headerSize);

        return [trim($rawHeaders), trim($rawBody)];
    }

     
    private function getHeaderSize()
    {
        $headerSize = $this->facebookCurl->getinfo(CURLINFO_HEADER_SIZE);
 
 
        if ($this->needsCurlProxyFix()) {
 
            if (preg_match('/Content-Length: (\d+)/', $this->rawResponse, $m)) {
                $headerSize = mb_strlen($this->rawResponse) - $m[1];
            } elseif (stripos($this->rawResponse, self::CONNECTION_ESTABLISHED) !== false) {
                $headerSize += mb_strlen(self::CONNECTION_ESTABLISHED);
            }
        }

        return $headerSize;
    }

     
    private function needsCurlProxyFix()
    {
        $ver = $this->facebookCurl->version();
        $version = $ver['version_number'];

        return $version < self::CURL_PROXY_QUIRK_VER;
    }
}
