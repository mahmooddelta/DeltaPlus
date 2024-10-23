<?php

namespace Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    private string $namespace = 'Admin\Http\Controllers';

    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views' , 'admin');
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
//            ->group(__DIR__ . '/routes/web.php');


        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/routes/web.php');
    }
}
