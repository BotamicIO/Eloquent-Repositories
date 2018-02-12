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

namespace BrianFaust\Eloquent\Repositories\Decorators\Cache;

use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\AggregateTrait;
use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\BuilderTrait;
use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\CollectionTrait;
use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\CriteriaTrait;
use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\CrudlTrait;
use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\ExceptionTrait;
use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\FindTrait;
use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\RelationshipTrait;
use BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache\RequireTrait;

class BaseCacheDecorator extends AbstractCacheDecorator
{
    use AggregateTrait;
    use BuilderTrait;
    use CollectionTrait;
    use CriteriaTrait;
    use CrudlTrait;
    use ExceptionTrait;
    use FindTrait;
    use RelationshipTrait;
    use RequireTrait;
}
