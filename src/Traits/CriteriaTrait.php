<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Traits;

use DraperStudio\Eloquent\Repositories\Criteria\Criterion;

/**
 * Class CriteriaTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait CriteriaTrait
{
    /**
     * @var
     */
    protected $criteria;

    /**
     * @var bool
     */
    protected $skipCriteria = false;

    /**
     * @return $this
     */
    public function resetScope()
    {
        $this->skipCriteria(false);

        return $this;
    }

    /**
     * @param bool $status
     *
     * @return $this
     */
    public function skipCriteria($status = true)
    {
        $this->skipCriteria = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param Criterion $criterion
     *
     * @return $this
     */
    public function getByCriteria(Criterion $criterion)
    {
        $model = $criterion->apply($this->getModel(), $this);

        $this->setModel($model);

        return $this;
    }

    /**
     * @param Criterion $criterion
     *
     * @return $this
     */
    public function pushCriteria(Criterion $criterion)
    {
        $this->criteria->push($criterion);

        return $this;
    }

    /**
     * @return $this
     */
    public function applyCriteria()
    {
        if ($this->skipCriteria === true) {
            return $this;
        }

        foreach ($this->getCriteria() as $criterion) {
            if ($criterion instanceof Criterion) {
                $model = $criterion->apply($this->getModel(), $this);

                $this->setModel($model);
            }
        }

        $this->setModel($this->getModel());

        return $this;
    }
}
