<?php
 


   
  class Google_PagespeedapiServiceResource extends Google_ServiceResource {


     
    public function runpagespeed($url, $optParams = array()) {
      $params = array('url' => $url);
      $params = array_merge($params, $optParams);
      $data = $this->__call('runpagespeed', array($params));
      if ($this->useObjects()) {
        return new Google_Result($data);
      } else {
        return $data;
      }
    }
  }

 
class Google_PagespeedonlineService extends Google_Service {
  public $pagespeedapi;
   
  public function __construct(Google_Client $client) {
    $this->servicePath = 'pagespeedonline/v1/';
    $this->version = 'v1';
    $this->serviceName = 'pagespeedonline';

    $client->addService($this->serviceName, $this->version);
    $this->pagespeedapi = new Google_PagespeedapiServiceResource($this, $this->serviceName, 'pagespeedapi', json_decode('{"methods": {"runpagespeed": {"httpMethod": "GET", "response": {"$ref": "Result"}, "id": "pagespeedonline.pagespeedapi.runpagespeed", "parameters": {"locale": {"type": "string", "location": "query"}, "url": {"required": true, "type": "string", "location": "query"}, "rule": {"repeated": true, "type": "string", "location": "query"}, "strategy": {"enum": ["desktop", "mobile"], "type": "string", "location": "query"}}, "path": "runPagespeed"}}}', true));

  }
}

class Google_Result extends Google_Model {
  public $kind;
  protected $__formattedResultsType = 'Google_ResultFormattedResults';
  protected $__formattedResultsDataType = '';
  public $formattedResults;
  public $title;
  protected $__versionType = 'Google_ResultVersion';
  protected $__versionDataType = '';
  public $version;
  public $score;
  public $responseCode;
  public $invalidRules;
  protected $__pageStatsType = 'Google_ResultPageStats';
  protected $__pageStatsDataType = '';
  public $pageStats;
  public $id;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setFormattedResults(Google_ResultFormattedResults $formattedResults) {
    $this->formattedResults = $formattedResults;
  }
  public function getFormattedResults() {
    return $this->formattedResults;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setVersion(Google_ResultVersion $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
  public function setScore($score) {
    $this->score = $score;
  }
  public function getScore() {
    return $this->score;
  }
  public function setResponseCode($responseCode) {
    $this->responseCode = $responseCode;
  }
  public function getResponseCode() {
    return $this->responseCode;
  }
  public function setInvalidRules(  $invalidRules) {
    $this->assertIsArray($invalidRules, 'Google_string', __METHOD__);
    $this->invalidRules = $invalidRules;
  }
  public function getInvalidRules() {
    return $this->invalidRules;
  }
  public function setPageStats(Google_ResultPageStats $pageStats) {
    $this->pageStats = $pageStats;
  }
  public function getPageStats() {
    return $this->pageStats;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_ResultFormattedResults extends Google_Model {
  public $locale;
  protected $__ruleResultsType = 'Google_ResultFormattedResultsRuleResults';
  protected $__ruleResultsDataType = 'map';
  public $ruleResults;
  public function setLocale($locale) {
    $this->locale = $locale;
  }
  public function getLocale() {
    return $this->locale;
  }
  public function setRuleResults(Google_ResultFormattedResultsRuleResults $ruleResults) {
    $this->ruleResults = $ruleResults;
  }
  public function getRuleResults() {
    return $this->ruleResults;
  }
}

class Google_ResultFormattedResultsRuleResults extends Google_Model {
  public $localizedRuleName;
  protected $__urlBlocksType = 'Google_ResultFormattedResultsRuleResultsUrlBlocks';
  protected $__urlBlocksDataType = 'array';
  public $urlBlocks;
  public $ruleScore;
  public $ruleImpact;
  public function setLocalizedRuleName($localizedRuleName) {
    $this->localizedRuleName = $localizedRuleName;
  }
  public function getLocalizedRuleName() {
    return $this->localizedRuleName;
  }
  public function setUrlBlocks(  $urlBlocks) {
    $this->assertIsArray($urlBlocks, 'Google_ResultFormattedResultsRuleResultsUrlBlocks', __METHOD__);
    $this->urlBlocks = $urlBlocks;
  }
  public function getUrlBlocks() {
    return $this->urlBlocks;
  }
  public function setRuleScore($ruleScore) {
    $this->ruleScore = $ruleScore;
  }
  public function getRuleScore() {
    return $this->ruleScore;
  }
  public function setRuleImpact($ruleImpact) {
    $this->ruleImpact = $ruleImpact;
  }
  public function getRuleImpact() {
    return $this->ruleImpact;
  }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocks extends Google_Model {
  protected $__headerType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksHeader';
  protected $__headerDataType = '';
  public $header;
  protected $__urlsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrls';
  protected $__urlsDataType = 'array';
  public $urls;
  public function setHeader(Google_ResultFormattedResultsRuleResultsUrlBlocksHeader $header) {
    $this->header = $header;
  }
  public function getHeader() {
    return $this->header;
  }
  public function setUrls(  $urls) {
    $this->assertIsArray($urls, 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrls', __METHOD__);
    $this->urls = $urls;
  }
  public function getUrls() {
    return $this->urls;
  }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksHeader extends Google_Model {
  protected $__argsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksHeaderArgs';
  protected $__argsDataType = 'array';
  public $args;
  public $format;
  public function setArgs(  $args) {
    $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsUrlBlocksHeaderArgs', __METHOD__);
    $this->args = $args;
  }
  public function getArgs() {
    return $this->args;
  }
  public function setFormat($format) {
    $this->format = $format;
  }
  public function getFormat() {
    return $this->format;
  }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksHeaderArgs extends Google_Model {
  public $type;
  public $value;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrls extends Google_Model {
  protected $__detailsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetails';
  protected $__detailsDataType = 'array';
  public $details;
  protected $__resultType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResult';
  protected $__resultDataType = '';
  public $result;
  public function setDetails(  $details) {
    $this->assertIsArray($details, 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetails', __METHOD__);
    $this->details = $details;
  }
  public function getDetails() {
    return $this->details;
  }
  public function setResult(Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResult $result) {
    $this->result = $result;
  }
  public function getResult() {
    return $this->result;
  }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetails extends Google_Model {
  protected $__argsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetailsArgs';
  protected $__argsDataType = 'array';
  public $args;
  public $format;
  public function setArgs(  $args) {
    $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetailsArgs', __METHOD__);
    $this->args = $args;
  }
  public function getArgs() {
    return $this->args;
  }
  public function setFormat($format) {
    $this->format = $format;
  }
  public function getFormat() {
    return $this->format;
  }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetailsArgs extends Google_Model {
  public $type;
  public $value;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResult extends Google_Model {
  protected $__argsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResultArgs';
  protected $__argsDataType = 'array';
  public $args;
  public $format;
  public function setArgs(  $args) {
    $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResultArgs', __METHOD__);
    $this->args = $args;
  }
  public function getArgs() {
    return $this->args;
  }
  public function setFormat($format) {
    $this->format = $format;
  }
  public function getFormat() {
    return $this->format;
  }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResultArgs extends Google_Model {
  public $type;
  public $value;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Google_ResultPageStats extends Google_Model {
  public $otherResponseBytes;
  public $flashResponseBytes;
  public $totalRequestBytes;
  public $numberCssResources;
  public $numberResources;
  public $cssResponseBytes;
  public $javascriptResponseBytes;
  public $imageResponseBytes;
  public $numberHosts;
  public $numberStaticResources;
  public $htmlResponseBytes;
  public $numberJsResources;
  public $textResponseBytes;
  public function setOtherResponseBytes($otherResponseBytes) {
    $this->otherResponseBytes = $otherResponseBytes;
  }
  public function getOtherResponseBytes() {
    return $this->otherResponseBytes;
  }
  public function setFlashResponseBytes($flashResponseBytes) {
    $this->flashResponseBytes = $flashResponseBytes;
  }
  public function getFlashResponseBytes() {
    return $this->flashResponseBytes;
  }
  public function setTotalRequestBytes($totalRequestBytes) {
    $this->totalRequestBytes = $totalRequestBytes;
  }
  public function getTotalRequestBytes() {
    return $this->totalRequestBytes;
  }
  public function setNumberCssResources($numberCssResources) {
    $this->numberCssResources = $numberCssResources;
  }
  public function getNumberCssResources() {
    return $this->numberCssResources;
  }
  public function setNumberResources($numberResources) {
    $this->numberResources = $numberResources;
  }
  public function getNumberResources() {
    return $this->numberResources;
  }
  public function setCssResponseBytes($cssResponseBytes) {
    $this->cssResponseBytes = $cssResponseBytes;
  }
  public function getCssResponseBytes() {
    return $this->cssResponseBytes;
  }
  public function setJavascriptResponseBytes($javascriptResponseBytes) {
    $this->javascriptResponseBytes = $javascriptResponseBytes;
  }
  public function getJavascriptResponseBytes() {
    return $this->javascriptResponseBytes;
  }
  public function setImageResponseBytes($imageResponseBytes) {
    $this->imageResponseBytes = $imageResponseBytes;
  }
  public function getImageResponseBytes() {
    return $this->imageResponseBytes;
  }
  public function setNumberHosts($numberHosts) {
    $this->numberHosts = $numberHosts;
  }
  public function getNumberHosts() {
    return $this->numberHosts;
  }
  public function setNumberStaticResources($numberStaticResources) {
    $this->numberStaticResources = $numberStaticResources;
  }
  public function getNumberStaticResources() {
    return $this->numberStaticResources;
  }
  public function setHtmlResponseBytes($htmlResponseBytes) {
    $this->htmlResponseBytes = $htmlResponseBytes;
  }
  public function getHtmlResponseBytes() {
    return $this->htmlResponseBytes;
  }
  public function setNumberJsResources($numberJsResources) {
    $this->numberJsResources = $numberJsResources;
  }
  public function getNumberJsResources() {
    return $this->numberJsResources;
  }
  public function setTextResponseBytes($textResponseBytes) {
    $this->textResponseBytes = $textResponseBytes;
  }
  public function getTextResponseBytes() {
    return $this->textResponseBytes;
  }
}

class Google_ResultVersion extends Google_Model {
  public $major;
  public $minor;
  public function setMajor($major) {
    $this->major = $major;
  }
  public function getMajor() {
    return $this->major;
  }
  public function setMinor($minor) {
    $this->minor = $minor;
  }
  public function getMinor() {
    return $this->minor;
  }
}
