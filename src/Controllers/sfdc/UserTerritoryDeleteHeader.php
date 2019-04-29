<?php
namespace DoITCloudConsulting\Salesforce\Controllers\sfdc;

class UserTerritoryDeleteHeader {
	public $transferToUserId;

	public function __construct($transferToUserId) {
		$this->transferToUserId = $transferToUserId;
	}
}
?>