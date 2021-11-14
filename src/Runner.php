<?php

namespace GoInterpreter;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use GoInterpreter\Parser\Ast\File;
use GoInterpreter\Parser\GoConverter;
use GoInterpreter\Parser\GoLexer;
use GoInterpreter\Parser\GoParser;

class Runner
{
    /**
     * @param string $file
     * @param string $method
     */
    public function run($file, $method)
    {
        $input = InputStream::fromPath($file);
        $lexer = new GoLexer($input);
        $tokens = new CommonTokenStream($lexer);
        $parser = new GoParser($tokens);
        $parser->addErrorListener(new DiagnosticErrorListener());
        $parser->setBuildParseTree(true);
        $file = $parser->sourceFile();

        $converter = new GoConverter();
        /** @var File $tree */
        $tree = $converter->visit($file);

        $interpreter = new Interpreter();
        //$interpreter->visit($tree);
        foreach ($tree->functions[$method]->statements as $statement) {
            echo $statement->accept($interpreter)->value . PHP_EOL;
        }
    }
}
