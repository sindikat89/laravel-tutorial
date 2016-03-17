<?php

namespace App\Repositories\Admin;

use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Repository as AbstractRepository;
use Illuminate\Container\Container;
use App\Admin;

class AdminRepository extends AbstractRepository implements AdminRepositoryInterface
{

    public function __construct(
        Container $app
    ) {
        parent::__construct($app);
    }

    protected $modelClassName = Admin::class;

    public function createAdmin($input_data)
    {
        $data_array = array(
            'email' => $input_data['email'],
            'name' => $input_data['name'],
            'password' => bcrypt($input_data['password']),
        );

        return $this->model->create($data_array);
    }
}

