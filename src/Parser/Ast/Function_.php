<?php

namespace GoInterpreter\Parser\Ast;

class Function_ extends Node
{
    /**
     * @var Statement[]
     */
    public $statements;

    /**
     * @var string
     */
    public $name;

    public function __construct(string $name, array $statements)
    {
        $this->name = $name;
        $this->statements = $statements;
    }
}
