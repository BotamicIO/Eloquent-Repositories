<?php



declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Criteria;

use BrianFaust\Eloquent\Repositories\Contracts\Repository;
use Illuminate\Database\Eloquent\Model;

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
