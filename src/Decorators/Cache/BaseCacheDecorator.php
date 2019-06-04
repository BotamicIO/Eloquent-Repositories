<?php

declare(strict_types=1);

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Eloquent\Repositories\Decorators\Cache;

use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\AggregateTrait;
use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\BuilderTrait;
use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\CollectionTrait;
use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\CriteriaTrait;
use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\CrudlTrait;
use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\ExceptionTrait;
use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\FindTrait;
use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\RelationshipTrait;
use Artisanry\Eloquent\Repositories\Traits\Decorators\Cache\RequireTrait;

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
