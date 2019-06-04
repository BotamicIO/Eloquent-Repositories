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

namespace Artisanry\Eloquent\Repositories;

use Artisanry\Eloquent\Repositories\Traits\AggregateTrait;
use Artisanry\Eloquent\Repositories\Traits\BuilderTrait;
use Artisanry\Eloquent\Repositories\Traits\CollectionTrait;
use Artisanry\Eloquent\Repositories\Traits\CriteriaTrait;
use Artisanry\Eloquent\Repositories\Traits\CrudlTrait;
use Artisanry\Eloquent\Repositories\Traits\ExceptionTrait;
use Artisanry\Eloquent\Repositories\Traits\FindTrait;
use Artisanry\Eloquent\Repositories\Traits\GetterTrait;
use Artisanry\Eloquent\Repositories\Traits\RelationshipTrait;
use Artisanry\Eloquent\Repositories\Traits\RequireTrait;
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
