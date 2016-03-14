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

/**
 * Class AggregateTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait AggregateTrait
{
    /**
     * @return mixed
     */
    public function count()
    {
        return $this->getModel()->count();
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function max($column)
    {
        return $this->getModel()->max($column);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function min($column)
    {
        return $this->getModel()->min($column);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function avg($column)
    {
        return $this->getModel()->avg($column);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function sum($column)
    {
        return $this->getModel()->sum($column);
    }
}
