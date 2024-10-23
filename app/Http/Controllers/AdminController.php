<?php

namespace App\Http\Controllers;

use App\ElasticBuilder\Elastic;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;
use Elastic\Elasticsearch\Exception\ClientResponseException;
use Elastic\Elasticsearch\Exception\ServerResponseException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    
}
