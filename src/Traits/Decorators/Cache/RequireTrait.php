<?php

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

trait RequireTrait
{
    /**
     * @param $column
     * @param $value
     * @param array $columns
     *
     * @return mixed
     */
    public function requireBy($column, $value, $columns = ['*'])
    {
        $key = $this->buildCacheKey([$column, $value, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireBy($column, $value, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $id
     * @param array $columns
     *
     * @return mixed
     */
    public function requireById($id, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['id', $id, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireById($id, $columns);

        return $this->put($key, $records);
    }
}
