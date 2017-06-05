<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories;

use BrianFaust\Eloquent\Repositories\Traits\AggregateTrait;
use BrianFaust\Eloquent\Repositories\Traits\BuilderTrait;
use BrianFaust\Eloquent\Repositories\Traits\CollectionTrait;
use BrianFaust\Eloquent\Repositories\Traits\CriteriaTrait;
use BrianFaust\Eloquent\Repositories\Traits\CrudlTrait;
use BrianFaust\Eloquent\Repositories\Traits\ExceptionTrait;
use BrianFaust\Eloquent\Repositories\Traits\FindTrait;
use BrianFaust\Eloquent\Repositories\Traits\GetterTrait;
use BrianFaust\Eloquent\Repositories\Traits\RelationshipTrait;
use BrianFaust\Eloquent\Repositories\Traits\RequireTrait;
use Illuminate\Container\Container;
use Illuminate\Support\Collection;

class BaseRepository extends AbstractRepository
{
    use AggregateTrait;
    use BuilderTrait;
    use CollectionTrait;
    use CriteriaTrait;
    use CrudlTrait;
    use ExceptionTrait;
    use FindTrait;
    use GetterTrait;
    use RelationshipTrait;
    use RequireTrait;

    /**
     * BaseRepository constructor.
     *
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        $this->criteria = new Collection();
        $this->resetScope();

        parent::__construct($app);
    }

    public function getModelClass()
    {
    }
}
