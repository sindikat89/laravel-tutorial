<?php

namespace App\Repositories;

interface AdminRepositoryInterface
{
    /**
     * @param array $input_data The associative array with the admin data
     *
     * @return Admin id
     */
    public function createAdmin($input_data);

    /**
     *
     * @return Admin Collection
     */
    public function allAdmins();
}
