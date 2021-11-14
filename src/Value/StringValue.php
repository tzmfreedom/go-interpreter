<?php

namespace GoInterpreter\Value;

class StringValue
{
    /**
     * @var string
     */
    public $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
