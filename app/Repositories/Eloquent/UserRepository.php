<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseCRUDRepository implements UserRepositoryInterface
{
    public function index()
    {
//        return $this->model->paginate(config('pagination.per_page'))->orderByDesc('id');
//        dd($this);
        return $this->model->orderByDesc('id')->get();
    }
}
