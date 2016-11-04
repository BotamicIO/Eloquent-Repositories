<?php

namespace BrianFaust\Eloquent\Repositories\Contracts;

interface Repository
{
    /**
     * @param $model
     *
     * @return mixed
     */
    public function setModel($model);

    /**
     * @return mixed
     */
    public function getModel();

    /**
     * @return mixed
     */
    public function makeModel();
}
