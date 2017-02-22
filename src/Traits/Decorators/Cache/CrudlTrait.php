<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

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
        $records = $this->repository->create($data);

        $key = $this->buildCacheKey(['id', $records->id]);

        return $this->put($key, $records);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function saveModel(array $data)
    {
        $key = $this->buildCacheKey();

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->saveModel($data);

        $key = $this->buildCacheKey($records->id);

        return $this->put($key, $records);
    }

    /**
     * @param $id
     * @param array  $data
     * @param string $column
     *
     * @return mixed
     */
    public function update($id, array $data, $column = 'id')
    {
        $key = $this->buildCacheKey([$column, $id]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->update($id, $data, $column);

        $key = $this->buildCacheKey([$column, $id]);

        return $this->put($key, $records);
    }

    /**
     * @param $id
     * @param array $data
     *
     * @return mixed
     */
    public function updateFill($id, array $data)
    {
        $key = $this->buildCacheKey(['id', $id]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->updateFill($id, $data);

        $key = $this->buildCacheKey(['id', $records->id]);

        return $this->put($key, $records);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        $key = $this->buildCacheKey(['id', $id]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        return $this->repository->delete($id);
    }

    /**
     * @return mixed
     */
    public function truncate()
    {
        return $this->repository->truncate();
    }

    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function firstOrCreate(array $attributes)
    {
        $records = $this->repository->firstOrCreate($attributes);

        $key = $this->buildCacheKey(['id', $records->id]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        return $this->put($key, $records);
    }

    /**
     * @param $relation
     * @param array $columns
     *
     * @return mixed
     */
    public function has($relation, $columns = ['*'])
    {
        return $this->repository->has($relation, $columns);
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
        $records = $this->repository->saveHasOneOrMany($model, $relationship, $attributes);

        $key = $this->buildCacheKey(['saveHasOneOrMany', $records->id]);

        return $this->put($key, $records);
    }
}
