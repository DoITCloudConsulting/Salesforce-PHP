# Toolkit force

Salesforce ToolKit for Laravel maked by DoIT Cloud Consulting

## Getting Started

Thank you so much for the interest on the package, is very interesting to us keep a community open source to Salesforce integrations. The work on the package is sponsored by **DoIT Cloud Consulting** and to company is importatn get your feedback, please contact us throught the [official page ](http://www.doitcloud.consulting/) to duds or questions.

### Prerequisites

In this tutorial we take for granted that you have installed PHP and composer. Create a laravel project, run the next commands:

```
$ composer create-project --prefer-dist laravel/laravel SalesforceConnectionProject
```
```
$ cd SalesforceConnectionProject
```

### Installing

After you have a laravel project you will need run the command to install our package:


```
composer require doitcloudconsulting/salesforce
```

Wait a moment and you see on the composer.json a new element:

```
 "require": {
     ....
        "doitcloudconsulting/salesforce": "^0.0.0",
     ....
    }
```


Now is necessary add the service providers, go to config/app.php and add the next line in the providers array:


```
 DoITCloudConsulting\Salesforce\SalesforceServiceProvider::class,
```

To init session is neccesary add some parameters and a file wsdl, set the credentials on the config file app/SalesforceConfig.php . You will must run the next command to see the file on the config folder.

```
$ php artisan vendor:publish --tag=config

####### Result #######

Copied File [/myProject/DoITCloudConsulting/Salesforce/src/config/SalesforceConfig.php] To [/config/SalesforceConfig.php]

```

Set the credentials

```
return [

	/*
    |--------------------------------------------------------------------------
    | Data Access
    |--------------------------------------------------------------------------
    |
    | Set credenctials to login on salesforce platform.
    | 
    */

	'Username' => '********@doitcloud.consulting',
	'Password' => '**********',
	'Token' => '******************************',

```

Now export the demo file to connect through a wsdl. It will show a file wsdl into config/partner.wsdl.xml, just you need replace it. Run the next command:

```
$ php artisan vendor:publish --tag=wsdlconfig

```

Go to Settings >[find box write] API > Download Partner / Enterprise then you will download a file xml that must be replaced inside of config/partner.wsdl.xml

Depending of connection type selected, in **config/SalesforceConfig.php** you must set what type connection you want use.

```

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
    */


    'Mode' => 'partner',

```


## Running some examples:

Insert

```
$salesforce = new Salesforce();
$salesforce->insert(array('Name' => 'DoIT Acc FROM ToolKit'), 'Account');

```

Update

```
$salesforce = new Salesforce();
$salesforce->update(array('Name' => 'DoIT Acc ', 'id' => '001f400000yNY0LAAW'), 'Account');
```

Delete

```
$salesforce = new Salesforce();
$salesforce->delete(array('001f400000yNY0LAAW', '001f400130TMY0L5AW', ...));
```

Undelete

```
$salesforce = new Salesforce();
$salesforce->delete(array('001f400000yNY0LAAW', '001f400130TMY0L5AW', ...));
```

Upsert

```
$salesforce = new Salesforce();
$salesforce->upsert(array(
	array('Name' => 'Acc1'),
	array('Name' => 'Acc2'),
	array('Name' => 'Acc2', 'Phone' => 192837465, 'id' => '001f400000yNY0LAAW'),
	), 'Account');
```

Query

```
$salesforce = new Salesforce();
$salesforce->query('select Id, Name from Account limit 10');
```

Search / SOSL
```
$salesforce = new Salesforce();
$salesforce->sosl('Find {doit} Returning Account(name), lead(name, phone)');
```

Convert Lead
```
$salesforce = new Salesforce();

$lead = $salesforce->insert(
        array('lastname' => 'Homerito Hernández', 
              'Email' => 'homerito@doitcloud.mx', 
              'Phone' => 1234588892, 
              'Company' => 'DoIT Cloud Consulting'
          ), 'Lead');

$salesforce->convertLead($lead->id, 'Closed - Converted');

```
<!-- ### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
``` -->

<!-- ## Deployment

Add additional notes about how to deploy this on a live system -->

## Built With

* [Carbon](https://carbon.nesbot.com/docs/) - A simple PHP API extension for DateTime.
* [Sublime Text](https://www.sublimetext.com/) - A sophisticated text editor for
code, markup and prose
* [PHP Toolkit Salesforce](https://developer.salesforce.com/index.php?title=Getting_Started_with_the_Force.com_Toolkit_for_PHP&oldid=51397) - The Force.com PHP Toolkit provides an easy-to-use wrapper for the Force.com 
* [PHP](https://php.net/) - PHP is a popular general-purpose scripting language that is especially suited to web development.
* [SOAP Project](https://www.php.net/manual/es/book.soap.php) - Web Service

<!-- ## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us. -->
 
## Authors

* **Hugo Hernández** - *Initial work* - [Linkedin](https://www.linkedin.com/in/hugo-hern%C3%A1ndez-65921080/)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the LGPL-2.0-only License - see the [LICENSE.md](LICENSE.md) file for details

<!-- ## Acknowledgments

* Inspiration
* etc -->

