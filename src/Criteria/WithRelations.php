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

namespace Artisanry\Eloquent\Repositories\Criteria;

use Artisanry\Eloquent\Repositories\Contracts\Repository;
use Illuminate\Database\Eloquent\Model;

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
