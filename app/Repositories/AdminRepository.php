<?php

namespace App\Repositories;

use App\Repositories\AdminRepositoryInterface;
use App\Admin;

class AdminRepository implements AdminRepositoryInterface
{

    public function __construct(
        Admin $admin
    ) {
        $this->admin = $admin;
    }

    public function createAdmin($input_data)
    {
        return $this->admin->create($input_data);
    }

    public function allAdmins()
    {
        return $this->admin->all();
    }
}
