<?php

namespace App\Providers;

use URL;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        
        if ('https' == Request::header('x-forwarded-proto')) {
            $url->forceScheme('https');
            $this->app['request']->server->set('HTTPS','on');
            URL::forceRootUrl(Config::get('app.url'));
        }
    }
}
