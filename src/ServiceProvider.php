<?php

namespace Laravel\SocialCredentials;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class Service Provider
 *
 * @package     Laravel\SocialCredentials
 * @author      Oanh Nguyen <oanhnn.bk@gmail.com>
 * @license     The MIT license
 */
class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // publish vendor resources
        if ($this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__) . '/resources/stubs/create-table.stub' =>
                    database_path('migrations/2019_12_05_100000_create_social_credentials_table.php'),
            ], 'laravel-social-credentials');
        }
    }
}
