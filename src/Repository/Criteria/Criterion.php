<?php

namespace Adamkhoa03\EloquentRepository\Repository\Criteria;

interface Criterion
{
    /**
     * @param mixed $model
     *
     * @return mixed
     */
    public function apply($model);
}
