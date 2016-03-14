<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache;

/**
 * Class SlugTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait SlugTrait
{
    /**
     * @param $slug
     * @param array $columns
     *
     * @return mixed
     */
    public function findBySlug($slug, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['slug', $slug]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findBySlug($slug, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $slug
     * @param array $columns
     *
     * @return mixed
     */
    public function requireBySlug($slug, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['slug', $slug]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireBySlug($slug, $columns);

        return $this->put($key, $records);
    }

    /**
     * @param $slug
     * @param array $data
     *
     * @return mixed
     */
    public function updateBySlug($slug, array $data)
    {
        $key = $this->buildCacheKey(['slug', $slug]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->updateBySlug($slug, $data);

        return $this->put($key, $records);
    }

    /**
     * @param $slug
     *
     * @return mixed
     */
    public function deleteBySlug($slug)
    {
        $key = $this->buildCacheKey(['slug', $slug]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->deleteBySlug($slug);

        return $this->put($key, $records);
    }
}
