<?php

namespace GoInterpreter\Parser\Ast;

use GoInterpreter\Interpreter;

abstract class Node
{
    public function accept(Interpreter $visitor)
    {
        return $visitor->visit($this);
    }
}
