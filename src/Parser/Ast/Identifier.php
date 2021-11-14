<?php

namespace GoInterpreter\Parser\Ast;

class Identifier extends Node
{
    public $child;
    /**
     * @var string
     */
    public $name;

    public function __construct(string $name, $child)
    {
        $this->name = $name;
        $this->child = $child;
    }
}
