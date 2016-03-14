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

use DraperStudio\Eloquent\Repositories\Criteria\OrderBy;

/**
 * Class GetterTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
