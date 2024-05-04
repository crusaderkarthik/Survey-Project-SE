<?php
 


   
  class Google_TaskqueuesServiceResource extends Google_ServiceResource {


     
    public function get($project, $taskqueue, $optParams = array()) {
      $params = array('project' => $project, 'taskqueue' => $taskqueue);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_TaskQueue($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_TasksServiceResource extends Google_ServiceResource {


     
    public function insert($project, $taskqueue, Google_Task $postBody, $optParams = array()) {
      $params = array('project' => $project, 'taskqueue' => $taskqueue, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function get($project, $taskqueue, $task, $optParams = array()) {
      $params = array('project' => $project, 'taskqueue' => $taskqueue, 'task' => $task);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function listTasks($project, $taskqueue, $optParams = array()) {
      $params = array('project' => $project, 'taskqueue' => $taskqueue);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Tasks2($data);
      } else {
        return $data;
      }
    }
     
    public function update($project, $taskqueue, $task, $newLeaseSeconds, Google_Task $postBody, $optParams = array()) {
      $params = array('project' => $project, 'taskqueue' => $taskqueue, 'task' => $task, 'newLeaseSeconds' => $newLeaseSeconds, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function patch($project, $taskqueue, $task, $newLeaseSeconds, Google_Task $postBody, $optParams = array()) {
      $params = array('project' => $project, 'taskqueue' => $taskqueue, 'task' => $task, 'newLeaseSeconds' => $newLeaseSeconds, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Task($data);
      } else {
        return $data;
      }
    }
     
    public function delete($project, $taskqueue, $task, $optParams = array()) {
      $params = array('project' => $project, 'taskqueue' => $taskqueue, 'task' => $task);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
     
    public function lease($project, $taskqueue, $numTasks, $leaseSecs, $optParams = array()) {
      $params = array('project' => $project, 'taskqueue' => $taskqueue, 'numTasks' => $numTasks, 'leaseSecs' => $leaseSecs);
      $params = array_merge($params, $optParams);
      $data = $this->__call('lease', array($params));
      if ($this->useObjects()) {
        return new Google_Tasks($data);
      } else {
        return $data;
      }
    }
  }

 
class Google_TaskqueueService extends Google_Service {
  public $taskqueues;
  public $tasks;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'taskqueue/v1beta2/projects/';
    $this->version = 'v1beta2';
    $this->serviceName = 'taskqueue';

    $client->addService($this->serviceName, $this->version);
    $this->taskqueues = new Google_TaskqueuesServiceResource($this, $this->serviceName, 'taskqueues', json_decode('{"methods": {"get": {"scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "taskqueue": {"required": true, "type": "string", "location": "path"}, "getStats": {"type": "boolean", "location": "query"}}, "id": "taskqueue.taskqueues.get", "httpMethod": "GET", "path": "{project}/taskqueues/{taskqueue}", "response": {"$ref": "TaskQueue"}}}}', true));
    $this->tasks = new Google_TasksServiceResource($this, $this->serviceName, 'tasks', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "taskqueue": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "httpMethod": "POST", "path": "{project}/taskqueues/{taskqueue}/tasks", "id": "taskqueue.tasks.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "taskqueue": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "id": "taskqueue.tasks.get", "httpMethod": "GET", "path": "{project}/taskqueues/{taskqueue}/tasks/{task}", "response": {"$ref": "Task"}}, "list": {"scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "taskqueue": {"required": true, "type": "string", "location": "path"}}, "id": "taskqueue.tasks.list", "httpMethod": "GET", "path": "{project}/taskqueues/{taskqueue}/tasks", "response": {"$ref": "Tasks2"}}, "update": {"scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "taskqueue": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}, "newLeaseSeconds": {"required": true, "type": "integer", "location": "query", "format": "int32"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "httpMethod": "POST", "path": "{project}/taskqueues/{taskqueue}/tasks/{task}", "id": "taskqueue.tasks.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "taskqueue": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}, "newLeaseSeconds": {"required": true, "type": "integer", "location": "query", "format": "int32"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "httpMethod": "PATCH", "path": "{project}/taskqueues/{taskqueue}/tasks/{task}", "id": "taskqueue.tasks.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"], "path": "{project}/taskqueues/{taskqueue}/tasks/{task}", "id": "taskqueue.tasks.delete", "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "taskqueue": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}, "lease": {"scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"], "parameters": {"groupByTag": {"type": "boolean", "location": "query"}, "leaseSecs": {"required": true, "type": "integer", "location": "query", "format": "int32"}, "project": {"required": true, "type": "string", "location": "path"}, "taskqueue": {"required": true, "type": "string", "location": "path"}, "tag": {"type": "string", "location": "query"}, "numTasks": {"required": true, "type": "integer", "location": "query", "format": "int32"}}, "id": "taskqueue.tasks.lease", "httpMethod": "POST", "path": "{project}/taskqueues/{taskqueue}/tasks/lease", "response": {"$ref": "Tasks"}}}}', true));

  }
}

class Google_Task extends Google_Model {
  public $kind;
  public $leaseTimestamp;
  public $id;
  public $tag;
  public $payloadBase64;
  public $queueName;
  public $enqueueTimestamp;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLeaseTimestamp($leaseTimestamp) {
    $this->leaseTimestamp = $leaseTimestamp;
  }
  public function getLeaseTimestamp() {
    return $this->leaseTimestamp;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setTag($tag) {
    $this->tag = $tag;
  }
  public function getTag() {
    return $this->tag;
  }
  public function setPayloadBase64($payloadBase64) {
    $this->payloadBase64 = $payloadBase64;
  }
  public function getPayloadBase64() {
    return $this->payloadBase64;
  }
  public function setQueueName($queueName) {
    $this->queueName = $queueName;
  }
  public function getQueueName() {
    return $this->queueName;
  }
  public function setEnqueueTimestamp($enqueueTimestamp) {
    $this->enqueueTimestamp = $enqueueTimestamp;
  }
  public function getEnqueueTimestamp() {
    return $this->enqueueTimestamp;
  }
}

class Google_TaskQueue extends Google_Model {
  public $kind;
  protected $__statsType = 'Google_TaskQueueStats';
  protected $__statsDataType = '';
  public $stats;
  public $id;
  public $maxLeases;
  protected $__aclType = 'Google_TaskQueueAcl';
  protected $__aclDataType = '';
  public $acl;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setStats(Google_TaskQueueStats $stats) {
    $this->stats = $stats;
  }
  public function getStats() {
    return $this->stats;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setMaxLeases($maxLeases) {
    $this->maxLeases = $maxLeases;
  }
  public function getMaxLeases() {
    return $this->maxLeases;
  }
  public function setAcl(Google_TaskQueueAcl $acl) {
    $this->acl = $acl;
  }
  public function getAcl() {
    return $this->acl;
  }
}

class Google_TaskQueueAcl extends Google_Model {
  public $consumerEmails;
  public $producerEmails;
  public $adminEmails;
  public function setConsumerEmails(  $consumerEmails) {
    $this->assertIsArray($consumerEmails, 'Google_string', __METHOD__);
    $this->consumerEmails = $consumerEmails;
  }
  public function getConsumerEmails() {
    return $this->consumerEmails;
  }
  public function setProducerEmails(  $producerEmails) {
    $this->assertIsArray($producerEmails, 'Google_string', __METHOD__);
    $this->producerEmails = $producerEmails;
  }
  public function getProducerEmails() {
    return $this->producerEmails;
  }
  public function setAdminEmails(  $adminEmails) {
    $this->assertIsArray($adminEmails, 'Google_string', __METHOD__);
    $this->adminEmails = $adminEmails;
  }
  public function getAdminEmails() {
    return $this->adminEmails;
  }
}

class Google_TaskQueueStats extends Google_Model {
  public $oldestTask;
  public $leasedLastMinute;
  public $totalTasks;
  public $leasedLastHour;
  public function setOldestTask($oldestTask) {
    $this->oldestTask = $oldestTask;
  }
  public function getOldestTask() {
    return $this->oldestTask;
  }
  public function setLeasedLastMinute($leasedLastMinute) {
    $this->leasedLastMinute = $leasedLastMinute;
  }
  public function getLeasedLastMinute() {
    return $this->leasedLastMinute;
  }
  public function setTotalTasks($totalTasks) {
    $this->totalTasks = $totalTasks;
  }
  public function getTotalTasks() {
    return $this->totalTasks;
  }
  public function setLeasedLastHour($leasedLastHour) {
    $this->leasedLastHour = $leasedLastHour;
  }
  public function getLeasedLastHour() {
    return $this->leasedLastHour;
  }
}

class Google_Tasks extends Google_Model {
  protected $__itemsType = 'Google_Task';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
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
}

class Google_Tasks2 extends Google_Model {
  protected $__itemsType = 'Google_Task';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
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
}
