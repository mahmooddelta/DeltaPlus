<?php

namespace App\Services;


use App\Repositories\Interfaces\UserRepositoryInterface;

final readonly class UserService
{
    public function __construct(private UserRepositoryInterface $repository)
    {
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function show(int $id)
    {
        return $this->repository->findOrFail($id);
    }

    public function store(CategoryData $data)
    {
        return $this->repository->create($data->toArray());
    }

    public function update($data, $id)
    {
        return $this->repository->update($data, $id);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}
