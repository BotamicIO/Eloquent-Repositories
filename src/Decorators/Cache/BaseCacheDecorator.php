<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Decorators\Cache;

use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\AggregateTrait;
use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\BuilderTrait;
use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\CollectionTrait;
use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\CriteriaTrait;
use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\CrudlTrait;
use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\ExceptionTrait;
use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\FindTrait;
use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\RelationshipTrait;
use DraperStudio\Eloquent\Repositories\Traits\Decorators\Cache\RequireTrait;

/**
 * Class BaseCacheDecorator.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
