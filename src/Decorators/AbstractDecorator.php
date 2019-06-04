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

namespace Artisanry\Eloquent\Repositories\Decorators;

use Artisanry\Eloquent\Repositories\Contracts\Repository;

abstract class AbstractDecorator
{
    /**
     * @var Repository
     */
    protected $repository;

    /**
     * AbstractDecorator constructor.
     *
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
}
