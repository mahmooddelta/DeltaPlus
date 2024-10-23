<?php

namespace App\Repositories\Eloquent;

use App\ElasticBuilder\Elastic;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class UserRespositoryElastic implements UserRepositoryInterface
{
    public function index()
    {


       // dd(Elastic::index('users_*')->search());
        return \Afzali\LaravelElasticsearch\Elastic::index('users_*')->extractData()->paginate();
//        $test2 = Elastic::index('users_*')->extractData()->paginate();
//        dd($test1, $test2);





//        $params = [
//            'index' => 'users_*',
//            'scroll' => '10m',
//            'size' => 1000,
//        ];
//        $client = ClientBuilder::create()
//            ->setHosts(['elasticsearch:9200'])
//            ->setBasicAuthentication(config('elasticsearch.user'), config('elasticsearch.password'))
//            ->build();
//
//        $perPage = config('pagination.per_page');
//
//        $response = $client->search($params);
//
//
//
//        $users = $response['hits']['hits'];
//
//
//
////        $items = $users;
//        $items = [];
//        foreach ($response['hits']['hits'] as $hit) {
//            $source = $hit['_source'];
//            $items[] = $source;
//        }
//        $currentPage = Paginator::resolveCurrentPage();
//
//        $paginatedItems = array_slice($items, ($currentPage - 1) * $perPage, $perPage);
//        $usersCollection = new Collection($paginatedItems);
//        return new LengthAwarePaginator(
//            $usersCollection,
//            count($items),
//            $perPage,
//            $currentPage,
//            ['path' => Paginator::resolveCurrentPath()]);
    }
}
