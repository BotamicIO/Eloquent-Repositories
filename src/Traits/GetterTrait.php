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

namespace Artisanry\Eloquent\Repositories\Traits;

trait GetterTrait
{
    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function getFirst($columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->first($columns);

        $this->makeModel();

        return $model;
    }

    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function getLast($columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->orderBy('created_at', 'desc')->first($columns);

        $this->makeModel();

        return $model;
    }
}
