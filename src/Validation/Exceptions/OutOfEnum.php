<?php

namespace Runn\Validation\Exceptions;

use Runn\Validation\ValidationError;

/**
 * "Value is out of enumeration" validation error
 *
 * Class OutOfEnum
 * @package Runn\Validation\Exceptions
 */
class OutOfEnum
    extends ValidationError
{

    /**
     * @var array
     */
    protected $values = [];

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param array $values
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }

}