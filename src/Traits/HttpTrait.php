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

use DraperStudio\Eloquent\Repositories\Exceptions\ValidationException;
use Illuminate\Contracts\Validation\Validator;

/**
 * Class HttpTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait HttpTrait
{
    /**
     * @param $id
     * @param array $data
     *
     * @return mixed
     *
     * @throws ValidationException
     */
    public function get($id, array $data)
    {
        $this->validate($data, $this->getModel()->readValidationRules());

        return $this->findById($id);
    }

    /**
     * @param array $data
     *
     * @return mixed
     *
     * @throws ValidationException
     */
    public function post(array $data)
    {
        $this->validate($data, $this->getModel()->createValidationRules());

        return $this->create($data);
    }

    /**
     * @param $id
     * @param array $data
     *
     * @return mixed
     *
     * @throws ValidationException
     */
    public function put($id, array $data)
    {
        $this->validate($data, $this->getModel()->updateValidationRules());

        return $this->update($id, $data);
    }

    /**
     * @param $id
     * @param array $data
     *
     * @return mixed
     *
     * @throws ValidationException
     */
    public function destroy($id, array $data)
    {
        $this->validate($data, $this->getModel()->deleteValidationRules());

        return $this->delete($id);
    }

    /**
     * @param $id
     * @param array $data
     *
     * @return mixed
     *
     * @throws ValidationException
     */
    public function patch($id, array $data)
    {
        $this->validate($data, $this->getModel()->updatePartialValidationRules());

        return $this->update($id, $data);
    }

    /**
     * @param array $data
     * @param array $rules
     *
     * @throws ValidationException
     */
    protected function validate(array $data, array $rules)
    {
        $validation = app('validator')->make($data, $rules);

        if ($validation->fails()) {
            throw new ValidationException(
                $validation->messages()->getMessages(), 'Validation failed'
            );
        }
    }
}
