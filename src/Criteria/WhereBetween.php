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
 * Class WhereBetween.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class WhereBetween extends Criterion
{
    /**
     * @var
     */
    private $column;

    /**
     * @var array
     */
    private $values;

    /**
     * WhereBetween constructor.
     *
     * @param $column
     * @param array $values
     */
    public function __construct($column, array $values)
    {
        $this->column = $column;
        $this->values = $values;
    }

    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->whereBetween($this->column, $this->values);
    }
}
