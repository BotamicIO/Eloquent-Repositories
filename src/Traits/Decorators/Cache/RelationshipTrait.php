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

use Illuminate\Database\Eloquent\Model;

trait RelationshipTrait
{
    /**
     * @param Model $model
     * @param $relation
     *
     * @return mixed
     */
    public function getRelation(Model $model, $relation)
    {
        $key = $this->buildCacheKey(['getRelation', $model->id, get_class($model), $relation]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->getRelation($model, $relation);

        return $this->put($key, $records);
    }
}
