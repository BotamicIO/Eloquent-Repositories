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

namespace BrianFaust\Eloquent\Repositories\Criteria;

use BrianFaust\Eloquent\Repositories\Contracts\Repository;
use Illuminate\Database\Eloquent\Model;

class Having extends Criterion
{
    /**
     * @var
     */
    private $column;

    /**
     * @var null
     */
    private $operator;

    /**
     * @var null
     */
    private $value;

    /**
     * @var string
     */
    private $boolean;

    /**
     * Having constructor.
     *
     * @param $column
     * @param null   $operator
     * @param null   $value
     * @param string $boolean
     */
    public function __construct($column, $operator = null, $value = null, $boolean = 'and')
    {
        $this->column = $column;
        $this->operator = $operator;
        $this->value = $value;
        $this->boolean = $boolean;
    }

    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->having($this->column, $this->operator, $this->value, $this->boolean);
    }
}
