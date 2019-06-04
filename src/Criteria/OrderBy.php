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
