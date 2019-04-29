<?php
namespace DoITCloudConsulting\Salesforce\Controllers\sfdc;

class AllowFieldTruncationHeader {
    public $allowFieldTruncation;
    
    public function __construct($allowFieldTruncation) {
        $this->allowFieldTruncation = $allowFieldTruncation;
    }
}

?>