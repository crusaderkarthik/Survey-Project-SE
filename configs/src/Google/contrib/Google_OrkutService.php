<?php
 


   
  class Google_CommunityMembersServiceResource extends Google_ServiceResource {


     
    public function insert($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityMembers($data);
      } else {
        return $data;
      }
    }
     
    public function get($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityMembers($data);
      } else {
        return $data;
      }
    }
     
    public function listCommunityMembers($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityMembersList($data);
      } else {
        return $data;
      }
    }
     
    public function delete($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_ActivitiesServiceResource extends Google_ServiceResource {


     
    public function listActivities($userId, $collection, $optParams = array()) {
      $params = array('userId' => $userId, 'collection' => $collection);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_ActivityList($data);
      } else {
        return $data;
      }
    }
     
    public function delete($activityId, $optParams = array()) {
      $params = array('activityId' => $activityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_CommunityPollCommentsServiceResource extends Google_ServiceResource {


     
    public function insert($communityId, $pollId, Google_CommunityPollComment $postBody, $optParams = array()) {
      $params = array('communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityPollComment($data);
      } else {
        return $data;
      }
    }
     
    public function listCommunityPollComments($communityId, $pollId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'pollId' => $pollId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityPollCommentList($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_CommunityPollsServiceResource extends Google_ServiceResource {


     
    public function listCommunityPolls($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityPollList($data);
      } else {
        return $data;
      }
    }
     
    public function get($communityId, $pollId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'pollId' => $pollId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityPoll($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_CommunityMessagesServiceResource extends Google_ServiceResource {


     
    public function insert($communityId, $topicId, Google_CommunityMessage $postBody, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityMessage($data);
      } else {
        return $data;
      }
    }
     
    public function listCommunityMessages($communityId, $topicId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityMessageList($data);
      } else {
        return $data;
      }
    }
     
    public function delete($communityId, $topicId, $messageId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId, 'messageId' => $messageId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_CommunityTopicsServiceResource extends Google_ServiceResource {


     
    public function insert($communityId, Google_CommunityTopic $postBody, $optParams = array()) {
      $params = array('communityId' => $communityId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityTopic($data);
      } else {
        return $data;
      }
    }
     
    public function get($communityId, $topicId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityTopic($data);
      } else {
        return $data;
      }
    }
     
    public function listCommunityTopics($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityTopicList($data);
      } else {
        return $data;
      }
    }
     
    public function delete($communityId, $topicId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_CommentsServiceResource extends Google_ServiceResource {


     
    public function insert($activityId, Google_Comment $postBody, $optParams = array()) {
      $params = array('activityId' => $activityId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Comment($data);
      } else {
        return $data;
      }
    }
     
    public function get($commentId, $optParams = array()) {
      $params = array('commentId' => $commentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Comment($data);
      } else {
        return $data;
      }
    }
     
    public function listComments($activityId, $optParams = array()) {
      $params = array('activityId' => $activityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_CommentList($data);
      } else {
        return $data;
      }
    }
     
    public function delete($commentId, $optParams = array()) {
      $params = array('commentId' => $commentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_AclServiceResource extends Google_ServiceResource {


     
    public function delete($activityId, $userId, $optParams = array()) {
      $params = array('activityId' => $activityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_CommunityRelatedServiceResource extends Google_ServiceResource {


     
    public function listCommunityRelated($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityList($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_ScrapsServiceResource extends Google_ServiceResource {


     
    public function insert(Google_Activity $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Activity($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_CommunityPollVotesServiceResource extends Google_ServiceResource {


     
    public function insert($communityId, $pollId, Google_CommunityPollVote $postBody, $optParams = array()) {
      $params = array('communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityPollVote($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_CommunitiesServiceResource extends Google_ServiceResource {


     
    public function listCommunities($userId, $optParams = array()) {
      $params = array('userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityList($data);
      } else {
        return $data;
      }
    }
     
    public function get($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Community($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_CommunityFollowServiceResource extends Google_ServiceResource {


     
    public function insert($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_CommunityMembers($data);
      } else {
        return $data;
      }
    }
     
    public function delete($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_ActivityVisibilityServiceResource extends Google_ServiceResource {


     
    public function patch($activityId, Google_Visibility $postBody, $optParams = array()) {
      $params = array('activityId' => $activityId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Visibility($data);
      } else {
        return $data;
      }
    }
     
    public function update($activityId, Google_Visibility $postBody, $optParams = array()) {
      $params = array('activityId' => $activityId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Visibility($data);
      } else {
        return $data;
      }
    }
     
    public function get($activityId, $optParams = array()) {
      $params = array('activityId' => $activityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Visibility($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_BadgesServiceResource extends Google_ServiceResource {


     
    public function listBadges($userId, $optParams = array()) {
      $params = array('userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_BadgeList($data);
      } else {
        return $data;
      }
    }
     
    public function get($userId, $badgeId, $optParams = array()) {
      $params = array('userId' => $userId, 'badgeId' => $badgeId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Badge($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_CountersServiceResource extends Google_ServiceResource {


     
    public function listCounters($userId, $optParams = array()) {
      $params = array('userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Counters($data);
      } else {
        return $data;
      }
    }
  }

 
class Google_OrkutService extends Google_Service {
  public $communityMembers;
  public $activities;
  public $communityPollComments;
  public $communityPolls;
  public $communityMessages;
  public $communityTopics;
  public $comments;
  public $acl;
  public $communityRelated;
  public $scraps;
  public $communityPollVotes;
  public $communities;
  public $communityFollow;
  public $activityVisibility;
  public $badges;
  public $counters;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'orkut/v2/';
    $this->version = 'v2';
    $this->serviceName = 'orkut';

    $client->addService($this->serviceName, $this->version);
    $this->communityMembers = new Google_CommunityMembersServiceResource($this, $this->serviceName, 'communityMembers', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "userId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.communityMembers.insert", "httpMethod": "POST", "path": "communities/{communityId}/members/{userId}", "response": {"$ref": "CommunityMembers"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "userId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityMembers.get", "httpMethod": "GET", "path": "communities/{communityId}/members/{userId}", "response": {"$ref": "CommunityMembers"}}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "friendsOnly": {"type": "boolean", "location": "query"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "maxResults": {"minimum": "1", "type": "integer", "location": "query", "format": "uint32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityMembers.list", "httpMethod": "GET", "path": "communities/{communityId}/members", "response": {"$ref": "CommunityMembersList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "path": "communities/{communityId}/members/{userId}", "id": "orkut.communityMembers.delete", "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "userId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "maxResults": {"location": "query", "minimum": "1", "type": "integer", "maximum": "100", "format": "uint32"}, "userId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}, "collection": {"required": true, "type": "string", "location": "path", "enum": ["all", "scraps", "stream"]}}, "id": "orkut.activities.list", "httpMethod": "GET", "path": "people/{userId}/activities/{collection}", "response": {"$ref": "ActivityList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "path": "activities/{activityId}", "id": "orkut.activities.delete", "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->communityPollComments = new Google_CommunityPollCommentsServiceResource($this, $this->serviceName, 'communityPollComments', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "pollId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "CommunityPollComment"}, "response": {"$ref": "CommunityPollComment"}, "httpMethod": "POST", "path": "communities/{communityId}/polls/{pollId}/comments", "id": "orkut.communityPollComments.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pollId": {"required": true, "type": "string", "location": "path"}, "pageToken": {"type": "string", "location": "query"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "maxResults": {"minimum": "1", "type": "integer", "location": "query", "format": "uint32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityPollComments.list", "httpMethod": "GET", "path": "communities/{communityId}/polls/{pollId}/comments", "response": {"$ref": "CommunityPollCommentList"}}}}', true));
    $this->communityPolls = new Google_CommunityPollsServiceResource($this, $this->serviceName, 'communityPolls', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "maxResults": {"minimum": "1", "type": "integer", "location": "query", "format": "uint32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityPolls.list", "httpMethod": "GET", "path": "communities/{communityId}/polls", "response": {"$ref": "CommunityPollList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "pollId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityPolls.get", "httpMethod": "GET", "path": "communities/{communityId}/polls/{pollId}", "response": {"$ref": "CommunityPoll"}}}}', true));
    $this->communityMessages = new Google_CommunityMessagesServiceResource($this, $this->serviceName, 'communityMessages', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"topicId": {"required": true, "type": "string", "location": "path", "format": "int64"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "CommunityMessage"}, "response": {"$ref": "CommunityMessage"}, "httpMethod": "POST", "path": "communities/{communityId}/topics/{topicId}/messages", "id": "orkut.communityMessages.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "maxResults": {"location": "query", "minimum": "1", "type": "integer", "maximum": "100", "format": "uint32"}, "hl": {"type": "string", "location": "query"}, "topicId": {"required": true, "type": "string", "location": "path", "format": "int64"}}, "id": "orkut.communityMessages.list", "httpMethod": "GET", "path": "communities/{communityId}/topics/{topicId}/messages", "response": {"$ref": "CommunityMessageList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "path": "communities/{communityId}/topics/{topicId}/messages/{messageId}", "id": "orkut.communityMessages.delete", "parameters": {"topicId": {"required": true, "type": "string", "location": "path", "format": "int64"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "messageId": {"required": true, "type": "string", "location": "path", "format": "int64"}}, "httpMethod": "DELETE"}}}', true));
    $this->communityTopics = new Google_CommunityTopicsServiceResource($this, $this->serviceName, 'communityTopics', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"isShout": {"type": "boolean", "location": "query"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "CommunityTopic"}, "response": {"$ref": "CommunityTopic"}, "httpMethod": "POST", "path": "communities/{communityId}/topics", "id": "orkut.communityTopics.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"topicId": {"required": true, "type": "string", "location": "path", "format": "int64"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityTopics.get", "httpMethod": "GET", "path": "communities/{communityId}/topics/{topicId}", "response": {"$ref": "CommunityTopic"}}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "maxResults": {"location": "query", "minimum": "1", "type": "integer", "maximum": "100", "format": "uint32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityTopics.list", "httpMethod": "GET", "path": "communities/{communityId}/topics", "response": {"$ref": "CommunityTopicList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "path": "communities/{communityId}/topics/{topicId}", "id": "orkut.communityTopics.delete", "parameters": {"topicId": {"required": true, "type": "string", "location": "path", "format": "int64"}, "communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "httpMethod": "DELETE"}}}', true));
    $this->comments = new Google_CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "httpMethod": "POST", "path": "activities/{activityId}/comments", "id": "orkut.comments.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"commentId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.comments.get", "httpMethod": "GET", "path": "comments/{commentId}", "response": {"$ref": "Comment"}}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"orderBy": {"default": "DESCENDING_SORT", "enum": ["ascending", "descending"], "type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "activityId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "1", "type": "integer", "location": "query", "format": "uint32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.comments.list", "httpMethod": "GET", "path": "activities/{activityId}/comments", "response": {"$ref": "CommentList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "path": "comments/{commentId}", "id": "orkut.comments.delete", "parameters": {"commentId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->acl = new Google_AclServiceResource($this, $this->serviceName, 'acl', json_decode('{"methods": {"delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "path": "activities/{activityId}/acl/{userId}", "id": "orkut.acl.delete", "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}, "userId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->communityRelated = new Google_CommunityRelatedServiceResource($this, $this->serviceName, 'communityRelated', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityRelated.list", "httpMethod": "GET", "path": "communities/{communityId}/related", "response": {"$ref": "CommunityList"}}}}', true));
    $this->scraps = new Google_ScrapsServiceResource($this, $this->serviceName, 'scraps', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "request": {"$ref": "Activity"}, "response": {"$ref": "Activity"}, "httpMethod": "POST", "path": "activities/scraps", "id": "orkut.scraps.insert"}}}', true));
    $this->communityPollVotes = new Google_CommunityPollVotesServiceResource($this, $this->serviceName, 'communityPollVotes', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "pollId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "CommunityPollVote"}, "response": {"$ref": "CommunityPollVote"}, "httpMethod": "POST", "path": "communities/{communityId}/polls/{pollId}/votes", "id": "orkut.communityPollVotes.insert"}}}', true));
    $this->communities = new Google_CommunitiesServiceResource($this, $this->serviceName, 'communities', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"orderBy": {"enum": ["id", "ranked"], "type": "string", "location": "query"}, "userId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "1", "type": "integer", "location": "query", "format": "uint32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communities.list", "httpMethod": "GET", "path": "people/{userId}/communities", "response": {"$ref": "CommunityList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communities.get", "httpMethod": "GET", "path": "communities/{communityId}", "response": {"$ref": "Community"}}}}', true));
    $this->communityFollow = new Google_CommunityFollowServiceResource($this, $this->serviceName, 'communityFollow', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "userId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.communityFollow.insert", "httpMethod": "POST", "path": "communities/{communityId}/followers/{userId}", "response": {"$ref": "CommunityMembers"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "path": "communities/{communityId}/followers/{userId}", "id": "orkut.communityFollow.delete", "parameters": {"communityId": {"required": true, "type": "integer", "location": "path", "format": "int32"}, "userId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->activityVisibility = new Google_ActivityVisibilityServiceResource($this, $this->serviceName, 'activityVisibility', json_decode('{"methods": {"patch": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Visibility"}, "response": {"$ref": "Visibility"}, "httpMethod": "PATCH", "path": "activities/{activityId}/visibility", "id": "orkut.activityVisibility.patch"}, "update": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Visibility"}, "response": {"$ref": "Visibility"}, "httpMethod": "PUT", "path": "activities/{activityId}/visibility", "id": "orkut.activityVisibility.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.activityVisibility.get", "httpMethod": "GET", "path": "activities/{activityId}/visibility", "response": {"$ref": "Visibility"}}}}', true));
    $this->badges = new Google_BadgesServiceResource($this, $this->serviceName, 'badges', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"userId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.badges.list", "httpMethod": "GET", "path": "people/{userId}/badges", "response": {"$ref": "BadgeList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"userId": {"required": true, "type": "string", "location": "path"}, "badgeId": {"required": true, "type": "string", "location": "path", "format": "int64"}}, "id": "orkut.badges.get", "httpMethod": "GET", "path": "people/{userId}/badges/{badgeId}", "response": {"$ref": "Badge"}}}}', true));
    $this->counters = new Google_CountersServiceResource($this, $this->serviceName, 'counters', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"userId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.counters.list", "httpMethod": "GET", "path": "people/{userId}/counters", "response": {"$ref": "Counters"}}}}', true));

  }
}

class Google_Acl extends Google_Model {
  protected $__itemsType = 'Google_AclItems';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $description;
  public $totalParticipants;
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_AclItems', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setTotalParticipants($totalParticipants) {
    $this->totalParticipants = $totalParticipants;
  }
  public function getTotalParticipants() {
    return $this->totalParticipants;
  }
}

class Google_AclItems extends Google_Model {
  public $type;
  public $id;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_Activity extends Google_Model {
  public $kind;
  protected $__linksType = 'Google_OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public $title;
  protected $__objectType = 'Google_ActivityObject';
  protected $__objectDataType = '';
  public $object;
  public $updated;
  protected $__actorType = 'Google_OrkutAuthorResource';
  protected $__actorDataType = '';
  public $actor;
  protected $__accessType = 'Google_Acl';
  protected $__accessDataType = '';
  public $access;
  public $verb;
  public $published;
  public $id;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setObject(Google_ActivityObject $object) {
    $this->object = $object;
  }
  public function getObject() {
    return $this->object;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setActor(Google_OrkutAuthorResource $actor) {
    $this->actor = $actor;
  }
  public function getActor() {
    return $this->actor;
  }
  public function setAccess(Google_Acl $access) {
    $this->access = $access;
  }
  public function getAccess() {
    return $this->access;
  }
  public function setVerb($verb) {
    $this->verb = $verb;
  }
  public function getVerb() {
    return $this->verb;
  }
  public function setPublished($published) {
    $this->published = $published;
  }
  public function getPublished() {
    return $this->published;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_ActivityList extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_Activity';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Activity', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_ActivityObject extends Google_Model {
  public $content;
  protected $__itemsType = 'Google_OrkutActivityobjectsResource';
  protected $__itemsDataType = 'array';
  public $items;
  protected $__repliesType = 'Google_ActivityObjectReplies';
  protected $__repliesDataType = '';
  public $replies;
  public $objectType;
  public function setContent($content) {
    $this->content = $content;
  }
  public function getContent() {
    return $this->content;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_OrkutActivityobjectsResource', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setReplies(Google_ActivityObjectReplies $replies) {
    $this->replies = $replies;
  }
  public function getReplies() {
    return $this->replies;
  }
  public function setObjectType($objectType) {
    $this->objectType = $objectType;
  }
  public function getObjectType() {
    return $this->objectType;
  }
}

class Google_ActivityObjectReplies extends Google_Model {
  public $totalItems;
  protected $__itemsType = 'Google_Comment';
  protected $__itemsDataType = 'array';
  public $items;
  public $url;
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Comment', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class Google_Badge extends Google_Model {
  public $badgeSmallLogo;
  public $kind;
  public $description;
  public $sponsorLogo;
  public $sponsorName;
  public $badgeLargeLogo;
  public $caption;
  public $sponsorUrl;
  public $id;
  public function setBadgeSmallLogo($badgeSmallLogo) {
    $this->badgeSmallLogo = $badgeSmallLogo;
  }
  public function getBadgeSmallLogo() {
    return $this->badgeSmallLogo;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setSponsorLogo($sponsorLogo) {
    $this->sponsorLogo = $sponsorLogo;
  }
  public function getSponsorLogo() {
    return $this->sponsorLogo;
  }
  public function setSponsorName($sponsorName) {
    $this->sponsorName = $sponsorName;
  }
  public function getSponsorName() {
    return $this->sponsorName;
  }
  public function setBadgeLargeLogo($badgeLargeLogo) {
    $this->badgeLargeLogo = $badgeLargeLogo;
  }
  public function getBadgeLargeLogo() {
    return $this->badgeLargeLogo;
  }
  public function setCaption($caption) {
    $this->caption = $caption;
  }
  public function getCaption() {
    return $this->caption;
  }
  public function setSponsorUrl($sponsorUrl) {
    $this->sponsorUrl = $sponsorUrl;
  }
  public function getSponsorUrl() {
    return $this->sponsorUrl;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_BadgeList extends Google_Model {
  protected $__itemsType = 'Google_Badge';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Badge', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_Comment extends Google_Model {
  protected $__inReplyToType = 'Google_CommentInReplyTo';
  protected $__inReplyToDataType = '';
  public $inReplyTo;
  public $kind;
  protected $__linksType = 'Google_OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  protected $__actorType = 'Google_OrkutAuthorResource';
  protected $__actorDataType = '';
  public $actor;
  public $content;
  public $published;
  public $id;
  public function setInReplyTo(Google_CommentInReplyTo $inReplyTo) {
    $this->inReplyTo = $inReplyTo;
  }
  public function getInReplyTo() {
    return $this->inReplyTo;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setActor(Google_OrkutAuthorResource $actor) {
    $this->actor = $actor;
  }
  public function getActor() {
    return $this->actor;
  }
  public function setContent($content) {
    $this->content = $content;
  }
  public function getContent() {
    return $this->content;
  }
  public function setPublished($published) {
    $this->published = $published;
  }
  public function getPublished() {
    return $this->published;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_CommentInReplyTo extends Google_Model {
  public $type;
  public $href;
  public $ref;
  public $rel;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setHref($href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setRef($ref) {
    $this->ref = $ref;
  }
  public function getRef() {
    return $this->ref;
  }
  public function setRel($rel) {
    $this->rel = $rel;
  }
  public function getRel() {
    return $this->rel;
  }
}

class Google_CommentList extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_Comment';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $previousPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Comment', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPreviousPageToken($previousPageToken) {
    $this->previousPageToken = $previousPageToken;
  }
  public function getPreviousPageToken() {
    return $this->previousPageToken;
  }
}

class Google_Community extends Google_Model {
  public $category;
  public $kind;
  public $member_count;
  public $description;
  public $language;
  protected $__linksType = 'Google_OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public $creation_date;
  protected $__ownerType = 'Google_OrkutAuthorResource';
  protected $__ownerDataType = '';
  public $owner;
  protected $__moderatorsType = 'Google_OrkutAuthorResource';
  protected $__moderatorsDataType = 'array';
  public $moderators;
  public $location;
  protected $__co_ownersType = 'Google_OrkutAuthorResource';
  protected $__co_ownersDataType = 'array';
  public $co_owners;
  public $photo_url;
  public $id;
  public $name;
  public function setCategory($category) {
    $this->category = $category;
  }
  public function getCategory() {
    return $this->category;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMember_count($member_count) {
    $this->member_count = $member_count;
  }
  public function getMember_count() {
    return $this->member_count;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setLanguage($language) {
    $this->language = $language;
  }
  public function getLanguage() {
    return $this->language;
  }
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setCreation_date($creation_date) {
    $this->creation_date = $creation_date;
  }
  public function getCreation_date() {
    return $this->creation_date;
  }
  public function setOwner(Google_OrkutAuthorResource $owner) {
    $this->owner = $owner;
  }
  public function getOwner() {
    return $this->owner;
  }
  public function setModerators(  $moderators) {
    $this->assertIsArray($moderators, 'Google_OrkutAuthorResource', __METHOD__);
    $this->moderators = $moderators;
  }
  public function getModerators() {
    return $this->moderators;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setCo_owners(  $co_owners) {
    $this->assertIsArray($co_owners, 'Google_OrkutAuthorResource', __METHOD__);
    $this->co_owners = $co_owners;
  }
  public function getCo_owners() {
    return $this->co_owners;
  }
  public function setPhoto_url($photo_url) {
    $this->photo_url = $photo_url;
  }
  public function getPhoto_url() {
    return $this->photo_url;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class Google_CommunityList extends Google_Model {
  protected $__itemsType = 'Google_Community';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Community', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_CommunityMembers extends Google_Model {
  protected $__communityMembershipStatusType = 'Google_CommunityMembershipStatus';
  protected $__communityMembershipStatusDataType = '';
  public $communityMembershipStatus;
  protected $__personType = 'Google_OrkutActivitypersonResource';
  protected $__personDataType = '';
  public $person;
  public $kind;
  public function setCommunityMembershipStatus(Google_CommunityMembershipStatus $communityMembershipStatus) {
    $this->communityMembershipStatus = $communityMembershipStatus;
  }
  public function getCommunityMembershipStatus() {
    return $this->communityMembershipStatus;
  }
  public function setPerson(Google_OrkutActivitypersonResource $person) {
    $this->person = $person;
  }
  public function getPerson() {
    return $this->person;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_CommunityMembersList extends Google_Model {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'Google_CommunityMembers';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_CommunityMembers', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class Google_CommunityMembershipStatus extends Google_Model {
  public $status;
  public $isFollowing;
  public $isRestoreAvailable;
  public $isModerator;
  public $kind;
  public $isCoOwner;
  public $canCreatePoll;
  public $canShout;
  public $isOwner;
  public $canCreateTopic;
  public $isTakebackAvailable;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setIsFollowing($isFollowing) {
    $this->isFollowing = $isFollowing;
  }
  public function getIsFollowing() {
    return $this->isFollowing;
  }
  public function setIsRestoreAvailable($isRestoreAvailable) {
    $this->isRestoreAvailable = $isRestoreAvailable;
  }
  public function getIsRestoreAvailable() {
    return $this->isRestoreAvailable;
  }
  public function setIsModerator($isModerator) {
    $this->isModerator = $isModerator;
  }
  public function getIsModerator() {
    return $this->isModerator;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setIsCoOwner($isCoOwner) {
    $this->isCoOwner = $isCoOwner;
  }
  public function getIsCoOwner() {
    return $this->isCoOwner;
  }
  public function setCanCreatePoll($canCreatePoll) {
    $this->canCreatePoll = $canCreatePoll;
  }
  public function getCanCreatePoll() {
    return $this->canCreatePoll;
  }
  public function setCanShout($canShout) {
    $this->canShout = $canShout;
  }
  public function getCanShout() {
    return $this->canShout;
  }
  public function setIsOwner($isOwner) {
    $this->isOwner = $isOwner;
  }
  public function getIsOwner() {
    return $this->isOwner;
  }
  public function setCanCreateTopic($canCreateTopic) {
    $this->canCreateTopic = $canCreateTopic;
  }
  public function getCanCreateTopic() {
    return $this->canCreateTopic;
  }
  public function setIsTakebackAvailable($isTakebackAvailable) {
    $this->isTakebackAvailable = $isTakebackAvailable;
  }
  public function getIsTakebackAvailable() {
    return $this->isTakebackAvailable;
  }
}

class Google_CommunityMessage extends Google_Model {
  public $body;
  public $kind;
  protected $__linksType = 'Google_OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  protected $__authorType = 'Google_OrkutAuthorResource';
  protected $__authorDataType = '';
  public $author;
  public $id;
  public $addedDate;
  public $isSpam;
  public $subject;
  public function setBody($body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setAuthor(Google_OrkutAuthorResource $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setAddedDate($addedDate) {
    $this->addedDate = $addedDate;
  }
  public function getAddedDate() {
    return $this->addedDate;
  }
  public function setIsSpam($isSpam) {
    $this->isSpam = $isSpam;
  }
  public function getIsSpam() {
    return $this->isSpam;
  }
  public function setSubject($subject) {
    $this->subject = $subject;
  }
  public function getSubject() {
    return $this->subject;
  }
}

class Google_CommunityMessageList extends Google_Model {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'Google_CommunityMessage';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_CommunityMessage', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class Google_CommunityPoll extends Google_Model {
  protected $__linksType = 'Google_OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public $isMultipleAnswers;
  protected $__imageType = 'Google_CommunityPollImage';
  protected $__imageDataType = '';
  public $image;
  public $endingTime;
  public $isVotingAllowedForNonMembers;
  public $isSpam;
  public $totalNumberOfVotes;
  protected $__authorType = 'Google_OrkutAuthorResource';
  protected $__authorDataType = '';
  public $author;
  public $question;
  public $id;
  public $isRestricted;
  public $communityId;
  public $isUsersVotePublic;
  public $lastUpdate;
  public $description;
  public $votedOptions;
  public $isOpenForVoting;
  public $isClosed;
  public $hasVoted;
  public $kind;
  public $creationTime;
  protected $__optionsType = 'Google_OrkutCommunitypolloptionResource';
  protected $__optionsDataType = 'array';
  public $options;
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setIsMultipleAnswers($isMultipleAnswers) {
    $this->isMultipleAnswers = $isMultipleAnswers;
  }
  public function getIsMultipleAnswers() {
    return $this->isMultipleAnswers;
  }
  public function setImage(Google_CommunityPollImage $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setEndingTime($endingTime) {
    $this->endingTime = $endingTime;
  }
  public function getEndingTime() {
    return $this->endingTime;
  }
  public function setIsVotingAllowedForNonMembers($isVotingAllowedForNonMembers) {
    $this->isVotingAllowedForNonMembers = $isVotingAllowedForNonMembers;
  }
  public function getIsVotingAllowedForNonMembers() {
    return $this->isVotingAllowedForNonMembers;
  }
  public function setIsSpam($isSpam) {
    $this->isSpam = $isSpam;
  }
  public function getIsSpam() {
    return $this->isSpam;
  }
  public function setTotalNumberOfVotes($totalNumberOfVotes) {
    $this->totalNumberOfVotes = $totalNumberOfVotes;
  }
  public function getTotalNumberOfVotes() {
    return $this->totalNumberOfVotes;
  }
  public function setAuthor(Google_OrkutAuthorResource $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setQuestion($question) {
    $this->question = $question;
  }
  public function getQuestion() {
    return $this->question;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIsRestricted($isRestricted) {
    $this->isRestricted = $isRestricted;
  }
  public function getIsRestricted() {
    return $this->isRestricted;
  }
  public function setCommunityId($communityId) {
    $this->communityId = $communityId;
  }
  public function getCommunityId() {
    return $this->communityId;
  }
  public function setIsUsersVotePublic($isUsersVotePublic) {
    $this->isUsersVotePublic = $isUsersVotePublic;
  }
  public function getIsUsersVotePublic() {
    return $this->isUsersVotePublic;
  }
  public function setLastUpdate($lastUpdate) {
    $this->lastUpdate = $lastUpdate;
  }
  public function getLastUpdate() {
    return $this->lastUpdate;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setVotedOptions(  $votedOptions) {
    $this->assertIsArray($votedOptions, 'Google_int', __METHOD__);
    $this->votedOptions = $votedOptions;
  }
  public function getVotedOptions() {
    return $this->votedOptions;
  }
  public function setIsOpenForVoting($isOpenForVoting) {
    $this->isOpenForVoting = $isOpenForVoting;
  }
  public function getIsOpenForVoting() {
    return $this->isOpenForVoting;
  }
  public function setIsClosed($isClosed) {
    $this->isClosed = $isClosed;
  }
  public function getIsClosed() {
    return $this->isClosed;
  }
  public function setHasVoted($hasVoted) {
    $this->hasVoted = $hasVoted;
  }
  public function getHasVoted() {
    return $this->hasVoted;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setCreationTime($creationTime) {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime() {
    return $this->creationTime;
  }
  public function setOptions(  $options) {
    $this->assertIsArray($options, 'Google_OrkutCommunitypolloptionResource', __METHOD__);
    $this->options = $options;
  }
  public function getOptions() {
    return $this->options;
  }
}

class Google_CommunityPollComment extends Google_Model {
  public $body;
  public $kind;
  public $addedDate;
  public $id;
  protected $__authorType = 'Google_OrkutAuthorResource';
  protected $__authorDataType = '';
  public $author;
  public function setBody($body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setAddedDate($addedDate) {
    $this->addedDate = $addedDate;
  }
  public function getAddedDate() {
    return $this->addedDate;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setAuthor(Google_OrkutAuthorResource $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
}

class Google_CommunityPollCommentList extends Google_Model {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'Google_CommunityPollComment';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_CommunityPollComment', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class Google_CommunityPollImage extends Google_Model {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class Google_CommunityPollList extends Google_Model {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'Google_CommunityPoll';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_CommunityPoll', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class Google_CommunityPollVote extends Google_Model {
  public $kind;
  public $optionIds;
  public $isVotevisible;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOptionIds(  $optionIds) {
    $this->assertIsArray($optionIds, 'Google_int', __METHOD__);
    $this->optionIds = $optionIds;
  }
  public function getOptionIds() {
    return $this->optionIds;
  }
  public function setIsVotevisible($isVotevisible) {
    $this->isVotevisible = $isVotevisible;
  }
  public function getIsVotevisible() {
    return $this->isVotevisible;
  }
}

class Google_CommunityTopic extends Google_Model {
  public $body;
  public $lastUpdate;
  public $kind;
  protected $__linksType = 'Google_OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  protected $__authorType = 'Google_OrkutAuthorResource';
  protected $__authorDataType = '';
  public $author;
  public $title;
  protected $__messagesType = 'Google_CommunityMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  public $latestMessageSnippet;
  public $isClosed;
  public $numberOfReplies;
  public $id;
  public function setBody($body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setLastUpdate($lastUpdate) {
    $this->lastUpdate = $lastUpdate;
  }
  public function getLastUpdate() {
    return $this->lastUpdate;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setAuthor(Google_OrkutAuthorResource $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setMessages(  $messages) {
    $this->assertIsArray($messages, 'Google_CommunityMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setLatestMessageSnippet($latestMessageSnippet) {
    $this->latestMessageSnippet = $latestMessageSnippet;
  }
  public function getLatestMessageSnippet() {
    return $this->latestMessageSnippet;
  }
  public function setIsClosed($isClosed) {
    $this->isClosed = $isClosed;
  }
  public function getIsClosed() {
    return $this->isClosed;
  }
  public function setNumberOfReplies($numberOfReplies) {
    $this->numberOfReplies = $numberOfReplies;
  }
  public function getNumberOfReplies() {
    return $this->numberOfReplies;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_CommunityTopicList extends Google_Model {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'Google_CommunityTopic';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_CommunityTopic', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class Google_Counters extends Google_Model {
  protected $__itemsType = 'Google_OrkutCounterResource';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_OrkutCounterResource', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_OrkutActivityobjectsResource extends Google_Model {
  public $displayName;
  protected $__linksType = 'Google_OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  protected $__communityType = 'Google_Community';
  protected $__communityDataType = '';
  public $community;
  public $content;
  protected $__personType = 'Google_OrkutActivitypersonResource';
  protected $__personDataType = '';
  public $person;
  public $id;
  public $objectType;
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setCommunity(Google_Community $community) {
    $this->community = $community;
  }
  public function getCommunity() {
    return $this->community;
  }
  public function setContent($content) {
    $this->content = $content;
  }
  public function getContent() {
    return $this->content;
  }
  public function setPerson(Google_OrkutActivitypersonResource $person) {
    $this->person = $person;
  }
  public function getPerson() {
    return $this->person;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setObjectType($objectType) {
    $this->objectType = $objectType;
  }
  public function getObjectType() {
    return $this->objectType;
  }
}

class Google_OrkutActivitypersonResource extends Google_Model {
  protected $__nameType = 'Google_OrkutActivitypersonResourceName';
  protected $__nameDataType = '';
  public $name;
  public $url;
  public $gender;
  protected $__imageType = 'Google_OrkutActivitypersonResourceImage';
  protected $__imageDataType = '';
  public $image;
  public $birthday;
  public $id;
  public function setName(Google_OrkutActivitypersonResourceName $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
  public function setGender($gender) {
    $this->gender = $gender;
  }
  public function getGender() {
    return $this->gender;
  }
  public function setImage(Google_OrkutActivitypersonResourceImage $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setBirthday($birthday) {
    $this->birthday = $birthday;
  }
  public function getBirthday() {
    return $this->birthday;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_OrkutActivitypersonResourceImage extends Google_Model {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class Google_OrkutActivitypersonResourceName extends Google_Model {
  public $givenName;
  public $familyName;
  public function setGivenName($givenName) {
    $this->givenName = $givenName;
  }
  public function getGivenName() {
    return $this->givenName;
  }
  public function setFamilyName($familyName) {
    $this->familyName = $familyName;
  }
  public function getFamilyName() {
    return $this->familyName;
  }
}

class Google_OrkutAuthorResource extends Google_Model {
  public $url;
  protected $__imageType = 'Google_OrkutAuthorResourceImage';
  protected $__imageDataType = '';
  public $image;
  public $displayName;
  public $id;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
  public function setImage(Google_OrkutAuthorResourceImage $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_OrkutAuthorResourceImage extends Google_Model {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class Google_OrkutCommunitypolloptionResource extends Google_Model {
  protected $__imageType = 'Google_OrkutCommunitypolloptionResourceImage';
  protected $__imageDataType = '';
  public $image;
  public $optionId;
  public $description;
  public $numberOfVotes;
  public function setImage(Google_OrkutCommunitypolloptionResourceImage $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setOptionId($optionId) {
    $this->optionId = $optionId;
  }
  public function getOptionId() {
    return $this->optionId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setNumberOfVotes($numberOfVotes) {
    $this->numberOfVotes = $numberOfVotes;
  }
  public function getNumberOfVotes() {
    return $this->numberOfVotes;
  }
}

class Google_OrkutCommunitypolloptionResourceImage extends Google_Model {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class Google_OrkutCounterResource extends Google_Model {
  public $total;
  protected $__linkType = 'Google_OrkutLinkResource';
  protected $__linkDataType = '';
  public $link;
  public $name;
  public function setTotal($total) {
    $this->total = $total;
  }
  public function getTotal() {
    return $this->total;
  }
  public function setLink(Google_OrkutLinkResource $link) {
    $this->link = $link;
  }
  public function getLink() {
    return $this->link;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class Google_OrkutLinkResource extends Google_Model {
  public $href;
  public $type;
  public $rel;
  public $title;
  public function setHref($href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setRel($rel) {
    $this->rel = $rel;
  }
  public function getRel() {
    return $this->rel;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Google_Visibility extends Google_Model {
  public $kind;
  public $visibility;
  protected $__linksType = 'Google_OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setVisibility($visibility) {
    $this->visibility = $visibility;
  }
  public function getVisibility() {
    return $this->visibility;
  }
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
}
