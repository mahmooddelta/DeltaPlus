<?php

namespace TwoFactorAuth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TwoFactorAuthServiceProvider extends ServiceProvider
{
    private string $namespace = 'TwoFactorAuth\Http\Controllers';

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/two_factor_auth_config.php',
            'two_factor_config'
        );
    }

    public function boot()
    {
        $this->defineRoutes();
    }

    private function defineRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/routes.php');
    }
}
