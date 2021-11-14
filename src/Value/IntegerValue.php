<?php

namespace GoInterpreter\Value;

class IntegerValue
{
    /**
     * @var float|int
     */
    public $value;

    /**
     * @param float|int $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}
