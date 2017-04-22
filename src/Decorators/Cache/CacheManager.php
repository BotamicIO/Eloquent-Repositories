<?php



declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Decorators\Cache;

use BrianFaust\Eloquent\Repositories\Contracts\Decorators\Cache;
use Illuminate\Cache\CacheManager as IlluminateCacheManager;

class CacheManager implements Cache
{
    /**
     * @var IlluminateCacheManager
     */
    protected $cache;

    /**
     * @var
     */
    protected $tag;

    /**
     * @var int
     */
    protected $minutes;

    /**
     * CacheManager constructor.
     *
     * @param IlluminateCacheManager $cache
     * @param $tag
     * @param int $minutes
     */
    public function __construct(IlluminateCacheManager $cache, $tag, $minutes = 60)
    {
        $this->cache = $cache;
        $this->tag = $tag;
        $this->minutes = $minutes;
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key)
    {
        return $this->cacheTags()->get($key);
    }

    /**
     * @param $key
     * @param $value
     * @param null $minutes
     *
     * @return mixed
     */
    public function put($key, $value, $minutes = null)
    {
        return $this->cacheTags()->put($key, $value, $minutes ?: $this->minutes);
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function has($key)
    {
        return $this->cacheTags()->has($key);
    }

    /**
     * @param $key
     * @param int $value
     *
     * @return mixed
     */
    public function increment($key, $value = 1)
    {
        return $this->cacheTags()->increment($key, $value);
    }

    /**
     * @param $key
     * @param int $value
     *
     * @return mixed
     */
    public function decrement($key, $value = 1)
    {
        return $this->cacheTags()->decrement($key, $value);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function forever($key, $value)
    {
        return $this->cacheTags()->forever($key, $value);
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function forget($key)
    {
        return $this->cacheTags()->forget($key);
    }

    /**
     * @return mixed
     */
    public function flush()
    {
        return $this->cacheTags()->flush();
    }

    /**
     * @return mixed
     */
    public function cacheTags()
    {
        return $this->cache->tags($this->tag);
    }
}
