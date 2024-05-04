<?php
 
namespace Facebook;

use ArrayIterator;
use IteratorAggregate;
use ArrayAccess;
use Facebook\Authentication\AccessToken;
use Facebook\Exceptions\FacebookSDKException;

 
class FacebookBatchRequest extends FacebookRequest implements IteratorAggregate, ArrayAccess
{
     
    protected $requests;

     
    protected $attachedFiles;

     
    public function __construct(FacebookApp $app = null, array $requests = [], $accessToken = null, $graphVersion = null)
    {
        parent::__construct($app, $accessToken, 'POST', '', [], null, $graphVersion);

        $this->add($requests);
    }

     
    public function add($request, $name = null)
    {
        if (is_array($request)) {
            foreach ($request as $key => $req) {
                $this->add($req, $key);
            }

            return $this;
        }

        if (!$request instanceof FacebookRequest) {
            throw new \InvalidArgumentException('Argument for add() must be of type array or FacebookRequest.');
        }

        $this->addFallbackDefaults($request);
        $requestToAdd = [
            'name' => $name,
            'request' => $request,
        ];
 
        $attachedFiles = $this->extractFileAttachments($request);
        if ($attachedFiles) {
            $requestToAdd['attached_files'] = $attachedFiles;
        }
        $this->requests[] = $requestToAdd;

        return $this;
    }

     
    public function addFallbackDefaults(FacebookRequest $request)
    {
        if (!$request->getApp()) {
            $app = $this->getApp();
            if (!$app) {
                throw new FacebookSDKException('Missing FacebookApp on FacebookRequest and no fallback detected on FacebookBatchRequest.');
            }
            $request->setApp($app);
        }

        if (!$request->getAccessToken()) {
            $accessToken = $this->getAccessToken();
            if (!$accessToken) {
                throw new FacebookSDKException('Missing access token on FacebookRequest and no fallback detected on FacebookBatchRequest.');
            }
            $request->setAccessToken($accessToken);
        }
    }

     
    public function extractFileAttachments(FacebookRequest $request)
    {
        if (!$request->containsFileUploads()) {
            return null;
        }

        $files = $request->getFiles();
        $fileNames = [];
        foreach ($files as $file) {
            $fileName = uniqid();
            $this->addFile($fileName, $file);
            $fileNames[] = $fileName;
        }

        $request->resetFiles();
 
        return implode(',', $fileNames);
    }

     
    public function getRequests()
    {
        return $this->requests;
    }

     
    public function prepareRequestsForBatch()
    {
        $this->validateBatchRequestCount();

        $params = [
            'batch' => $this->convertRequestsToJson(),
            'include_headers' => true,
        ];
        $this->setParams($params);
    }

     
    public function convertRequestsToJson()
    {
        $requests = [];
        foreach ($this->requests as $request) {
            $attachedFiles = isset($request['attached_files']) ? $request['attached_files'] : null;
            $requests[] = $this->requestEntityToBatchArray($request['request'], $request['name'], $attachedFiles);
        }

        return json_encode($requests);
    }

     
    public function validateBatchRequestCount()
    {
        $batchCount = count($this->requests);
        if ($batchCount === 0) {
            throw new FacebookSDKException('There are no batch requests to send.');
        } elseif ($batchCount > 50) {
 
            throw new FacebookSDKException('You cannot send more than 50 batch requests at a time.');
        }
    }

     
    public function requestEntityToBatchArray(FacebookRequest $request, $requestName = null, $attachedFiles = null)
    {
        $compiledHeaders = [];
        $headers = $request->getHeaders();
        foreach ($headers as $name => $value) {
            $compiledHeaders[] = $name . ': ' . $value;
        }

        $batch = [
            'headers' => $compiledHeaders,
            'method' => $request->getMethod(),
            'relative_url' => $request->getUrl(),
        ];
 
 
        $body = $request->getUrlEncodedBody()->getBody();
        if ($body) {
            $batch['body'] = $body;
        }

        if (isset($requestName)) {
            $batch['name'] = $requestName;
        }

        if (isset($attachedFiles)) {
            $batch['attached_files'] = $attachedFiles;
        }
 
 
 

        return $batch;
    }

     
    public function getIterator()
    {
        return new ArrayIterator($this->requests);
    }

     
    public function offsetSet($offset, $value)
    {
        $this->add($value, $offset);
    }

     
    public function offsetExists($offset)
    {
        return isset($this->requests[$offset]);
    }

     
    public function offsetUnset($offset)
    {
        unset($this->requests[$offset]);
    }

     
    public function offsetGet($offset)
    {
        return isset($this->requests[$offset]) ? $this->requests[$offset] : null;
    }
}
