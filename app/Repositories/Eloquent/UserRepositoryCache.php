<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class UserRepositoryCache implements UserRepositoryInterface
{
    public function index()
    {
        return Cache::remember('users', 10, function () {
            return User::paginate(config('pagination.per_page'));
        });
    }
}
