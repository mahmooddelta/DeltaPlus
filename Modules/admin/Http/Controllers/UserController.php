<?php

namespace Admin\Http\Controllers;

use App\ElasticBuilder\Elastic;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\UserService;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Elastic\Elasticsearch\Exception\ClientResponseException;
use Elastic\Elasticsearch\Exception\ServerResponseException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function __construct(private readonly UserService $service)
    {
    }

    public function index(): View|Factory|Application
    {
        $users = $this->service->index();

        return view('admin::list', compact('users'));
    }

    public function show(int $id): View|Factory|Application
    {
        $user = $this->service->show($id);

        return view('admin::show', compact('user'));
    }

    public function update(Request $request, int $id): Application|Redirector|RedirectResponse
    {
        $this->service->update($request->all(), $id);

        return redirect(route('admin.users.show', $id, absolute: false));
    }

    public function delete(int $id): Application|Redirector|RedirectResponse
    {
        $this->service->delete($id);

        return redirect(route('admin.users', absolute: false));
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


        echo "زمان اجرا برای دیتابیس: ".$time1." ثانیه".PHP_EOL;

        echo "زمان اجرا برای الستیک‌سرچ: ".$time2." ثانیه".PHP_EOL;

        echo "زمان اجرا برای کش: ".$time3." ثانیه".PHP_EOL;
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
