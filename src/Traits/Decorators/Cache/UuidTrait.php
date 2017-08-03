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

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

trait UuidTrait
{
    /**
     * @param $uuid
     * @param array $columns
     *
     * @return mixed
     */
    public function findByUuid($uuid, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['uuid', $uuid]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findByUuid($uuid, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $uuid
     * @param array $columns
     *
     * @return mixed
     */
    public function requireByUuid($uuid, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['uuid', $uuid]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireByUuid($uuid, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $uuid
     * @param array $data
     *
     * @return mixed
     */
    public function updateByUuid($uuid, array $data)
    {
        $key = $this->buildCacheKey(['uuid', $uuid]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->updateByUuid($uuid, $data);

        return $this->put($key, $records);
    }

    /**
     * @param $uuid
     *
     * @return mixed
     */
    public function deleteByUuid($uuid)
    {
        $key = $this->buildCacheKey(['uuid', $uuid]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->deleteByUuid($uuid);

        return $this->put($key, $records);
    }
}
