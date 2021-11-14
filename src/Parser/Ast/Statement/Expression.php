<?php

namespace GoInterpreter\Parser\Ast\Statement;

use GoInterpreter\Parser\Ast\Node;

class Expression extends Statement
{
    public $expression;

    public function __construct(Node $expression)
    {
        $this->expression = $expression;
    }
}
