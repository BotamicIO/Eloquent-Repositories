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

namespace BrianFaust\Eloquent\Repositories\Traits;

use BrianFaust\Eloquent\Repositories\Criteria\WithLazyRelations;
use BrianFaust\Eloquent\Repositories\Criteria\WithRelations;

trait BuilderTrait
{
    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function getNew(array $attributes = [])
    {
        return $this->getModel()->newInstance($attributes);
    }

    /**
     * @param $relations
     *
     * @return $this
     */
    public function with($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        $this->pushCriteria(new WithRelations($relations));

        return $this;
    }

    /**
     * @param $relations
     *
     * @return $this
     */
    public function withLazy($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        $this->pushCriteria(new WithLazyRelations($relations));

        return $this;
    }
}
