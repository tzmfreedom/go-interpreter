<?php

namespace GoInterpreter\Parser\Ast;

use ArrayAccess;
use Traversable;

class Arguments extends Node implements ArrayAccess, \Iterator
{
    /**
     * @var Node[]
     */
    public $arguments;
    /**
     * @var int
     */
    private $current;

    /**
     * @param Node[] $arguments
     */
    public function __construct($arguments)
    {
        $this->arguments = $arguments;
    }

    public function offsetExists($offset)
    {
        return isset($this->arguments[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->arguments[$offset];
    }

    public function offsetSet($offset, $value)
    {
        return $this->arguments[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        return $this->arguments[$offset] = null;
    }

    public function current()
    {
        return $this->arguments[$this->current];
    }

    public function next()
    {
        return ++$this->current;
    }

    public function key()
    {
        return $this->current;
    }

    public function valid()
    {
        return isset($this->arguments[$this->current]);
    }

    public function rewind()
    {
        $this->current = 0;
    }
}
