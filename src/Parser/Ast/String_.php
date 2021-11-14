<?php

namespace GoInterpreter\Parser\Ast;

class String_ extends Node {
    /**
     * @var string
     */
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}
