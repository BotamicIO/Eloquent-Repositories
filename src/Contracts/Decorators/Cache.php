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

namespace BrianFaust\Eloquent\Repositories\Contracts\Decorators;

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
