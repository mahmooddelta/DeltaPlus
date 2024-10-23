<?php

namespace App\Repositories\Interfaces;

interface BaseCRUDRepositoryInterface
{
    public function find(int $id, array $columns = ['*']);

    public function findOrFail(int $id, array $columns = ['*']);

    public function create(array $data);

    public function update(array $data, int $id);

    public function delete(int $id);
}
