<?php

namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository implements PermissionRepositoryInterface
{
    protected $model;

    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $permission = $this->model->find($id);
        $permission->update($data);
        return $permission;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
