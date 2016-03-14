<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Traits;

/**
 * Class CollectionTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait CollectionTrait
{
    /**
     * @param $value
     * @param null $key
     *
     * @return mixed
     */
    public function lists($value, $key = null)
    {
        return $this->getModel()->lists($value, $key);
    }

    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function all($columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->get($columns);

        $this->makeModel();

        return $collection;
    }

    /**
     * @param int   $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function paginate($perPage = 10, $columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->paginate($perPage, $columns);

        $this->makeModel();

        return $collection;
    }

    /**
     * @param int   $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function simplePaginate($perPage = 10, $columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->simplePaginate($perPage, $columns);

        $this->makeModel();

        return $collection;
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function listBy($key, $value)
    {
        return $this->get([
            $key, explode('.', $value)[0],
        ])->keyBy($key)->map(function ($item, $key) use ($value) {
            return array_get($item->toArray(), $value);
        });
    }
}
