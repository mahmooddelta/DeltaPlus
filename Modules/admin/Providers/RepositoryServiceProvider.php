<?php

namespace Admin\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }

    /**
     * Register services.
     */
    public function register(): void
    {
//        $this->app->singleton(FoodRepositoryInterface::class, function () {
//            return new FoodRepository(resolve(U::class));
//        });
    }
}
