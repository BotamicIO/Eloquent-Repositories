<?php

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
