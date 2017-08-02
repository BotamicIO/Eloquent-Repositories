<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

trait BuilderTrait
{
    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function getNew(array $attributes = [])
    {
        return $this->repository->getNew($attributes);
    }

    /**
     * @param $relations
     *
     * @return mixed
     */
    public function with($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        return $this->repository->with($relations);
    }

    /**
     * @param $relations
     *
     * @return mixed
     */
    public function withLazy($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        return $this->repository->withLazy($relations);
    }
}
