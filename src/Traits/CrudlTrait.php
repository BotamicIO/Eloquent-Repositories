<?php

declare(strict_types=1);

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits;

use BrianFaust\Eloquent\Repositories\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\Model;

trait CrudlTrait
{
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function saveModel(array $data)
    {
        foreach ($data as $key => $value) {
            $this->getModel()->$key = $value;
        }

        $model = $this->getModel()->save();

        $this->makeModel();

        return $model;
    }

    /**
     * @param $id
     * @param array  $data
     * @param string $column
     *
     * @throws RepositoryException
     *
     * @return Model
     */
    public function update($id, array $data, $column = 'id')
    {
        $model = $this->requireBy($column, $id);

        return $this->updateModel($model, $data);
    }

    /**
     * @param $id
     * @param array  $data
     * @param string $column
     *
     * @throws RepositoryException
     *
     * @return mixed
     */
    public function updateFill($id, array $data, $column = 'id')
    {
        $model = $this->requireBy($column, $id);

        if (!$model = $model->fill($data)->save()) {
            throw new RepositoryException('Could not be saved');
        }

        $this->makeModel();

        return $model;
    }

    /**
     * @param Model $model
     * @param array $data
     *
     * @throws RepositoryException
     *
     * @return Model
     */
    public function updateModel(Model $model, array $data)
    {
        if (!$model->update($data)) {
            throw new RepositoryException('Could not be saved');
        }

        $this->makeModel();

        return $model;
    }

    /**
     * @param $ids
     *
     * @return mixed
     */
    public function delete($ids)
    {
        return $this->getModel()->destroy($ids);
    }

    /**
     * @return mixed
     */
    public function truncate()
    {
        return $this->getModel()->delete();
    }

    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function firstOrCreate(array $attributes)
    {
        return $this->getModel()->firstOrCreate($attributes);
    }

    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function firstOrNew(array $attributes)
    {
        return $this->getModel()->firstOrNew($attributes);
    }

    /**
     * @param $relation
     * @param array $columns
     *
     * @return mixed
     */
    public function has($relation, $columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->has($relation)->get($columns);

        $this->makeModel();

        return $collection;
    }

    /**
     * @param Model $model
     * @param $relationship
     * @param array $attributes
     *
     * @return mixed
     */
    public function saveHasOneOrMany(Model $model, $relationship, array $attributes)
    {
        $relationshipModel = get_class($model->{$relationship}()->getModel());
        $relationshipModel = new $relationshipModel($attributes);

        return $model->{$relationship}()->save($relationshipModel);
    }
}
