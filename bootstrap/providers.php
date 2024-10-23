<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\RouteServiceProvider::class,
    \App\Providers\RepositoryServiceProvider::class,
    \Admin\AdminServiceProvider::class,
    \Client\ClientServiceProvider::class,
    \TwoFactorAuth\TwoFactorAuthServiceProvider::class,
    \User\UserServiceProvider::class,
];
