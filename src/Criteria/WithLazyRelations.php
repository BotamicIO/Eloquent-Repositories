<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Criteria;

use BrianFaust\Eloquent\Repositories\Contracts\Repository;
use Illuminate\Database\Eloquent\Model;

class WithLazyRelations extends Criterion
{
    /**
     * @var
     */
    private $relations;

    /**
     * WithLazyRelations constructor.
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
     * @return $this
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->load($this->relations);
    }
}
