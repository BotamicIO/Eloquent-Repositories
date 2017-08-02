<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Criteria;

use Illuminate\Database\Eloquent\Model;
use BrianFaust\Eloquent\Repositories\Contracts\Repository;

class WithRelations extends Criterion
{
    /**
     * @var
     */
    private $relations;

    /**
     * WithRelations constructor.
     *
     * @param $relations
     */
    public function __construct($relations)
    {
        $this->relations = $relations;
    }

    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->with($this->relations);
    }
}
