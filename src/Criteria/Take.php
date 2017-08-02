<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Criteria;

use Illuminate\Database\Eloquent\Model;
use BrianFaust\Eloquent\Repositories\Contracts\Repository;

class Take extends Criterion
{
    /**
     * @var
     */
    private $value;

    /**
     * Take constructor.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->take($this->value);
    }
}
