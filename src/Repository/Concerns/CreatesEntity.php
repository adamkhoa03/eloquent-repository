<?php

namespace Adamkhoa03\EloquentRepository\Repository\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @package Adamkhoa03\EloquentRepository\Repository\Concerns
 */
trait CreatesEntity
{
    /**
     * Creates model.
     *
     * @param mixed $properties
     *
     * @return Builder|Model
     */
    public function create($properties)
    {
        return $this->model->create($properties);
    }
}
