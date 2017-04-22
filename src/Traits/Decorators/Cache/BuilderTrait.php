<?php



declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

trait BuilderTrait
{
    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function getNew(array $attributes = [])
    {
        return $this->repository->getNew($attributes);
    }

    /**
     * @param $relations
     *
     * @return mixed
     */
    public function with($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        return $this->repository->with($relations);
    }

    /**
     * @param $relations
     *
     * @return mixed
     */
    public function withLazy($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        return $this->repository->withLazy($relations);
    }
}
