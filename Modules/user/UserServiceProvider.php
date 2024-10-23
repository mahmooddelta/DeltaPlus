<?php


namespace User;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    private string $namespace = 'User\Http\Controllers';

    public function register()
    {

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
