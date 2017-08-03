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

namespace BrianFaust\Eloquent\Repositories\Decorators;

use BrianFaust\Eloquent\Repositories\Contracts\Repository;

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
