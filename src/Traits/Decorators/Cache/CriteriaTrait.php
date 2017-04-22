<?php



declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

use BrianFaust\Eloquent\Repositories\Criteria\Criterion;

trait CriteriaTrait
{
    /**
     * @return mixed
     */
    public function resetScope()
    {
        return $this->repository->resetScope();
    }

    /**
     * @param bool $status
     *
     * @return mixed
     */
    public function skipCriteria($status = true)
    {
        return $this->repository->skipCriteria($status);
    }

    /**
     * @return mixed
     */
    public function getCriteria()
    {
        return $this->repository->getCriteria();
    }

    /**
     * @param Criterion $criterion
     *
     * @return mixed
     */
    public function getByCriteria(Criterion $criterion)
    {
        return $this->repository->getByCriteria($criterion);
    }

    /**
     * @param Criterion $criterion
     *
     * @return mixed
     */
    public function pushCriteria(Criterion $criterion)
    {
        return $this->repository->pushCriteria($criterion);
    }

    /**
     * @return mixed
     */
    public function applyCriteria()
    {
        return $this->repository->applyCriteria();
    }
}
