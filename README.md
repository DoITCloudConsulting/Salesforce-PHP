# DoIT Salesforce

Salesforce ToolKit for Laravel maked by DoIT Cloud Consulting

## Getting Started

Thank you so much for the interest on the package, is very interesting to us keep a community open source to Salesforce integrations. The work on the package is sponsored by **DoIT Cloud Consulting** and to company is importatn get your feedback, please contact us throught the * [official page ](http://www.doitcloud.consulting/) to duds or questions.

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
composer create-project doitcloudconsulting/salesforce
```

Wait a moment and you see on the composer.json a new element:

```
 "require": {
     ....
        "doitcloudconsulting/salesforce": "@dev",
     ....
    }
```


Now is necessary add the service providers, go to config/app.php and add the next line in the providers array:


```
 DoITCloudConsulting\Salesforce\SalesforceServiceProvider::class,
```


## Running some examples:

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc

