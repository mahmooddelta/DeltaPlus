<?php

namespace App\Providers;


use App\Models\User;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
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
        $this->app->singleton(UserRepositoryInterface::class, function () {
            return new UserRepository(resolve(User::class));
        });

    }
}
