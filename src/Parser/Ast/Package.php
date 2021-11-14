<?php

namespace GoInterpreter\Parser\Ast;

class Package extends Node
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
