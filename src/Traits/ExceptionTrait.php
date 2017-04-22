<?php



declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Traits;

use BrianFaust\Eloquent\Repositories\Exceptions\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;

trait ExceptionTrait
{
    /**
     * @param Model $model
     */
    public function modelNotFound(Model $model)
    {
        throw (new ModelNotFoundException())->setModel(get_class($model));
    }
}
