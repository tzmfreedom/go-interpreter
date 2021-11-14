<?php

/*
 * Generated from GoParser.g4 by ANTLR 4.9
 */

namespace GoInterpreter\Parser;

use Antlr\Antlr4\Runtime\Lexer;
use Antlr\Antlr4\Runtime\Parser;

/**
 * All parser methods that used in grammar (p, prev, notLineTerminator, etc.)
 * should start with lower case char similar to parser rules.
 */
abstract class GoParserBase extends Parser
{
    protected function lineTerminatorAhead()
    {
        // Get the token ahead of the current index.
        $offset = 1;
        $possibleIndexEosToken = $this->getCurrentToken()->getTokenIndex() - $offset;

        if ($possibleIndexEosToken === -1)
        {
            return true;
        }

        $ahead = $this->input->get($possibleIndexEosToken);

        while($ahead->getChannel() === Lexer::HIDDEN )
        {
            if($ahead->getType() === GoLexer::TERMINATOR){
                return true;
            }
            else if($ahead->getType() === GoLexer::WS){
                $possibleIndexEosToken = $this->getCurrentToken()->getTokenIndex() - ++$offset;
                $ahead = $this->input->get($possibleIndexEosToken);
            }
            else if($ahead->getType() === GoLexer::COMMENT || $ahead->getType() === GoLexer::LINE_COMMENT ){
                if(strpos($ahead->getText(), "\r") !== false || strpos($ahead->getText(), "\n") !== false){
                    return true;
                }
                else{
                    $possibleIndexEosToken = $this->getCurrentToken()->getTokenIndex() - ++$offset;
                    $ahead = $this->input->get($possibleIndexEosToken);
                }
            }
        }

        return false;
    }

     /**
      * Returns {@code true} if no line terminator exists between the specified
      * token offset and the prior one on the {@code HIDDEN} channel.
      *
      * @return {@code true} if no line terminator exists between the specified
      * token offset and the prior one on the {@code HIDDEN} channel.
      */
    protected function noTerminatorBetween($tokenOffset) {
        $stream = $this->input;
        $tokens = $stream->getHiddenTokensToLeft($stream->LT($tokenOffset)->getTokenIndex(), -1);

        if ($tokens == null) {
            return true;
        }

        foreach ($tokens as $token) {
            if (strpos($token->getText(), "\n") !== false)
                return false;
        }

        return true;
    }

     /**
      * Returns {@code true} if no line terminator exists after any encounterd
      * parameters beyond the specified token offset and the next on the
      * {@code HIDDEN} channel.
      *
      * @return {@code true} if no line terminator exists after any encounterd
      * parameters beyond the specified token offset and the next on the
      * {@code HIDDEN} channel.
      */
    protected function noTerminatorAfterParams($tokenOffset) {
        $stream = $this->input;
        $leftParams = 1;
        $rightParams = 0;

        if ($stream->LT($tokenOffset)->getType() == GoLexer::L_PAREN) {
            // Scan past parameters
            while ($leftParams !== $rightParams) {
                $tokenOffset++;
                $valueType = $stream->LT($tokenOffset)->getType();

                if ($valueType === GoLexer::L_PAREN){
                    $leftParams++;
                }
                else if ($valueType === GoLexer::R_PAREN) {
                    $rightParams++;
                }
            }

            $tokenOffset++;
            return $this->noTerminatorBetween($tokenOffset);
        }

        return true;
    }

    protected function checkPreviousTokenText($text)
    {
        $prevTokenText = $this->input->LT(1)->getText();

        if ($prevTokenText == null)
            return false;

        return $prevTokenText === $text;
    }
}
