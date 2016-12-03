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

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

use Illuminate\Database\Eloquent\Model;

trait FindTrait
{
    /**
     * @param $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find($id, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['id', $id, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->find($id, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $column
     * @param $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findBy($column, $value, $columns = ['*'])
    {
        $key = $this->buildCacheKey([$column, $value, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findBy($column, $value, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $column
     * @param $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findManyBy($column, $value, $columns = ['*'])
    {
        $key = $this->buildCacheKey([$column, $value, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findManyBy($column, $value, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $where
     * @param array $columns
     * @param bool  $or
     *
     * @return mixed
     */
    public function findWhere($where, $columns = ['*'], $or = false)
    {
        $key = $this->buildCacheKey([$where, $columns, $or]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findWhere($where, $columns = ['*'], $or);

        return $this->put($key, $records);
    }

    /**
     * @param $column
     * @param array  $values
     * @param string $boolean
     * @param bool   $not
     *
     * @return mixed
     */
    public function findWhereBetween($column, array $values, $boolean = 'and', $not = false)
    {
        $key = $this->buildCacheKey([$column, $values, $boolean, $not]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findWhereBetween($column, $values, $boolean, $not);

        return $this->put($key, $records);
    }

    /**
     * @param $column
     * @param $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findFirstBy($column, $value, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['findFirstBy', $column, $value, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFirstBy($column, $value, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $column
     * @param $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findLastBy($column, $value, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['findLastBy', $column, $value, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findLastBy($column, $value, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function findNext(Model $model)
    {
        $key = $this->buildCacheKey(['findNext', $model->toArray()]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findNext($records);

        return $this->put($key, $records);
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function findPrevious(Model $model)
    {
        $key = $this->buildCacheKey(['findPrevious', $model->toArray()]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findPrevious($records);

        return $this->put($key, $records);
    }

    /**
     * @param int   $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function findRecentlyCreated($perPage = 10, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['findRecentlyCreated', $perPage, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findRecentlyCreated($perPage, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param int   $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function findRecentlyUpdated($perPage = 10, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['findRecentlyUpdated', $perPage, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findRecentlyUpdated($perPage, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param int   $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function findRecentlyDeleted($perPage = 10, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['findRecentlyDeleted', $perPage, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findRecentlyDeleted($perPage, $columns);

        return $this->put($key, $records);
    }
}
