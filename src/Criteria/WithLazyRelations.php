<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Criteria;

use DraperStudio\Eloquent\Repositories\Contracts\Repository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WithLazyRelations.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
