<?php

declare(strict_types=1);

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits;

use BrianFaust\Eloquent\Repositories\Exceptions\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;

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
