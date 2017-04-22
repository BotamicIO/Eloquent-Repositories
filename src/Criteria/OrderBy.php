<?php



declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Criteria;

use BrianFaust\Eloquent\Repositories\Contracts\Repository;
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
