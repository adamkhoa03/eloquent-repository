<?php

namespace Adamkhoa03\EloquentRepository\Repository\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Adamkhoa03\EloquentRepository\Repository\Contracts\Cacheable;

/**
 * @method Builder|Model find($modelId)
 * @method void invalidateCache($model)
 * @mixin \Adamkhoa03\EloquentRepository\EloquentRepository
 */
trait UpdatesEntity
{
    /**
     * Finds a model with ID and updates it with given properties.
     *
     * @param int|string $modelId
     * @param mixed $properties
     *
     * @return Builder|Model
     */
    public function findAndUpdate($modelId, $properties)
    {
        $model = $this->find($modelId);

        return $this->update($model, $properties);
    }

    /**
     * Updates a model given properties.
     *
     * @param Model $model
     * @param mixed $properties
     *
     * @return Builder|Model
     */
    public function update($model, $properties)
    {
        if ($this instanceof Cacheable) {
            $this->invalidateCache($model);
        }

        $model->fill($properties)->save();

        return $model->refresh();
    }
}
