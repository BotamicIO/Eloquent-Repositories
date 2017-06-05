<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits;

trait HashidTrait
{
    /**
     * @param $hashid
     * @param array $columns
     *
     * @return mixed
     */
    public function findByHashid($hashid, $columns = ['*'])
    {
        return $this->findFirstBy('hashid', $hashid, $columns);
    }

    /**
     * @param $hashid
     * @param array $columns
     *
     * @return mixed
     */
    public function requireByHashid($hashid, $columns = ['*'])
    {
        if (!$record = $this->findByHashid($hashid, $columns)) {
            $this->modelNotFound($this->model);
        }

        return $record;
    }

    /**
     * @param $hashid
     * @param array $data
     *
     * @return mixed
     */
    public function updateByHashid($hashid, array $data)
    {
        $model = $this->requireByHashid($hashid);

        return $this->updateModel($model, $data);
    }

    /**
     * @param $hashid
     *
     * @return mixed
     */
    public function deleteByHashid($hashid)
    {
        return $this->findByHashid($hashid)->delete();
    }
}
