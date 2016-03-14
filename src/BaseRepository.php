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
        //
    }
}
