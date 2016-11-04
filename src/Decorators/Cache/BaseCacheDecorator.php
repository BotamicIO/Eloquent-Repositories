<?php

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
