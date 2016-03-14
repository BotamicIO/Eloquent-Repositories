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

use DraperStudio\Eloquent\Repositories\Exceptions\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExceptionTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
