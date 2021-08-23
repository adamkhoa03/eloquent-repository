<?php

namespace Adamkhoa03\EloquentRepository\Repository\Eloquent\Criteria;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;
use Adamkhoa03\EloquentRepository\Repository\Criteria\Criterion;

class EagerLoad implements Criterion
{
    /**
     * @var array
     */
    protected $relations;

    /**
     * EagerLoad constructor.
     *
     * @param mixed ...$relations
     */
    public function __construct(...$relations)
    {
        $this->relations = Arr::flatten($relations);
    }

    /**
     * @param Builder|mixed $model
     *
     * @return Builder|mixed
     */
    public function apply($model)
    {
        return $model->with($this->relations);
    }
}
