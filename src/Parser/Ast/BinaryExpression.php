<?php

namespace GoInterpreter\Parser\Ast;

use ArrayAccess;
use Traversable;

class BinaryExpression extends Node
{
    /**
     * @var Node
     */
    public $left;

    /**
     * @var string
     */
    public $op;

    /**
     * @var Node
     */
    public $right;

    /**
     * @param Node $left
     * @param Node $right
     * @param string $op
     */
    public function __construct(Node $left, Node $right, $op)
    {
        $this->left = $left;
        $this->right = $right;
        $this->op = $op;
    }
}
