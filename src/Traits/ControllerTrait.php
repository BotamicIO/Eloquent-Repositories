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
 * Class ControllerTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait ControllerTrait
{
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->getModel()->all();
    }

    /**
     * @param array $input
     *
     * @return mixed
     */
    public function store(array $input)
    {
        return $this->getModel()->create($input);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return $this->getModel()->find($id);
    }

    /**
     * @param $id
     * @param array $input
     *
     * @return mixed
     */
    public function update($id, array $input)
    {
        return $this->getModel()->update($id, $input);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->getModel()->destroy($id);
    }
}
