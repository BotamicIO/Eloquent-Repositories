<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Repositories\Exceptions;

/**
 * Class ValidationException.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ValidationException extends \Exception
{
    /**
     * @var array
     */
    protected $errors;

    /**
     * ValidationException constructor.
     *
     * @param array          $errors
     * @param string         $message
     * @param int            $code
     * @param Exception|null $previous
     */
    public function __construct($errors = [], $message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->errors = $errors;
    }

    /**
     * @return array
     */
    public function errors()
    {
        return $this->errors;
    }
}
