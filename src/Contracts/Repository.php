<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Contracts;

/**
 * Interface Repository.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface Repository
{
    /**
     * @param $model
     *
     * @return mixed
     */
    public function setModel($model);

    /**
     * @return mixed
     */
    public function getModel();

    /**
     * @return mixed
     */
    public function makeModel();
}
