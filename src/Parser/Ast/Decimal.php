<?php

namespace GoInterpreter\Parser\Ast;

class Decimal extends Node
{
    /**
     * @var string
     */
    public $decimal;

    /**
     * @param string $decimal
     */
    public function __construct(string $decimal)
    {
        $this->decimal = $decimal;
    }
}
