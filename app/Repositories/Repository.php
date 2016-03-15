<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Container\Container;

abstract class Repository implements RepositoryInterface
{
    protected $modelClassName;
    protected $model;

    public function __construct(
        Container $app
    ) {
        $this->model = $app->make($this->modelClassName);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function all($columns = array('*'))
    {
        return $this->model->all($columns);
    }
}
