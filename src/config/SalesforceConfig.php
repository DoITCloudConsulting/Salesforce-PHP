<?php

return [

	/*
    |--------------------------------------------------------------------------
    | Data Access
    |--------------------------------------------------------------------------
    |
    | Set credenctials to login on salesforce platform.
    | 
    */

	'Username' => '--@---.consulting',
	'Password' => '-----',
	'Token' => '-----',

	/*
    |--------------------------------------------------------------------------
    | WSDL 
    |--------------------------------------------------------------------------
    |
    | To connect to salesforce definition objects is necessary set a connect 
    | mode, partner or enterprise is the options. Download the WSDL from 
    | Salesforce > Settings > API. Click on the option that you need and 
    | replace the files demo on the package.
    |
    | Enterprise / Partner
    | 
    */


	'Mode' => 'partner',


	/*
    |--------------------------------------------------------------------------
    | Validation fields
    |--------------------------------------------------------------------------
    |
    | This section let you validate data before you execute a call to 
    | salesforce, it is reviewed before the API Call to salesforce would be 
    | executed.
    | 
    | You can add custom fields with the API Name (don't forget the 
    | __c prefix), isn't necessary especify the 
    | object.
    */

	'Validation_Fields' => [
        'phones' 	=> ['Phone', 'MobilePhone', 'AssistantPhone', 'HomePhone'],
        'emails' 	=> ['Email'],
        'dates' 	=> ['Birthdate', 'CloseDate'],
        'url' 		=> ['Website']
	]

];

?>