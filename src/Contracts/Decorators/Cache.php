<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Contracts\Decorators;

/**
 * Interface Cache.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface Cache
{
    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * @param $key
     * @param $value
     * @param null $minutes
     *
     * @return mixed
     */
    public function put($key, $value, $minutes = null);

    /**
     * @param $key
     *
     * @return mixed
     */
    public function has($key);

    /**
     * @param $key
     * @param int $value
     *
     * @return mixed
     */
    public function increment($key, $value = 1);

    /**
     * @param $key
     * @param int $value
     *
     * @return mixed
     */
    public function decrement($key, $value = 1);

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function forever($key, $value);

    /**
     * @param $key
     *
     * @return mixed
     */
    public function forget($key);

    /**
     * @return mixed
     */
    public function flush();

    /**
     * @return mixed
     */
    public function cacheTags();
}
