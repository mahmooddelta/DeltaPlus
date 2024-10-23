<?php

namespace User\Http\Controllers;

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

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $users = $this->userRepository->getAll();


//        $users = User::paginate(10);
        //dd($users);




//        $client = ClientBuilder::create()
//            ->setHosts(['elasticsearch:9200'])
//            ->setBasicAuthentication(config('elasticsearch.user'), config('elasticsearch.password'))
//            ->build();
//
//
//        $perPage = 10;
//
//        $params = [
//            'index' => 'users_1702292346',
//            'scroll' => '10m',
//            'size' => 1000,
//        ];
//
//
//        $response = $client->search($params);
//
//        $users = $response['hits']['hits'];
//        $currentPage = Paginator::resolveCurrentPage();
//
//        $paginatedItems = array_slice($users, ($currentPage - 1) * $perPage, $perPage);
//        $usersCollection = new Collection($paginatedItems);
//        $users = new LengthAwarePaginator(
//            $usersCollection,
//            count($users),
//            $perPage,
//            $currentPage,
//            ['path' => Paginator::resolveCurrentPath()]);
//


        return view('admin.list', compact('users'));
    }

    public function test(Request $request)
    {
//        $client = ClientBuilder::create()
//            ->setHosts(['elasticsearch:9200'])
//            ->setBasicAuthentication(config('elasticsearch.user'), config('elasticsearch.password'))
//            ->build();
//
//        $perPage = config('pagination.per_page');
//
//        $params = [
//            'index' => 'users_*',
//            'scroll' => '10m',
//            'size' => 1000,
//        ];
//
//        $response = $client->search($params);
//        dd($response);


        dd(Elastic::index('users_*')->extractData()->get());




        $start1 = microtime(true);

        $users1 = (new DatabaseUserSearchStrategy())->search($request);

        $time1 = microtime(true) - $start1;


        $start2 = microtime(true);

        $users2 = (new ElasticsearchUserSearchStrategy())->search($request);

        $time2 = microtime(true) - $start2;

        $start3 = microtime(true);

        $value = Cache::remember('users', 10, function () {
            return User::paginate(50);
        });

        $time3 = microtime(true) - $start3;


        echo "زمان اجرا برای دیتابیس: " . $time1 . " ثانیه" . PHP_EOL;

        echo "زمان اجرا برای الستیک‌سرچ: " . $time2 . " ثانیه" . PHP_EOL;

        echo "زمان اجرا برای کش: " . $time3 . " ثانیه" . PHP_EOL;
//        $users1 = (new DatabaseUserSearchStrategy())->search($request);
//        $users2 = (new ElasticsearchUserSearchStrategy())->search($request);
        dd(1);
//        dd($users1, $users2);







//        $elasticsearchUserAdapter = new ElasticsearchUserAdapter();
//        $elasticsearchStrategy = new ElasticsearchUserSearchStrategy($elasticsearchUserAdapter);
//        dd($elasticsearchStrategy);
//        $userResponseFromElasticsearch = $elasticsearchStrategy->search($request);
//
//
//        if (count($userResponseFromElasticsearch->getUsers()) == 0) {
//            $databaseUserAdapter = new DatabaseUserAdapter();
//            $databaseStrategy = new DatabaseUserSearchStrategy($databaseUserAdapter);
//            $userResponse = $databaseStrategy->search($request);
//        } else {
//            $userResponse = $userResponseFromElasticsearch;
//        }
//
//        $users = $userResponse->getUsers();

        return view('admin.list', compact('users'));
    }
}
