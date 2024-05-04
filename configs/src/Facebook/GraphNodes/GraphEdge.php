<?php
 
namespace Facebook\GraphNodes;

use Facebook\FacebookRequest;
use Facebook\Url\FacebookUrlManipulator;
use Facebook\Exceptions\FacebookSDKException;

 
class GraphEdge extends Collection
{
     
    protected $request;

     
    protected $metaData = [];

     
    protected $parentEdgeEndpoint;

     
    protected $subclassName;

     
    public function __construct(FacebookRequest $request, array $data = [], array $metaData = [], $parentEdgeEndpoint = null, $subclassName = null)
    {
        $this->request = $request;
        $this->metaData = $metaData;
        $this->parentEdgeEndpoint = $parentEdgeEndpoint;
        $this->subclassName = $subclassName;

        parent::__construct($data);
    }

     
    public function getParentGraphEdge()
    {
        return $this->parentEdgeEndpoint;
    }

     
    public function getSubClassName()
    {
        return $this->subclassName;
    }

     
    public function getMetaData()
    {
        return $this->metaData;
    }

     
    public function getNextCursor()
    {
        return $this->getCursor('after');
    }

     
    public function getPreviousCursor()
    {
        return $this->getCursor('before');
    }

     
    public function getCursor($direction)
    {
        if (isset($this->metaData['paging']['cursors'][$direction])) {
            return $this->metaData['paging']['cursors'][$direction];
        }

        return null;
    }

     
    public function getPaginationUrl($direction)
    {
        $this->validateForPagination();
 
        if (isset($this->metaData['paging'][$direction])) {
 
 
            $pageUrl = $this->metaData['paging'][$direction];

            return FacebookUrlManipulator::baseGraphUrlEndpoint($pageUrl);
        }
 
        $cursorDirection = $direction === 'next' ? 'after' : 'before';
        $cursor = $this->getCursor($cursorDirection);
        if (!$cursor) {
            return null;
        }
 
        if (!$this->parentEdgeEndpoint) {
            return null;
        }
 
 
        $pageUrl = $this->parentEdgeEndpoint . '?' . $cursorDirection . '=' . urlencode($cursor);
 
        $originalUrl = $this->request->getUrl();
        $pageUrl = FacebookUrlManipulator::mergeUrlParams($originalUrl, $pageUrl);

        return FacebookUrlManipulator::forceSlashPrefix($pageUrl);
    }

     
    public function validateForPagination()
    {
        if ($this->request->getMethod() !== 'GET') {
            throw new FacebookSDKException('You can only paginate on a GET request.', 720);
        }
    }

     
    public function getPaginationRequest($direction)
    {
        $pageUrl = $this->getPaginationUrl($direction);
        if (!$pageUrl) {
            return null;
        }

        $newRequest = clone $this->request;
        $newRequest->setEndpoint($pageUrl);

        return $newRequest;
    }

     
    public function getNextPageRequest()
    {
        return $this->getPaginationRequest('next');
    }

     
    public function getPreviousPageRequest()
    {
        return $this->getPaginationRequest('previous');
    }

     
    public function getTotalCount()
    {
        if (isset($this->metaData['summary']['total_count'])) {
            return $this->metaData['summary']['total_count'];
        }

        return null;
    }
}
