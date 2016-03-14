<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Decorators\Cache;

use DraperStudio\Eloquent\Repositories\Contracts\Decorators\Cache;
use DraperStudio\Eloquent\Repositories\Contracts\Repository;

/**
 * Class AbstractCacheDecorator.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class AbstractCacheDecorator
{
    /**
     * @var Cache
     */
    protected $cache;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * @var bool
     */
    protected $skipCache = false;

    /**
     * AbstractCacheDecorator constructor.
     *
     * @param Repository $repository
     * @param Cache      $cache
     */
    public function __construct(Repository $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }

    /**
     * @return $this
     */
    public function skipCache()
    {
        $this->skipCache = true;

        return $this;
    }

    /**
     * @param $key
     *
     * @return bool
     */
    protected function getFromCache($key)
    {
        if ($this->skipCache) {
            return false;
        }

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        return false;
    }

    /**
     * @param array $values
     *
     * @return string
     */
    protected function buildCacheKey(array $values)
    {
        if ($criteria = $this->repository->getCriteria()) {
            $values[] = serialize($criteria->toArray());
        }

        $value = implode('.', array_map(function ($item) {
            return is_array($item) ? implode('.', $item) : $item;
        }, $values));

        return md5($value);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    protected function put($key, $value)
    {
        $this->cache->put($key, $value);

        return $value;
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->repository, $name], $arguments);
    }
}
