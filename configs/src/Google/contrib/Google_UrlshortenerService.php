<?php
 


   
  class Google_UrlServiceResource extends Google_ServiceResource {


     
    public function insert(Google_Url $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Url($data);
      } else {
        return $data;
      }
    }
     
    public function listUrl($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_UrlHistory($data);
      } else {
        return $data;
      }
    }
     
    public function get($shortUrl, $optParams = array()) {
      $params = array('shortUrl' => $shortUrl);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Url($data);
      } else {
        return $data;
      }
    }
  }

 
class Google_UrlshortenerService extends Google_Service {
  public $url;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'urlshortener/v1/';
    $this->version = 'v1';
    $this->serviceName = 'urlshortener';

    $client->addService($this->serviceName, $this->version);
    $this->url = new Google_UrlServiceResource($this, $this->serviceName, 'url', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/urlshortener"], "request": {"$ref": "Url"}, "response": {"$ref": "Url"}, "httpMethod": "POST", "path": "url", "id": "urlshortener.url.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/urlshortener"], "parameters": {"start-token": {"type": "string", "location": "query"}, "projection": {"enum": ["ANALYTICS_CLICKS", "FULL"], "type": "string", "location": "query"}}, "response": {"$ref": "UrlHistory"}, "httpMethod": "GET", "path": "url/history", "id": "urlshortener.url.list"}, "get": {"httpMethod": "GET", "response": {"$ref": "Url"}, "id": "urlshortener.url.get", "parameters": {"shortUrl": {"required": true, "type": "string", "location": "query"}, "projection": {"enum": ["ANALYTICS_CLICKS", "ANALYTICS_TOP_STRINGS", "FULL"], "type": "string", "location": "query"}}, "path": "url"}}}', true));

  }
}

class Google_AnalyticsSnapshot extends Google_Model {
  public $shortUrlClicks;
  protected $__countriesType = 'Google_StringCount';
  protected $__countriesDataType = 'array';
  public $countries;
  protected $__platformsType = 'Google_StringCount';
  protected $__platformsDataType = 'array';
  public $platforms;
  protected $__browsersType = 'Google_StringCount';
  protected $__browsersDataType = 'array';
  public $browsers;
  protected $__referrersType = 'Google_StringCount';
  protected $__referrersDataType = 'array';
  public $referrers;
  public $longUrlClicks;
  public function setShortUrlClicks($shortUrlClicks) {
    $this->shortUrlClicks = $shortUrlClicks;
  }
  public function getShortUrlClicks() {
    return $this->shortUrlClicks;
  }
  public function setCountries(  $countries) {
    $this->assertIsArray($countries, 'Google_StringCount', __METHOD__);
    $this->countries = $countries;
  }
  public function getCountries() {
    return $this->countries;
  }
  public function setPlatforms(  $platforms) {
    $this->assertIsArray($platforms, 'Google_StringCount', __METHOD__);
    $this->platforms = $platforms;
  }
  public function getPlatforms() {
    return $this->platforms;
  }
  public function setBrowsers(  $browsers) {
    $this->assertIsArray($browsers, 'Google_StringCount', __METHOD__);
    $this->browsers = $browsers;
  }
  public function getBrowsers() {
    return $this->browsers;
  }
  public function setReferrers(  $referrers) {
    $this->assertIsArray($referrers, 'Google_StringCount', __METHOD__);
    $this->referrers = $referrers;
  }
  public function getReferrers() {
    return $this->referrers;
  }
  public function setLongUrlClicks($longUrlClicks) {
    $this->longUrlClicks = $longUrlClicks;
  }
  public function getLongUrlClicks() {
    return $this->longUrlClicks;
  }
}

class Google_AnalyticsSummary extends Google_Model {
  protected $__weekType = 'Google_AnalyticsSnapshot';
  protected $__weekDataType = '';
  public $week;
  protected $__allTimeType = 'Google_AnalyticsSnapshot';
  protected $__allTimeDataType = '';
  public $allTime;
  protected $__twoHoursType = 'Google_AnalyticsSnapshot';
  protected $__twoHoursDataType = '';
  public $twoHours;
  protected $__dayType = 'Google_AnalyticsSnapshot';
  protected $__dayDataType = '';
  public $day;
  protected $__monthType = 'Google_AnalyticsSnapshot';
  protected $__monthDataType = '';
  public $month;
  public function setWeek(Google_AnalyticsSnapshot $week) {
    $this->week = $week;
  }
  public function getWeek() {
    return $this->week;
  }
  public function setAllTime(Google_AnalyticsSnapshot $allTime) {
    $this->allTime = $allTime;
  }
  public function getAllTime() {
    return $this->allTime;
  }
  public function setTwoHours(Google_AnalyticsSnapshot $twoHours) {
    $this->twoHours = $twoHours;
  }
  public function getTwoHours() {
    return $this->twoHours;
  }
  public function setDay(Google_AnalyticsSnapshot $day) {
    $this->day = $day;
  }
  public function getDay() {
    return $this->day;
  }
  public function setMonth(Google_AnalyticsSnapshot $month) {
    $this->month = $month;
  }
  public function getMonth() {
    return $this->month;
  }
}

class Google_StringCount extends Google_Model {
  public $count;
  public $id;
  public function setCount($count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_Url extends Google_Model {
  public $status;
  public $kind;
  public $created;
  protected $__analyticsType = 'Google_AnalyticsSummary';
  protected $__analyticsDataType = '';
  public $analytics;
  public $longUrl;
  public $id;
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
  public function setCreated($created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setAnalytics(Google_AnalyticsSummary $analytics) {
    $this->analytics = $analytics;
  }
  public function getAnalytics() {
    return $this->analytics;
  }
  public function setLongUrl($longUrl) {
    $this->longUrl = $longUrl;
  }
  public function getLongUrl() {
    return $this->longUrl;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_UrlHistory extends Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'Google_Url';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $itemsPerPage;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(  $items) {
    $this->assertIsArray($items, 'Google_Url', __METHOD__);
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
  public function setItemsPerPage($itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}
