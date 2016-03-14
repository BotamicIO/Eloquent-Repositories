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
 * Class RequireTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait RequireTrait
{
    /**
     * @param $column
     * @param $value
     * @param array $columns
     *
     * @return mixed
     */
    public function requireBy($column, $value, $columns = ['*'])
    {
        if (!$record = $this->findFirstBy($column, $value, $columns)) {
            $this->modelNotFound($this->getModel());
        }

        return $record;
    }

    /**
     * @param $id
     * @param array $columns
     *
     * @return mixed
     */
    public function requireById($id, $columns = ['*'])
    {
        return $this->requireBy('id', $id, $columns);
    }
}
