<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Criteria;

use DraperStudio\Eloquent\Repositories\Contracts\Repository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Criterion.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class Criterion
{
    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return mixed
     */
    abstract public function apply(Model $model, Repository $repository);
}
