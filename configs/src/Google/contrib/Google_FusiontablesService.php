<?php
 


   
  class Google_ColumnServiceResource extends Google_ServiceResource {


     
    public function insert($tableId, Google_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Column($data);
      } else {
        return $data;
      }
    }
     
    public function get($tableId, $columnId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Column($data);
      } else {
        return $data;
      }
    }
     
    public function listColumn($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_ColumnList($data);
      } else {
        return $data;
      }
    }
     
    public function update($tableId, $columnId, Google_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Column($data);
      } else {
        return $data;
      }
    }
     
    public function patch($tableId, $columnId, Google_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Column($data);
      } else {
        return $data;
      }
    }
     
    public function delete($tableId, $columnId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_QueryServiceResource extends Google_ServiceResource {


     
    public function sqlGet($sql, $optParams = array()) {
      $params = array('sql' => $sql);
      $params = array_merge($params, $optParams);
      $data = $this->__call('sqlGet', array($params));
      if ($this->useObjects()) {
        return new Google_Sqlresponse($data);
      } else {
        return $data;
      }
    }
     
    public function sql($sql, $optParams = array()) {
      $params = array('sql' => $sql);
      $params = array_merge($params, $optParams);
      $data = $this->__call('sql', array($params));
      if ($this->useObjects()) {
        return new Google_Sqlresponse($data);
      } else {
        return $data;
      }
    }
  }

   
  class Google_StyleServiceResource extends Google_ServiceResource {


     
    public function insert($tableId, Google_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_StyleSetting($data);
      } else {
        return $data;
      }
    }
     
    public function get($tableId, $styleId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_StyleSetting($data);
      } else {
        return $data;
      }
    }
     
    public function listStyle($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_StyleSettingList($data);
      } else {
        return $data;
      }
    }
     
    public function update($tableId, $styleId, Google_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_StyleSetting($data);
      } else {
        return $data;
      }
    }
     
    public function patch($tableId, $styleId, Google_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_StyleSetting($data);
      } else {
        return $data;
      }
    }
     
    public function delete($tableId, $styleId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_TemplateServiceResource extends Google_ServiceResource {


     
    public function insert($tableId, Google_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Template($data);
      } else {
        return $data;
      }
    }
     
    public function get($tableId, $templateId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Template($data);
      } else {
        return $data;
      }
    }
     
    public function listTemplate($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_TemplateList($data);
      } else {
        return $data;
      }
    }
     
    public function update($tableId, $templateId, Google_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Template($data);
      } else {
        return $data;
      }
    }
     
    public function patch($tableId, $templateId, Google_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Template($data);
      } else {
        return $data;
      }
    }
     
    public function delete($tableId, $templateId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

   
  class Google_TableServiceResource extends Google_ServiceResource {


     
    public function insert(Google_Table $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Table($data);
      } else {
        return $data;
      }
    }
     
    public function get($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Table($data);
      } else {
        return $data;
      }
    }
     
    public function listTable($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_TableList($data);
      } else {
        return $data;
      }
    }
     
    public function update($tableId, Google_Table $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Table($data);
      } else {
        return $data;
      }
    }
     
    public function patch($tableId, Google_Table $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Table($data);
      } else {
        return $data;
      }
    }
     
    public function delete($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

 
class Google_FusiontablesService extends Google_Service {
  public $column;
  public $query;
  public $style;
  public $template;
  public $table;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'fusiontables/v1/';
    $this->version = 'v1';
    $this->serviceName = 'fusiontables';

    $client->addService($this->serviceName, $this->version);
    $this->column = new Google_ColumnServiceResource($this, $this->serviceName, 'column', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "httpMethod": "POST", "path": "tables/{tableId}/columns", "id": "fusiontables.column.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "id": "fusiontables.column.get", "httpMethod": "GET", "path": "tables/{tableId}/columns/{columnId}", "response": {"$ref": "Column"}}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "id": "fusiontables.column.list", "httpMethod": "GET", "path": "tables/{tableId}/columns", "response": {"$ref": "ColumnList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "httpMethod": "PUT", "path": "tables/{tableId}/columns/{columnId}", "id": "fusiontables.column.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "httpMethod": "PATCH", "path": "tables/{tableId}/columns/{columnId}", "id": "fusiontables.column.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/columns/{columnId}", "id": "fusiontables.column.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->query = new Google_QueryServiceResource($this, $this->serviceName, 'query', json_decode('{"methods": {"sqlGet": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"typed": {"type": "boolean", "location": "query"}, "hdrs": {"type": "boolean", "location": "query"}, "sql": {"required": true, "type": "string", "location": "query"}}, "id": "fusiontables.query.sqlGet", "httpMethod": "GET", "path": "query", "response": {"$ref": "Sqlresponse"}}, "sql": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"typed": {"type": "boolean", "location": "query"}, "hdrs": {"type": "boolean", "location": "query"}, "sql": {"required": true, "type": "string", "location": "query"}}, "id": "fusiontables.query.sql", "httpMethod": "POST", "path": "query", "response": {"$ref": "Sqlresponse"}}}}', true));
    $this->style = new Google_StyleServiceResource($this, $this->serviceName, 'style', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "httpMethod": "POST", "path": "tables/{tableId}/styles", "id": "fusiontables.style.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "id": "fusiontables.style.get", "httpMethod": "GET", "path": "tables/{tableId}/styles/{styleId}", "response": {"$ref": "StyleSetting"}}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "id": "fusiontables.style.list", "httpMethod": "GET", "path": "tables/{tableId}/styles", "response": {"$ref": "StyleSettingList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "httpMethod": "PUT", "path": "tables/{tableId}/styles/{styleId}", "id": "fusiontables.style.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "httpMethod": "PATCH", "path": "tables/{tableId}/styles/{styleId}", "id": "fusiontables.style.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/styles/{styleId}", "id": "fusiontables.style.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "httpMethod": "DELETE"}}}', true));
    $this->template = new Google_TemplateServiceResource($this, $this->serviceName, 'template', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "httpMethod": "POST", "path": "tables/{tableId}/templates", "id": "fusiontables.template.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "id": "fusiontables.template.get", "httpMethod": "GET", "path": "tables/{tableId}/templates/{templateId}", "response": {"$ref": "Template"}}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "id": "fusiontables.template.list", "httpMethod": "GET", "path": "tables/{tableId}/templates", "response": {"$ref": "TemplateList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "httpMethod": "PUT", "path": "tables/{tableId}/templates/{templateId}", "id": "fusiontables.template.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "httpMethod": "PATCH", "path": "tables/{tableId}/templates/{templateId}", "id": "fusiontables.template.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/templates/{templateId}", "id": "fusiontables.template.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "httpMethod": "DELETE"}}}', true));
    $this->table = new Google_TableServiceResource($this, $this->serviceName, 'table', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "httpMethod": "POST", "path": "tables", "id": "fusiontables.table.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "id": "fusiontables.table.get", "httpMethod": "GET", "path": "tables/{tableId}", "response": {"$ref": "Table"}}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "TableList"}, "httpMethod": "GET", "path": "tables", "id": "fusiontables.table.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"replaceViewDefinition": {"type": "boolean", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "httpMethod": "PUT", "path": "tables/{tableId}", "id": "fusiontables.table.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"replaceViewDefinition": {"type": "boolean", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "httpMethod": "PATCH", "path": "tables/{tableId}", "id": "fusiontables.table.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}", "id": "fusiontables.table.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));

  }
}

class Google_Bucket extends Google_Model {
  public $opacity;
  public $weight;
  public $min;
  public $color;
  public $max;
  public $icon;
  public function setOpacity($opacity) {
    $this->opacity = $opacity;
  }
  public function getOpacity() {
    return $this->opacity;
  }
  public function setWeight($weight) {
    $this->weight = $weight;
  }
  public function getWeight() {
    return $this->weight;
  }
  public function setMin($min) {
    $this->min = $min;
  }
  public function getMin() {
    return $this->min;
  }
  public function setColor($color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setMax($max) {
    $this->max = $max;
  }
  public function getMax() {
    return $this->max;
  }
  public function setIcon($icon) {
    $this->icon = $icon;
  }
  public function getIcon() {
    return $this->icon;
  }
}

class Google_Column extends Google_Model {
  public $kind;
  public $type;
  public $columnId;
  public $name;
  protected $__baseColumnType = 'Google_ColumnBaseColumn';
  protected $__baseColumnDataType = '';
  public $baseColumn;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setColumnId($columnId) {
    $this->columnId = $columnId;
  }
  public function getColumnId() {
    return $this->columnId;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setBaseColumn(Google_ColumnBaseColumn $baseColumn) {
    $this->baseColumn = $baseColumn;
  }
  public function getBaseColumn() {
    return $this->baseColumn;
  }
}

class Google_ColumnBaseColumn extends Google_Model {
  public $tableIndex;
  public $columnId;
  public function setTableIndex($tableIndex) {
    $this->tableIndex = $tableIndex;
  }
  public function getTableIndex() {
    return $this->tableIndex;
  }
  public function setColumnId($columnId) {
    $this->columnId = $columnId;
  }
  public function getColumnId() {
    return $this->columnId;
  }
}

class Google_ColumnList extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_Column';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Column', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class Google_Geometry extends Google_Model {
  public $geometry;
  public $type;
  public $geometries;
  public function setGeometry($geometry) {
    $this->geometry = $geometry;
  }
  public function getGeometry() {
    return $this->geometry;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setGeometries(  $geometries) {
    $this->assertIsArray($geometries, 'Google_object', __METHOD__);
    $this->geometries = $geometries;
  }
  public function getGeometries() {
    return $this->geometries;
  }
}

class Google_Line extends Google_Model {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(  $coordinates) {
    $this->assertIsArray($coordinates, 'Google_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class Google_LineStyle extends Google_Model {
  public $strokeWeight;
  protected $__strokeWeightStylerType = 'Google_StyleFunction';
  protected $__strokeWeightStylerDataType = '';
  public $strokeWeightStyler;
  public $strokeColor;
  public $strokeOpacity;
  protected $__strokeColorStylerType = 'Google_StyleFunction';
  protected $__strokeColorStylerDataType = '';
  public $strokeColorStyler;
  public function setStrokeWeight($strokeWeight) {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight() {
    return $this->strokeWeight;
  }
  public function setStrokeWeightStyler(Google_StyleFunction $strokeWeightStyler) {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  public function getStrokeWeightStyler() {
    return $this->strokeWeightStyler;
  }
  public function setStrokeColor($strokeColor) {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor() {
    return $this->strokeColor;
  }
  public function setStrokeOpacity($strokeOpacity) {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity() {
    return $this->strokeOpacity;
  }
  public function setStrokeColorStyler(Google_StyleFunction $strokeColorStyler) {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  public function getStrokeColorStyler() {
    return $this->strokeColorStyler;
  }
}

class Google_Point extends Google_Model {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(  $coordinates) {
    $this->assertIsArray($coordinates, 'Google_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class Google_PointStyle extends Google_Model {
  protected $__iconStylerType = 'Google_StyleFunction';
  protected $__iconStylerDataType = '';
  public $iconStyler;
  public $iconName;
  public function setIconStyler(Google_StyleFunction $iconStyler) {
    $this->iconStyler = $iconStyler;
  }
  public function getIconStyler() {
    return $this->iconStyler;
  }
  public function setIconName($iconName) {
    $this->iconName = $iconName;
  }
  public function getIconName() {
    return $this->iconName;
  }
}

class Google_Polygon extends Google_Model {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(  $coordinates) {
    $this->assertIsArray($coordinates, 'Google_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class Google_PolygonStyle extends Google_Model {
  protected $__strokeColorStylerType = 'Google_StyleFunction';
  protected $__strokeColorStylerDataType = '';
  public $strokeColorStyler;
  public $strokeWeight;
  public $strokeOpacity;
  protected $__strokeWeightStylerType = 'Google_StyleFunction';
  protected $__strokeWeightStylerDataType = '';
  public $strokeWeightStyler;
  protected $__fillColorStylerType = 'Google_StyleFunction';
  protected $__fillColorStylerDataType = '';
  public $fillColorStyler;
  public $fillColor;
  public $strokeColor;
  public $fillOpacity;
  public function setStrokeColorStyler(Google_StyleFunction $strokeColorStyler) {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  public function getStrokeColorStyler() {
    return $this->strokeColorStyler;
  }
  public function setStrokeWeight($strokeWeight) {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight() {
    return $this->strokeWeight;
  }
  public function setStrokeOpacity($strokeOpacity) {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity() {
    return $this->strokeOpacity;
  }
  public function setStrokeWeightStyler(Google_StyleFunction $strokeWeightStyler) {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  public function getStrokeWeightStyler() {
    return $this->strokeWeightStyler;
  }
  public function setFillColorStyler(Google_StyleFunction $fillColorStyler) {
    $this->fillColorStyler = $fillColorStyler;
  }
  public function getFillColorStyler() {
    return $this->fillColorStyler;
  }
  public function setFillColor($fillColor) {
    $this->fillColor = $fillColor;
  }
  public function getFillColor() {
    return $this->fillColor;
  }
  public function setStrokeColor($strokeColor) {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor() {
    return $this->strokeColor;
  }
  public function setFillOpacity($fillOpacity) {
    $this->fillOpacity = $fillOpacity;
  }
  public function getFillOpacity() {
    return $this->fillOpacity;
  }
}

class Google_Sqlresponse extends Google_Model {
  public $kind;
  public $rows;
  public $columns;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRows(  $rows) {
    $this->assertIsArray($rows, 'Google_object', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setColumns(  $columns) {
    $this->assertIsArray($columns, 'Google_string', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
}

class Google_StyleFunction extends Google_Model {
  protected $__gradientType = 'Google_StyleFunctionGradient';
  protected $__gradientDataType = '';
  public $gradient;
  public $columnName;
  protected $__bucketsType = 'Google_Bucket';
  protected $__bucketsDataType = 'array';
  public $buckets;
  public $kind;
  public function setGradient(Google_StyleFunctionGradient $gradient) {
    $this->gradient = $gradient;
  }
  public function getGradient() {
    return $this->gradient;
  }
  public function setColumnName($columnName) {
    $this->columnName = $columnName;
  }
  public function getColumnName() {
    return $this->columnName;
  }
  public function setBuckets(  $buckets) {
    $this->assertIsArray($buckets, 'Google_Bucket', __METHOD__);
    $this->buckets = $buckets;
  }
  public function getBuckets() {
    return $this->buckets;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_StyleFunctionGradient extends Google_Model {
  public $max;
  protected $__colorsType = 'Google_StyleFunctionGradientColors';
  protected $__colorsDataType = 'array';
  public $colors;
  public $min;
  public function setMax($max) {
    $this->max = $max;
  }
  public function getMax() {
    return $this->max;
  }
  public function setColors(  $colors) {
    $this->assertIsArray($colors, 'Google_StyleFunctionGradientColors', __METHOD__);
    $this->colors = $colors;
  }
  public function getColors() {
    return $this->colors;
  }
  public function setMin($min) {
    $this->min = $min;
  }
  public function getMin() {
    return $this->min;
  }
}

class Google_StyleFunctionGradientColors extends Google_Model {
  public $color;
  public $opacity;
  public function setColor($color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setOpacity($opacity) {
    $this->opacity = $opacity;
  }
  public function getOpacity() {
    return $this->opacity;
  }
}

class Google_StyleSetting extends Google_Model {
  protected $__markerOptionsType = 'Google_PointStyle';
  protected $__markerOptionsDataType = '';
  public $markerOptions;
  public $kind;
  public $name;
  protected $__polygonOptionsType = 'Google_PolygonStyle';
  protected $__polygonOptionsDataType = '';
  public $polygonOptions;
  public $isDefaultForTable;
  protected $__polylineOptionsType = 'Google_LineStyle';
  protected $__polylineOptionsDataType = '';
  public $polylineOptions;
  public $tableId;
  public $styleId;
  public function setMarkerOptions(Google_PointStyle $markerOptions) {
    $this->markerOptions = $markerOptions;
  }
  public function getMarkerOptions() {
    return $this->markerOptions;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPolygonOptions(Google_PolygonStyle $polygonOptions) {
    $this->polygonOptions = $polygonOptions;
  }
  public function getPolygonOptions() {
    return $this->polygonOptions;
  }
  public function setIsDefaultForTable($isDefaultForTable) {
    $this->isDefaultForTable = $isDefaultForTable;
  }
  public function getIsDefaultForTable() {
    return $this->isDefaultForTable;
  }
  public function setPolylineOptions(Google_LineStyle $polylineOptions) {
    $this->polylineOptions = $polylineOptions;
  }
  public function getPolylineOptions() {
    return $this->polylineOptions;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setStyleId($styleId) {
    $this->styleId = $styleId;
  }
  public function getStyleId() {
    return $this->styleId;
  }
}

class Google_StyleSettingList extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_StyleSetting';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_StyleSetting', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class Google_Table extends Google_Model {
  public $kind;
  public $attribution;
  public $description;
  public $isExportable;
  public $baseTableIds;
  public $attributionLink;
  public $sql;
  public $tableId;
  protected $__columnsType = 'Google_Column';
  protected $__columnsDataType = 'array';
  public $columns;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setAttribution($attribution) {
    $this->attribution = $attribution;
  }
  public function getAttribution() {
    return $this->attribution;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setIsExportable($isExportable) {
    $this->isExportable = $isExportable;
  }
  public function getIsExportable() {
    return $this->isExportable;
  }
  public function setBaseTableIds(  $baseTableIds) {
    $this->assertIsArray($baseTableIds, 'Google_string', __METHOD__);
    $this->baseTableIds = $baseTableIds;
  }
  public function getBaseTableIds() {
    return $this->baseTableIds;
  }
  public function setAttributionLink($attributionLink) {
    $this->attributionLink = $attributionLink;
  }
  public function getAttributionLink() {
    return $this->attributionLink;
  }
  public function setSql($sql) {
    $this->sql = $sql;
  }
  public function getSql() {
    return $this->sql;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setColumns(  $columns) {
    $this->assertIsArray($columns, 'Google_Column', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class Google_TableList extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_Table';
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
    $this->assertIsArray($items, 'Google_Table', __METHOD__);
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

class Google_Template extends Google_Model {
  public $body;
  public $kind;
  public $name;
  public $automaticColumnNames;
  public $isDefaultForTable;
  public $tableId;
  public $templateId;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setAutomaticColumnNames(  $automaticColumnNames) {
    $this->assertIsArray($automaticColumnNames, 'Google_string', __METHOD__);
    $this->automaticColumnNames = $automaticColumnNames;
  }
  public function getAutomaticColumnNames() {
    return $this->automaticColumnNames;
  }
  public function setIsDefaultForTable($isDefaultForTable) {
    $this->isDefaultForTable = $isDefaultForTable;
  }
  public function getIsDefaultForTable() {
    return $this->isDefaultForTable;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setTemplateId($templateId) {
    $this->templateId = $templateId;
  }
  public function getTemplateId() {
    return $this->templateId;
  }
}

class Google_TemplateList extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_Template';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Template', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}
