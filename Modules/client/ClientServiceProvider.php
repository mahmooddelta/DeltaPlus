<?php

namespace Client;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    private string $namespace = 'Client\Http\Controllers';

    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views' , 'client');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang' , 'client');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function boot()
    {
        $this->defineRoutes();
    }

    private function defineRoutes()
    {
//        Route::prefix('api')
//            ->middleware('api')
//            ->namespace($this->namespace)
//            ->group(__DIR__ . '/routes.php');

        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/routes/web.php');
    }
}
