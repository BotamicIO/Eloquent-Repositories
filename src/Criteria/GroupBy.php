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
 * Class GroupBy.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class GroupBy extends Criterion
{
    /**
     * @var
     */
    private $column;

    /**
     * GroupBy constructor.
     *
     * @param $column
     */
    public function __construct($column)
    {
        $this->column = $column;
    }

    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->groupBy($this->column);
    }
}
