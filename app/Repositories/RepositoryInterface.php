<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * @param array $attributes The associative array with the data
     *
     * @return id
     */
    public function create(array $attributes);

    /**
     *
     * @return Collection
     */
    public function all($columns = array('*'));
}
