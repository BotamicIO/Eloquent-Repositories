<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits;

trait UuidTrait
{
    /**
     * @param $uuid
     * @param array $columns
     *
     * @return mixed
     */
    public function findByUuid($uuid, $columns = ['*'])
    {
        return $this->findFirstBy('uuid', $uuid, $columns);
    }

    /**
     * @param $uuid
     * @param array $columns
     *
     * @return mixed
     */
    public function requireByUuid($uuid, $columns = ['*'])
    {
        if (!$record = $this->findByUuid($uuid, $columns)) {
            $this->modelNotFound($this->model);
        }

        return $record;
    }

    /**
     * @param $uuid
     * @param array $data
     *
     * @return mixed
     */
    public function updateByUuid($uuid, array $data)
    {
        $model = $this->requireByUuid($uuid);

        return $this->updateModel($model, $data);
    }

    /**
     * @param $uuid
     *
     * @return mixed
     */
    public function deleteByUuid($uuid)
    {
        return $this->findByUuid($uuid)->delete();
    }
}
