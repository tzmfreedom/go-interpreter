<?php

namespace GoInterpreter\Parser\Ast;

class MethodCall extends Node
{
    /**
     * @var Arguments
     */
    public $arguments;

    /**
     * @var Node
     */
    public $expr;

    /**
     * @param Node $expr
     * @param Arguments $arguments
     */
    public function __construct(Node $expr, Arguments $arguments)
    {
        $this->expr = $expr;
        $this->arguments = $arguments;
    }
}
