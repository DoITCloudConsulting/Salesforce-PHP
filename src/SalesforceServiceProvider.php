<?php

namespace DoITCloudConsulting\Salesforce;

use Illuminate\Support\ServiceProvider;

class SalesforceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->mergeConfigFrom(
            __DIR__ . '/config/SalesforceConfig.php', 'SalesforceConfig'
        );
        $this->app->make('DoITCloudConsulting\Salesforce\Controllers\Salesforce');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/SalesforceConfig.php' => config_path('SalesforceConfig.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/partner.wsdl.xml' => config_path('partner.wsdl.xml')
        ], 'wsdlconfig');
    }
}
