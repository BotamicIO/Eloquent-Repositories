<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Decorators;

use DraperStudio\Eloquent\Repositories\Contracts\Repository;

/**
 * Class AbstractDecorator.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
