<?php

namespace BrianFaust\Eloquent\Repositories\Traits;

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
