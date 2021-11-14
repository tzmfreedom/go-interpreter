<?php

namespace GoInterpreter\Parser\Ast;

class Integer extends Node
{
    /**
     * @var int
     */
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}
