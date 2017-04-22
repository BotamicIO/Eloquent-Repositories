<?php



declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

use Illuminate\Database\Eloquent\Model;

trait ExceptionTrait
{
    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function modelNotFound(Model $model)
    {
        return $this->repository->modelNotFound($model);
    }
}
