<?php



declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Traits;

use BrianFaust\Eloquent\Repositories\Criteria\OrderBy;

trait GetterTrait
{
    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function getFirst($columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->first($columns);

        $this->makeModel();

        return $model;
    }

    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function getLast($columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->orderBy('created_at', 'desc')->first($columns);

        $this->makeModel();

        return $model;
    }
}
