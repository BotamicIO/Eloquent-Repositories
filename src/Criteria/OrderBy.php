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
 * Class OrderBy.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class OrderBy extends Criterion
{
    /**
     * @var
     */
    private $column;

    /**
     * @var string
     */
    private $direction;

    /**
     * OrderBy constructor.
     *
     * @param $column
     * @param string $direction
     */
    public function __construct($column, $direction = 'asc')
    {
        $this->column = $column;
        $this->direction = $direction;
    }

    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->orderBy($this->column, $this->direction);
    }
}
