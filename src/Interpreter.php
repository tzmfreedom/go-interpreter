<?php

namespace GoInterpreter;

use GoInterpreter\Parser\Ast\BinaryExpression;
use GoInterpreter\Parser\Ast\File;
use GoInterpreter\Parser\Ast\Function_;
use GoInterpreter\Parser\Ast\Identifier;
use GoInterpreter\Parser\Ast\Integer;
use GoInterpreter\Parser\Ast\MethodCall;
use GoInterpreter\Parser\Ast\Node;
use GoInterpreter\Parser\Ast\Package;
use GoInterpreter\Parser\Ast\Statement\Expression;
use GoInterpreter\Parser\Ast\Statement\Return_;
use GoInterpreter\Parser\Ast\String_;
use GoInterpreter\Value\IntegerValue;
use GoInterpreter\Value\StringValue;

require_once __DIR__ . '/Parser/GoLexer.php';
require_once __DIR__ . '/Parser/GoParser.php';

/**
 * This class provides an empty implementation of {@see GoParserVisitor},
 * which can be extended to create a visitor which only needs to handle a subset
 * of the available methods.
 */
class Interpreter
{
    public function visit(Node $node)
    {
        if ($node instanceof File) {
            foreach ($node->functions['main']->statements as $statement) {
                $statement->accept($this);
            }
        }
        if ($node instanceof Package) {
            return null;
        }
        if ($node instanceof Function_) {
            return null;
        }
        if ($node instanceof Expression) {
            return $node->expression->accept($this);
        }
        if ($node instanceof MethodCall) {
            $arguments = [];
            foreach ($node->arguments as $argument) {
                $arguments[] = $argument->accept($this);
            }
            $receiver = $node->expr->accept($this);
            if ($receiver === 'fmt.Println') {
                echo $arguments[0]->value . PHP_EOL;
            }
        }
        if ($node instanceof BinaryExpression) {
            $left = $node->left->accept($this);
            $right = $node->right->accept($this);
            switch ($node->op) {
                case '+':
                    return new IntegerValue($left->value + $right->value);
                case '-':
                    return new IntegerValue($left->value - $right->value);
                case '*':
                    return new IntegerValue($left->value * $right->value);
                case '/':
                    return new IntegerValue($left->value / $right->value);
                case '%':
                    return new IntegerValue($left->value % $right->value);
            }
        }
        if ($node instanceof Identifier) {
            if ($node->child === null) {
                return $node->name;
            }
            return $node->name . '.' . $node->child->accept($this);
        }
        if ($node instanceof String_) {
            return new StringValue($node->value);
        }
        if ($node instanceof Integer) {
            return new IntegerValue($node->value);
        }
        if ($node instanceof Return_) {
            return $node->expression->accept($this);
        }
        return $node;
    }
}
