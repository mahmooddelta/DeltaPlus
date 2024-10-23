<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\BaseCRUDRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class BaseCRUDRepository extends BaseRepository implements BaseCRUDRepositoryInterface
{
    /**
     * @param  int  $id
     * @param  array  $columns
     *
     * @return Model|null
     */
    public function find(int $id, array $columns = ['*']): ?Model
    {
        return $this->model->newQuery()->find($id, $columns);
    }

    /**
     * @param  int  $id
     * @param  array  $columns
     *
     * @return Model
     */
    public function findOrFail(int $id, array $columns = ['*']): Model
    {
        return $this->model->newQuery()->findOrFail($id, $columns);
    }

    public function create(array $data): Model|Builder
    {
        return $this->model->newQuery()->create($data);
    }

    public function update(array $data, int $id): Model
    {
        $calory = $this->findOrFail($id);

        $calory->update($data);

        return $calory;
    }

    /**
     * @param  int  $id
     *
     * @return bool|null
     */
    public function delete(int $id): ?bool
    {
        return $this->findOrFail($id)->delete();
    }
}
