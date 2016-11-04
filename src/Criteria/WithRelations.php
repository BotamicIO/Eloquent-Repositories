<?php

namespace BrianFaust\Eloquent\Repositories\Criteria;

use BrianFaust\Eloquent\Repositories\Contracts\Repository;
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
