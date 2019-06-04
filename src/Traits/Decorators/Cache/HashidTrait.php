<?php

declare(strict_types=1);

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Eloquent\Repositories\Traits\Decorators\Cache;

trait HashidTrait
{
    /**
     * @param $hashid
     * @param array $columns
     *
     * @return mixed
     */
    public function findByHashid($hashid, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['hashid', $hashid]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findByHashid($hashid, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $hashid
     * @param array $columns
     *
     * @return mixed
     */
    public function requireByHashid($hashid, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['hashid', $hashid]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireByHashid($hashid, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $hashid
     * @param array $data
     *
     * @return mixed
     */
    public function updateByHashid($hashid, array $data)
    {
        $key = $this->buildCacheKey(['hashid', $hashid]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->updateByHashid($hashid, $data);

        return $this->put($key, $records);
    }

    /**
     * @param $hashid
     *
     * @return mixed
     */
    public function deleteByHashid($hashid)
    {
        $key = $this->buildCacheKey(['hashid', $hashid]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->deleteByHashid($hashid);

        return $this->put($key, $records);
    }
}
