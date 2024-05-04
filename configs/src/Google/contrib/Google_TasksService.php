<?php
 


   
  class Google_TasksServiceResource extends Google_ServiceResource {


     
    public function insert($tasklist, Google_Task $postBody, $optParams = array()) {
      $params = array('tasklist' => $tasklist, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function get($tasklist, $task, $optParams = array()) {
      $params = array('tasklist' => $tasklist, 'task' => $task);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function clear($tasklist, $optParams = array()) {
      $params = array('tasklist' => $tasklist);
      $params = array_merge($params, $optParams);
      $data = $this->__call('clear', array($params));
      return $data;
    }
     
    public function move($tasklist, $task, $optParams = array()) {
      $params = array('tasklist' => $tasklist, 'task' => $task);
      $params = array_merge($params, $optParams);
      $data = $this->__call('move', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function listTasks($tasklist, $optParams = array()) {
      $params = array('tasklist' => $tasklist);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Tasks($data);
      } else {
        return $data;
      }
    }
     
    public function update($tasklist, $task, Google_Task $postBody, $optParams = array()) {
      $params = array('tasklist' => $tasklist, 'task' => $task, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function patch($tasklist, $task, Google_Task $postBody, $optParams = array()) {
      $params = array('tasklist' => $tasklist, 'task' => $task, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function delete($tasklist, $task, $optParams = array()) {
      $params = array('tasklist' => $tasklist, 'task' => $task);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_TasklistsServiceResource extends Google_ServiceResource {


     
    public function insert(Google_TaskList $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_TaskList($data);
      } else {
        return $data;
      }
    }
     
    public function get($tasklist, $optParams = array()) {
      $params = array('tasklist' => $tasklist);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_TaskList($data);
      } else {
        return $data;
      }
    }
     
    public function listTasklists($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_TaskLists($data);
      } else {
        return $data;
      }
    }
     
    public function update($tasklist, Google_TaskList $postBody, $optParams = array()) {
      $params = array('tasklist' => $tasklist, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_TaskList($data);
      } else {
        return $data;
      }
    }
     
    public function patch($tasklist, Google_TaskList $postBody, $optParams = array()) {
      $params = array('tasklist' => $tasklist, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_TaskList($data);
      } else {
        return $data;
      }
    }
     
    public function delete($tasklist, $optParams = array()) {
      $params = array('tasklist' => $tasklist);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

 
class Google_TasksService extends Google_Service {
  public $tasks;
  public $tasklists;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'tasks/v1/';
    $this->version = 'v1';
    $this->serviceName = 'tasks';

    $client->addService($this->serviceName, $this->version);
    $this->tasks = new Google_TasksServiceResource($this, $this->serviceName, 'tasks', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "parent": {"type": "string", "location": "query"}, "previous": {"type": "string", "location": "query"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "httpMethod": "POST", "path": "lists/{tasklist}/tasks", "id": "tasks.tasks.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "id": "tasks.tasks.get", "httpMethod": "GET", "path": "lists/{tasklist}/tasks/{task}", "response": {"$ref": "Task"}}, "clear": {"scopes": ["https://www.googleapis.com/auth/tasks"], "path": "lists/{tasklist}/clear", "id": "tasks.tasks.clear", "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "POST"}, "move": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"task": {"required": true, "type": "string", "location": "path"}, "tasklist": {"required": true, "type": "string", "location": "path"}, "parent": {"type": "string", "location": "query"}, "previous": {"type": "string", "location": "query"}}, "id": "tasks.tasks.move", "httpMethod": "POST", "path": "lists/{tasklist}/tasks/{task}/move", "response": {"$ref": "Task"}}, "list": {"scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"], "parameters": {"dueMax": {"type": "string", "location": "query"}, "tasklist": {"required": true, "type": "string", "location": "path"}, "showDeleted": {"type": "boolean", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}, "completedMin": {"type": "string", "location": "query"}, "maxResults": {"type": "string", "location": "query", "format": "int64"}, "showCompleted": {"type": "boolean", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "completedMax": {"type": "string", "location": "query"}, "showHidden": {"type": "boolean", "location": "query"}, "dueMin": {"type": "string", "location": "query"}}, "id": "tasks.tasks.list", "httpMethod": "GET", "path": "lists/{tasklist}/tasks", "response": {"$ref": "Tasks"}}, "update": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "httpMethod": "PUT", "path": "lists/{tasklist}/tasks/{task}", "id": "tasks.tasks.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "httpMethod": "PATCH", "path": "lists/{tasklist}/tasks/{task}", "id": "tasks.tasks.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/tasks"], "path": "lists/{tasklist}/tasks/{task}", "id": "tasks.tasks.delete", "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->tasklists = new Google_TasklistsServiceResource($this, $this->serviceName, 'tasklists', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/tasks"], "request": {"$ref": "TaskList"}, "response": {"$ref": "TaskList"}, "httpMethod": "POST", "path": "users/@me/lists", "id": "tasks.tasklists.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "id": "tasks.tasklists.get", "httpMethod": "GET", "path": "users/@me/lists/{tasklist}", "response": {"$ref": "TaskList"}}, "list": {"scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "maxResults": {"type": "string", "location": "query", "format": "int64"}}, "response": {"$ref": "TaskLists"}, "httpMethod": "GET", "path": "users/@me/lists", "id": "tasks.tasklists.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "TaskList"}, "response": {"$ref": "TaskList"}, "httpMethod": "PUT", "path": "users/@me/lists/{tasklist}", "id": "tasks.tasklists.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "TaskList"}, "response": {"$ref": "TaskList"}, "httpMethod": "PATCH", "path": "users/@me/lists/{tasklist}", "id": "tasks.tasklists.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/tasks"], "path": "users/@me/lists/{tasklist}", "id": "tasks.tasklists.delete", "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));

  }
}

class Google_Task extends Google_Model {
  public $status;
  public $kind;
  public $updated;
  public $parent;
  protected $__linksType = 'Google_TaskLinks';
  protected $__linksDataType = 'array';
  public $links;
  public $title;
  public $deleted;
  public $completed;
  public $due;
  public $etag;
  public $notes;
  public $position;
  public $hidden;
  public $id;
  public $selfLink;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setParent($parent) {
    $this->parent = $parent;
  }
  public function getParent() {
    return $this->parent;
  }
  public function setLinks(  $links) {
    $this->assertIsArray($links, 'Google_TaskLinks', __METHOD__);
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
  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }
  public function getDeleted() {
    return $this->deleted;
  }
  public function setCompleted($completed) {
    $this->completed = $completed;
  }
  public function getCompleted() {
    return $this->completed;
  }
  public function setDue($due) {
    $this->due = $due;
  }
  public function getDue() {
    return $this->due;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setNotes($notes) {
    $this->notes = $notes;
  }
  public function getNotes() {
    return $this->notes;
  }
  public function setPosition($position) {
    $this->position = $position;
  }
  public function getPosition() {
    return $this->position;
  }
  public function setHidden($hidden) {
    $this->hidden = $hidden;
  }
  public function getHidden() {
    return $this->hidden;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Google_TaskLinks extends Google_Model {
  public $type;
  public $link;
  public $description;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setLink($link) {
    $this->link = $link;
  }
  public function getLink() {
    return $this->link;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
}

class Google_TaskList extends Google_Model {
  public $kind;
  public $title;
  public $updated;
  public $etag;
  public $id;
  public $selfLink;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Google_TaskLists extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_TaskList';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_TaskList', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
}

class Google_Tasks extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_Task';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Task', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
}
