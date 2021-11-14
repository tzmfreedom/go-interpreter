<?php

namespace GoInterpreter\Parser\Ast\Statement;

use GoInterpreter\Parser\Ast\Node;

class Return_ extends Statement {
    /**
     * @var Node
     */
    public $expression;

    public function __construct(Node $expression)
    {
        $this->expression = $expression;
    }
}
