<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories;

use DraperStudio\Eloquent\Repositories\Contracts\Traits\AggregateTrait as AggregateContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\BuilderTrait as BuilderContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\CollectionTrait as CollectionContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\CriteriaTrait as CriteriaContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\CrudlTrait as CrudlContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\ExceptionTrait as ExceptionContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\FindTrait as FindContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\GetterTrait as GetterContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\RelationshipTrait as RelationshipContract;
use DraperStudio\Eloquent\Repositories\Contracts\Traits\RequireTrait as RequireContract;
use DraperStudio\Eloquent\Repositories\Traits\AggregateTrait;
use DraperStudio\Eloquent\Repositories\Traits\BuilderTrait;
use DraperStudio\Eloquent\Repositories\Traits\CollectionTrait;
use DraperStudio\Eloquent\Repositories\Traits\CriteriaTrait;
use DraperStudio\Eloquent\Repositories\Traits\CrudlTrait;
use DraperStudio\Eloquent\Repositories\Traits\ExceptionTrait;
use DraperStudio\Eloquent\Repositories\Traits\FindTrait;
use DraperStudio\Eloquent\Repositories\Traits\GetterTrait;
use DraperStudio\Eloquent\Repositories\Traits\RelationshipTrait;
use DraperStudio\Eloquent\Repositories\Traits\RequireTrait;
use Illuminate\Container\Container;
use Illuminate\Support\Collection;

/**
 * Class BaseRepository.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class BaseRepository extends AbstractRepository implements
                                                           AggregateContract,
                                                           BuilderContract,
                                                           CollectionContract,
                                                           CriteriaContract,
                                                           CrudlContract,
                                                           ExceptionContract,
                                                           FindContract,
                                                           GetterContract,
                                                           RelationshipContract,
                                                           RequireContract
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

    /**
     *
     */
    public function getModelClass()
    {
        //
    }
}
