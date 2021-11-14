<?php

/*
 * Generated from GoParser.g4 by ANTLR 4.9
 */

namespace GoInterpreter\Parser {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GoParser extends GoParserBase
	{
		public const BREAK = 1, DEFAULT = 2, FUNC = 3, INTERFACE = 4, SELECT = 5, 
               CASE = 6, DEFER = 7, GO = 8, MAP = 9, STRUCT = 10, CHAN = 11, 
               ELSE = 12, GOTO = 13, PACKAGE = 14, SWITCH = 15, CONST = 16, 
               FALLTHROUGH = 17, IF = 18, RANGE = 19, TYPE = 20, CONTINUE = 21, 
               FOR = 22, IMPORT = 23, RETURN = 24, VAR = 25, NIL_LIT = 26, 
               IDENTIFIER = 27, L_PAREN = 28, R_PAREN = 29, L_CURLY = 30, 
               R_CURLY = 31, L_BRACKET = 32, R_BRACKET = 33, ASSIGN = 34, 
               COMMA = 35, SEMI = 36, COLON = 37, DOT = 38, PLUS_PLUS = 39, 
               MINUS_MINUS = 40, DECLARE_ASSIGN = 41, ELLIPSIS = 42, LOGICAL_OR = 43, 
               LOGICAL_AND = 44, EQUALS = 45, NOT_EQUALS = 46, LESS = 47, 
               LESS_OR_EQUALS = 48, GREATER = 49, GREATER_OR_EQUALS = 50, 
               OR = 51, DIV = 52, MOD = 53, LSHIFT = 54, RSHIFT = 55, BIT_CLEAR = 56, 
               EXCLAMATION = 57, PLUS = 58, MINUS = 59, CARET = 60, STAR = 61, 
               AMPERSAND = 62, RECEIVE = 63, DECIMAL_LIT = 64, BINARY_LIT = 65, 
               OCTAL_LIT = 66, HEX_LIT = 67, FLOAT_LIT = 68, DECIMAL_FLOAT_LIT = 69, 
               HEX_FLOAT_LIT = 70, IMAGINARY_LIT = 71, RUNE_LIT = 72, BYTE_VALUE = 73, 
               OCTAL_BYTE_VALUE = 74, HEX_BYTE_VALUE = 75, LITTLE_U_VALUE = 76, 
               BIG_U_VALUE = 77, RAW_STRING_LIT = 78, INTERPRETED_STRING_LIT = 79, 
               WS = 80, COMMENT = 81, TERMINATOR = 82, LINE_COMMENT = 83;

		public const RULE_sourceFile = 0, RULE_packageClause = 1, RULE_importDecl = 2, 
               RULE_importSpec = 3, RULE_importPath = 4, RULE_declaration = 5, 
               RULE_constDecl = 6, RULE_constSpec = 7, RULE_identifierList = 8, 
               RULE_expressionList = 9, RULE_typeDecl = 10, RULE_typeSpec = 11, 
               RULE_functionDecl = 12, RULE_methodDecl = 13, RULE_receiver = 14, 
               RULE_varDecl = 15, RULE_varSpec = 16, RULE_block = 17, RULE_statementList = 18, 
               RULE_statement = 19, RULE_simpleStmt = 20, RULE_expressionStmt = 21, 
               RULE_sendStmt = 22, RULE_incDecStmt = 23, RULE_assignment = 24, 
               RULE_assign_op = 25, RULE_shortVarDecl = 26, RULE_emptyStmt = 27, 
               RULE_labeledStmt = 28, RULE_returnStmt = 29, RULE_breakStmt = 30, 
               RULE_continueStmt = 31, RULE_gotoStmt = 32, RULE_fallthroughStmt = 33, 
               RULE_deferStmt = 34, RULE_ifStmt = 35, RULE_switchStmt = 36, 
               RULE_exprSwitchStmt = 37, RULE_exprCaseClause = 38, RULE_exprSwitchCase = 39, 
               RULE_typeSwitchStmt = 40, RULE_typeSwitchGuard = 41, RULE_typeCaseClause = 42, 
               RULE_typeSwitchCase = 43, RULE_typeList = 44, RULE_selectStmt = 45, 
               RULE_commClause = 46, RULE_commCase = 47, RULE_recvStmt = 48, 
               RULE_forStmt = 49, RULE_forClause = 50, RULE_rangeClause = 51, 
               RULE_goStmt = 52, RULE_type_ = 53, RULE_typeName = 54, RULE_typeLit = 55, 
               RULE_arrayType = 56, RULE_arrayLength = 57, RULE_elementType = 58, 
               RULE_pointerType = 59, RULE_interfaceType = 60, RULE_sliceType = 61, 
               RULE_mapType = 62, RULE_channelType = 63, RULE_methodSpec = 64, 
               RULE_functionType = 65, RULE_signature = 66, RULE_result = 67, 
               RULE_parameters = 68, RULE_parameterDecl = 69, RULE_expression = 70, 
               RULE_primaryExpr = 71, RULE_unaryExpr = 72, RULE_conversion = 73, 
               RULE_operand = 74, RULE_literal = 75, RULE_basicLit = 76, 
               RULE_integer = 77, RULE_operandName = 78, RULE_qualifiedIdent = 79, 
               RULE_compositeLit = 80, RULE_literalType = 81, RULE_literalValue = 82, 
               RULE_elementList = 83, RULE_keyedElement = 84, RULE_key = 85, 
               RULE_element = 86, RULE_structType = 87, RULE_fieldDecl = 88, 
               RULE_string_ = 89, RULE_embeddedField = 90, RULE_functionLit = 91, 
               RULE_index = 92, RULE_slice_ = 93, RULE_typeAssertion = 94, 
               RULE_arguments = 95, RULE_methodExpr = 96, RULE_receiverType = 97, 
               RULE_eos = 98;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'sourceFile', 'packageClause', 'importDecl', 'importSpec', 'importPath', 
			'declaration', 'constDecl', 'constSpec', 'identifierList', 'expressionList', 
			'typeDecl', 'typeSpec', 'functionDecl', 'methodDecl', 'receiver', 'varDecl', 
			'varSpec', 'block', 'statementList', 'statement', 'simpleStmt', 'expressionStmt', 
			'sendStmt', 'incDecStmt', 'assignment', 'assign_op', 'shortVarDecl', 
			'emptyStmt', 'labeledStmt', 'returnStmt', 'breakStmt', 'continueStmt', 
			'gotoStmt', 'fallthroughStmt', 'deferStmt', 'ifStmt', 'switchStmt', 'exprSwitchStmt', 
			'exprCaseClause', 'exprSwitchCase', 'typeSwitchStmt', 'typeSwitchGuard', 
			'typeCaseClause', 'typeSwitchCase', 'typeList', 'selectStmt', 'commClause', 
			'commCase', 'recvStmt', 'forStmt', 'forClause', 'rangeClause', 'goStmt', 
			'type_', 'typeName', 'typeLit', 'arrayType', 'arrayLength', 'elementType', 
			'pointerType', 'interfaceType', 'sliceType', 'mapType', 'channelType', 
			'methodSpec', 'functionType', 'signature', 'result', 'parameters', 'parameterDecl', 
			'expression', 'primaryExpr', 'unaryExpr', 'conversion', 'operand', 'literal', 
			'basicLit', 'integer', 'operandName', 'qualifiedIdent', 'compositeLit', 
			'literalType', 'literalValue', 'elementList', 'keyedElement', 'key', 
			'element', 'structType', 'fieldDecl', 'string_', 'embeddedField', 'functionLit', 
			'index', 'slice_', 'typeAssertion', 'arguments', 'methodExpr', 'receiverType', 
			'eos'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'break'", "'default'", "'func'", "'interface'", "'select'", 
		    "'case'", "'defer'", "'go'", "'map'", "'struct'", "'chan'", "'else'", 
		    "'goto'", "'package'", "'switch'", "'const'", "'fallthrough'", "'if'", 
		    "'range'", "'type'", "'continue'", "'for'", "'import'", "'return'", 
		    "'var'", "'nil'", null, "'('", "')'", "'{'", "'}'", "'['", "']'", 
		    "'='", "','", "';'", "':'", "'.'", "'++'", "'--'", "':='", "'...'", 
		    "'||'", "'&&'", "'=='", "'!='", "'<'", "'<='", "'>'", "'>='", "'|'", 
		    "'/'", "'%'", "'<<'", "'>>'", "'&^'", "'!'", "'+'", "'-'", "'^'", 
		    "'*'", "'&'", "'<-'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "BREAK", "DEFAULT", "FUNC", "INTERFACE", "SELECT", "CASE", "DEFER", 
		    "GO", "MAP", "STRUCT", "CHAN", "ELSE", "GOTO", "PACKAGE", "SWITCH", 
		    "CONST", "FALLTHROUGH", "IF", "RANGE", "TYPE", "CONTINUE", "FOR", 
		    "IMPORT", "RETURN", "VAR", "NIL_LIT", "IDENTIFIER", "L_PAREN", "R_PAREN", 
		    "L_CURLY", "R_CURLY", "L_BRACKET", "R_BRACKET", "ASSIGN", "COMMA", 
		    "SEMI", "COLON", "DOT", "PLUS_PLUS", "MINUS_MINUS", "DECLARE_ASSIGN", 
		    "ELLIPSIS", "LOGICAL_OR", "LOGICAL_AND", "EQUALS", "NOT_EQUALS", "LESS", 
		    "LESS_OR_EQUALS", "GREATER", "GREATER_OR_EQUALS", "OR", "DIV", "MOD", 
		    "LSHIFT", "RSHIFT", "BIT_CLEAR", "EXCLAMATION", "PLUS", "MINUS", "CARET", 
		    "STAR", "AMPERSAND", "RECEIVE", "DECIMAL_LIT", "BINARY_LIT", "OCTAL_LIT", 
		    "HEX_LIT", "FLOAT_LIT", "DECIMAL_FLOAT_LIT", "HEX_FLOAT_LIT", "IMAGINARY_LIT", 
		    "RUNE_LIT", "BYTE_VALUE", "OCTAL_BYTE_VALUE", "HEX_BYTE_VALUE", "LITTLE_U_VALUE", 
		    "BIG_U_VALUE", "RAW_STRING_LIT", "INTERPRETED_STRING_LIT", "WS", "COMMENT", 
		    "TERMINATOR", "LINE_COMMENT"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{55}\u{3B2}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}" .
		    "\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}" .
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}" .
		    "\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}\u{4}\u{17}" .
		    "\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{4}\u{19}\u{9}\u{19}\u{4}\u{1A}" .
		    "\u{9}\u{1A}\u{4}\u{1B}\u{9}\u{1B}\u{4}\u{1C}\u{9}\u{1C}\u{4}\u{1D}" .
		    "\u{9}\u{1D}\u{4}\u{1E}\u{9}\u{1E}\u{4}\u{1F}\u{9}\u{1F}\u{4}\u{20}" .
		    "\u{9}\u{20}\u{4}\u{21}\u{9}\u{21}\u{4}\u{22}\u{9}\u{22}\u{4}\u{23}" .
		    "\u{9}\u{23}\u{4}\u{24}\u{9}\u{24}\u{4}\u{25}\u{9}\u{25}\u{4}\u{26}" .
		    "\u{9}\u{26}\u{4}\u{27}\u{9}\u{27}\u{4}\u{28}\u{9}\u{28}\u{4}\u{29}" .
		    "\u{9}\u{29}\u{4}\u{2A}\u{9}\u{2A}\u{4}\u{2B}\u{9}\u{2B}\u{4}\u{2C}" .
		    "\u{9}\u{2C}\u{4}\u{2D}\u{9}\u{2D}\u{4}\u{2E}\u{9}\u{2E}\u{4}\u{2F}" .
		    "\u{9}\u{2F}\u{4}\u{30}\u{9}\u{30}\u{4}\u{31}\u{9}\u{31}\u{4}\u{32}" .
		    "\u{9}\u{32}\u{4}\u{33}\u{9}\u{33}\u{4}\u{34}\u{9}\u{34}\u{4}\u{35}" .
		    "\u{9}\u{35}\u{4}\u{36}\u{9}\u{36}\u{4}\u{37}\u{9}\u{37}\u{4}\u{38}" .
		    "\u{9}\u{38}\u{4}\u{39}\u{9}\u{39}\u{4}\u{3A}\u{9}\u{3A}\u{4}\u{3B}" .
		    "\u{9}\u{3B}\u{4}\u{3C}\u{9}\u{3C}\u{4}\u{3D}\u{9}\u{3D}\u{4}\u{3E}" .
		    "\u{9}\u{3E}\u{4}\u{3F}\u{9}\u{3F}\u{4}\u{40}\u{9}\u{40}\u{4}\u{41}" .
		    "\u{9}\u{41}\u{4}\u{42}\u{9}\u{42}\u{4}\u{43}\u{9}\u{43}\u{4}\u{44}" .
		    "\u{9}\u{44}\u{4}\u{45}\u{9}\u{45}\u{4}\u{46}\u{9}\u{46}\u{4}\u{47}" .
		    "\u{9}\u{47}\u{4}\u{48}\u{9}\u{48}\u{4}\u{49}\u{9}\u{49}\u{4}\u{4A}" .
		    "\u{9}\u{4A}\u{4}\u{4B}\u{9}\u{4B}\u{4}\u{4C}\u{9}\u{4C}\u{4}\u{4D}" .
		    "\u{9}\u{4D}\u{4}\u{4E}\u{9}\u{4E}\u{4}\u{4F}\u{9}\u{4F}\u{4}\u{50}" .
		    "\u{9}\u{50}\u{4}\u{51}\u{9}\u{51}\u{4}\u{52}\u{9}\u{52}\u{4}\u{53}" .
		    "\u{9}\u{53}\u{4}\u{54}\u{9}\u{54}\u{4}\u{55}\u{9}\u{55}\u{4}\u{56}" .
		    "\u{9}\u{56}\u{4}\u{57}\u{9}\u{57}\u{4}\u{58}\u{9}\u{58}\u{4}\u{59}" .
		    "\u{9}\u{59}\u{4}\u{5A}\u{9}\u{5A}\u{4}\u{5B}\u{9}\u{5B}\u{4}\u{5C}" .
		    "\u{9}\u{5C}\u{4}\u{5D}\u{9}\u{5D}\u{4}\u{5E}\u{9}\u{5E}\u{4}\u{5F}" .
		    "\u{9}\u{5F}\u{4}\u{60}\u{9}\u{60}\u{4}\u{61}\u{9}\u{61}\u{4}\u{62}" .
		    "\u{9}\u{62}\u{4}\u{63}\u{9}\u{63}\u{4}\u{64}\u{9}\u{64}\u{3}\u{2}" .
		    "\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{7}\u{2}\u{CE}\u{A}\u{2}" .
		    "\u{C}\u{2}\u{E}\u{2}\u{D1}\u{B}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}" .
		    "\u{5}\u{2}\u{D6}\u{A}\u{2}\u{3}\u{2}\u{3}\u{2}\u{7}\u{2}\u{DA}\u{A}" .
		    "\u{2}\u{C}\u{2}\u{E}\u{2}\u{DD}\u{B}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{7}\u{4}\u{EA}\u{A}\u{4}\u{C}\u{4}\u{E}\u{4}" .
		    "\u{ED}\u{B}\u{4}\u{3}\u{4}\u{5}\u{4}\u{F0}\u{A}\u{4}\u{3}\u{5}\u{5}" .
		    "\u{5}\u{F3}\u{A}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{3}\u{7}\u{5}\u{7}\u{FC}\u{A}\u{7}\u{3}\u{8}\u{3}" .
		    "\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{7}\u{8}\u{104}\u{A}" .
		    "\u{8}\u{C}\u{8}\u{E}\u{8}\u{107}\u{B}\u{8}\u{3}\u{8}\u{5}\u{8}\u{10A}" .
		    "\u{A}\u{8}\u{3}\u{9}\u{3}\u{9}\u{5}\u{9}\u{10E}\u{A}\u{9}\u{3}\u{9}" .
		    "\u{3}\u{9}\u{5}\u{9}\u{112}\u{A}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}" .
		    "\u{7}\u{A}\u{117}\u{A}\u{A}\u{C}\u{A}\u{E}\u{A}\u{11A}\u{B}\u{A}\u{3}" .
		    "\u{B}\u{3}\u{B}\u{3}\u{B}\u{7}\u{B}\u{11F}\u{A}\u{B}\u{C}\u{B}\u{E}" .
		    "\u{B}\u{122}\u{B}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}" .
		    "\u{C}\u{3}\u{C}\u{7}\u{C}\u{12A}\u{A}\u{C}\u{C}\u{C}\u{E}\u{C}\u{12D}" .
		    "\u{B}\u{C}\u{3}\u{C}\u{5}\u{C}\u{130}\u{A}\u{C}\u{3}\u{D}\u{3}\u{D}" .
		    "\u{5}\u{D}\u{134}\u{A}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{E}\u{3}\u{E}" .
		    "\u{3}\u{E}\u{3}\u{E}\u{5}\u{E}\u{13C}\u{A}\u{E}\u{3}\u{F}\u{3}\u{F}" .
		    "\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}\u{5}\u{F}\u{143}\u{A}\u{F}\u{3}\u{10}" .
		    "\u{3}\u{10}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}" .
		    "\u{3}\u{11}\u{7}\u{11}\u{14D}\u{A}\u{11}\u{C}\u{11}\u{E}\u{11}\u{150}" .
		    "\u{B}\u{11}\u{3}\u{11}\u{5}\u{11}\u{153}\u{A}\u{11}\u{3}\u{12}\u{3}" .
		    "\u{12}\u{3}\u{12}\u{3}\u{12}\u{5}\u{12}\u{159}\u{A}\u{12}\u{3}\u{12}" .
		    "\u{3}\u{12}\u{5}\u{12}\u{15D}\u{A}\u{12}\u{3}\u{13}\u{3}\u{13}\u{5}" .
		    "\u{13}\u{161}\u{A}\u{13}\u{3}\u{13}\u{3}\u{13}\u{3}\u{14}\u{3}\u{14}" .
		    "\u{3}\u{14}\u{6}\u{14}\u{168}\u{A}\u{14}\u{D}\u{14}\u{E}\u{14}\u{169}" .
		    "\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}" .
		    "\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}" .
		    "\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}\u{5}\u{15}\u{17B}\u{A}\u{15}\u{3}" .
		    "\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{5}" .
		    "\u{16}\u{183}\u{A}\u{16}\u{3}\u{17}\u{3}\u{17}\u{3}\u{18}\u{3}\u{18}" .
		    "\u{3}\u{18}\u{3}\u{18}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{1A}" .
		    "\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1B}\u{5}\u{1B}\u{193}\u{A}" .
		    "\u{1B}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1C}\u{3}\u{1C}\u{3}\u{1C}\u{3}" .
		    "\u{1C}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{5}" .
		    "\u{1E}\u{1A0}\u{A}\u{1E}\u{3}\u{1F}\u{3}\u{1F}\u{5}\u{1F}\u{1A4}\u{A}" .
		    "\u{1F}\u{3}\u{20}\u{3}\u{20}\u{5}\u{20}\u{1A8}\u{A}\u{20}\u{3}\u{21}" .
		    "\u{3}\u{21}\u{5}\u{21}\u{1AC}\u{A}\u{21}\u{3}\u{22}\u{3}\u{22}\u{3}" .
		    "\u{22}\u{3}\u{23}\u{3}\u{23}\u{3}\u{24}\u{3}\u{24}\u{3}\u{24}\u{3}" .
		    "\u{25}\u{3}\u{25}\u{3}\u{25}\u{3}\u{25}\u{5}\u{25}\u{1BA}\u{A}\u{25}" .
		    "\u{3}\u{25}\u{3}\u{25}\u{3}\u{25}\u{3}\u{25}\u{3}\u{25}\u{5}\u{25}" .
		    "\u{1C1}\u{A}\u{25}\u{5}\u{25}\u{1C3}\u{A}\u{25}\u{3}\u{26}\u{3}\u{26}" .
		    "\u{5}\u{26}\u{1C7}\u{A}\u{26}\u{3}\u{27}\u{3}\u{27}\u{3}\u{27}\u{3}" .
		    "\u{27}\u{5}\u{27}\u{1CD}\u{A}\u{27}\u{3}\u{27}\u{5}\u{27}\u{1D0}\u{A}" .
		    "\u{27}\u{3}\u{27}\u{3}\u{27}\u{7}\u{27}\u{1D4}\u{A}\u{27}\u{C}\u{27}" .
		    "\u{E}\u{27}\u{1D7}\u{B}\u{27}\u{3}\u{27}\u{3}\u{27}\u{3}\u{28}\u{3}" .
		    "\u{28}\u{3}\u{28}\u{5}\u{28}\u{1DE}\u{A}\u{28}\u{3}\u{29}\u{3}\u{29}" .
		    "\u{3}\u{29}\u{5}\u{29}\u{1E3}\u{A}\u{29}\u{3}\u{2A}\u{3}\u{2A}\u{3}" .
		    "\u{2A}\u{3}\u{2A}\u{5}\u{2A}\u{1E9}\u{A}\u{2A}\u{3}\u{2A}\u{3}\u{2A}" .
		    "\u{3}\u{2A}\u{7}\u{2A}\u{1EE}\u{A}\u{2A}\u{C}\u{2A}\u{E}\u{2A}\u{1F1}" .
		    "\u{B}\u{2A}\u{3}\u{2A}\u{3}\u{2A}\u{3}\u{2B}\u{3}\u{2B}\u{5}\u{2B}" .
		    "\u{1F7}\u{A}\u{2B}\u{3}\u{2B}\u{3}\u{2B}\u{3}\u{2B}\u{3}\u{2B}\u{3}" .
		    "\u{2B}\u{3}\u{2B}\u{3}\u{2C}\u{3}\u{2C}\u{3}\u{2C}\u{5}\u{2C}\u{202}" .
		    "\u{A}\u{2C}\u{3}\u{2D}\u{3}\u{2D}\u{3}\u{2D}\u{5}\u{2D}\u{207}\u{A}" .
		    "\u{2D}\u{3}\u{2E}\u{3}\u{2E}\u{5}\u{2E}\u{20B}\u{A}\u{2E}\u{3}\u{2E}" .
		    "\u{3}\u{2E}\u{3}\u{2E}\u{5}\u{2E}\u{210}\u{A}\u{2E}\u{7}\u{2E}\u{212}" .
		    "\u{A}\u{2E}\u{C}\u{2E}\u{E}\u{2E}\u{215}\u{B}\u{2E}\u{3}\u{2F}\u{3}" .
		    "\u{2F}\u{3}\u{2F}\u{7}\u{2F}\u{21A}\u{A}\u{2F}\u{C}\u{2F}\u{E}\u{2F}" .
		    "\u{21D}\u{B}\u{2F}\u{3}\u{2F}\u{3}\u{2F}\u{3}\u{30}\u{3}\u{30}\u{3}" .
		    "\u{30}\u{5}\u{30}\u{224}\u{A}\u{30}\u{3}\u{31}\u{3}\u{31}\u{3}\u{31}" .
		    "\u{5}\u{31}\u{229}\u{A}\u{31}\u{3}\u{31}\u{5}\u{31}\u{22C}\u{A}\u{31}" .
		    "\u{3}\u{32}\u{3}\u{32}\u{3}\u{32}\u{3}\u{32}\u{3}\u{32}\u{3}\u{32}" .
		    "\u{5}\u{32}\u{234}\u{A}\u{32}\u{3}\u{32}\u{3}\u{32}\u{3}\u{33}\u{3}" .
		    "\u{33}\u{3}\u{33}\u{3}\u{33}\u{5}\u{33}\u{23C}\u{A}\u{33}\u{3}\u{33}" .
		    "\u{3}\u{33}\u{3}\u{34}\u{5}\u{34}\u{241}\u{A}\u{34}\u{3}\u{34}\u{3}" .
		    "\u{34}\u{5}\u{34}\u{245}\u{A}\u{34}\u{3}\u{34}\u{3}\u{34}\u{5}\u{34}" .
		    "\u{249}\u{A}\u{34}\u{3}\u{35}\u{3}\u{35}\u{3}\u{35}\u{3}\u{35}\u{3}" .
		    "\u{35}\u{3}\u{35}\u{5}\u{35}\u{251}\u{A}\u{35}\u{3}\u{35}\u{3}\u{35}" .
		    "\u{3}\u{35}\u{3}\u{36}\u{3}\u{36}\u{3}\u{36}\u{3}\u{37}\u{3}\u{37}" .
		    "\u{3}\u{37}\u{3}\u{37}\u{3}\u{37}\u{3}\u{37}\u{5}\u{37}\u{25F}\u{A}" .
		    "\u{37}\u{3}\u{38}\u{3}\u{38}\u{5}\u{38}\u{263}\u{A}\u{38}\u{3}\u{39}" .
		    "\u{3}\u{39}\u{3}\u{39}\u{3}\u{39}\u{3}\u{39}\u{3}\u{39}\u{3}\u{39}" .
		    "\u{3}\u{39}\u{5}\u{39}\u{26D}\u{A}\u{39}\u{3}\u{3A}\u{3}\u{3A}\u{3}" .
		    "\u{3A}\u{3}\u{3A}\u{3}\u{3A}\u{3}\u{3B}\u{3}\u{3B}\u{3}\u{3C}\u{3}" .
		    "\u{3C}\u{3}\u{3D}\u{3}\u{3D}\u{3}\u{3D}\u{3}\u{3E}\u{3}\u{3E}\u{3}" .
		    "\u{3E}\u{3}\u{3E}\u{5}\u{3E}\u{27F}\u{A}\u{3E}\u{3}\u{3E}\u{3}\u{3E}" .
		    "\u{7}\u{3E}\u{283}\u{A}\u{3E}\u{C}\u{3E}\u{E}\u{3E}\u{286}\u{B}\u{3E}" .
		    "\u{3}\u{3E}\u{3}\u{3E}\u{3}\u{3F}\u{3}\u{3F}\u{3}\u{3F}\u{3}\u{3F}" .
		    "\u{3}\u{40}\u{3}\u{40}\u{3}\u{40}\u{3}\u{40}\u{3}\u{40}\u{3}\u{40}" .
		    "\u{3}\u{41}\u{3}\u{41}\u{3}\u{41}\u{3}\u{41}\u{3}\u{41}\u{5}\u{41}" .
		    "\u{299}\u{A}\u{41}\u{3}\u{41}\u{3}\u{41}\u{3}\u{42}\u{3}\u{42}\u{3}" .
		    "\u{42}\u{3}\u{42}\u{3}\u{42}\u{3}\u{42}\u{3}\u{42}\u{5}\u{42}\u{2A4}" .
		    "\u{A}\u{42}\u{3}\u{43}\u{3}\u{43}\u{3}\u{43}\u{3}\u{44}\u{3}\u{44}" .
		    "\u{3}\u{44}\u{3}\u{44}\u{3}\u{44}\u{5}\u{44}\u{2AE}\u{A}\u{44}\u{3}" .
		    "\u{45}\u{3}\u{45}\u{5}\u{45}\u{2B2}\u{A}\u{45}\u{3}\u{46}\u{3}\u{46}" .
		    "\u{3}\u{46}\u{3}\u{46}\u{7}\u{46}\u{2B8}\u{A}\u{46}\u{C}\u{46}\u{E}" .
		    "\u{46}\u{2BB}\u{B}\u{46}\u{3}\u{46}\u{5}\u{46}\u{2BE}\u{A}\u{46}\u{5}" .
		    "\u{46}\u{2C0}\u{A}\u{46}\u{3}\u{46}\u{3}\u{46}\u{3}\u{47}\u{5}\u{47}" .
		    "\u{2C5}\u{A}\u{47}\u{3}\u{47}\u{5}\u{47}\u{2C8}\u{A}\u{47}\u{3}\u{47}" .
		    "\u{3}\u{47}\u{3}\u{48}\u{3}\u{48}\u{3}\u{48}\u{5}\u{48}\u{2CF}\u{A}" .
		    "\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}" .
		    "\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}" .
		    "\u{48}\u{3}\u{48}\u{3}\u{48}\u{3}\u{48}\u{7}\u{48}\u{2E0}\u{A}\u{48}" .
		    "\u{C}\u{48}\u{E}\u{48}\u{2E3}\u{B}\u{48}\u{3}\u{49}\u{3}\u{49}\u{3}" .
		    "\u{49}\u{3}\u{49}\u{5}\u{49}\u{2E9}\u{A}\u{49}\u{3}\u{49}\u{3}\u{49}" .
		    "\u{3}\u{49}\u{3}\u{49}\u{3}\u{49}\u{3}\u{49}\u{3}\u{49}\u{5}\u{49}" .
		    "\u{2F2}\u{A}\u{49}\u{7}\u{49}\u{2F4}\u{A}\u{49}\u{C}\u{49}\u{E}\u{49}" .
		    "\u{2F7}\u{B}\u{49}\u{3}\u{4A}\u{3}\u{4A}\u{3}\u{4A}\u{5}\u{4A}\u{2FC}" .
		    "\u{A}\u{4A}\u{3}\u{4B}\u{3}\u{4B}\u{3}\u{4B}\u{3}\u{4B}\u{5}\u{4B}" .
		    "\u{302}\u{A}\u{4B}\u{3}\u{4B}\u{3}\u{4B}\u{3}\u{4C}\u{3}\u{4C}\u{3}" .
		    "\u{4C}\u{3}\u{4C}\u{3}\u{4C}\u{3}\u{4C}\u{5}\u{4C}\u{30C}\u{A}\u{4C}" .
		    "\u{3}\u{4D}\u{3}\u{4D}\u{3}\u{4D}\u{5}\u{4D}\u{311}\u{A}\u{4D}\u{3}" .
		    "\u{4E}\u{3}\u{4E}\u{3}\u{4E}\u{3}\u{4E}\u{3}\u{4E}\u{3}\u{4E}\u{5}" .
		    "\u{4E}\u{319}\u{A}\u{4E}\u{3}\u{4F}\u{3}\u{4F}\u{3}\u{50}\u{3}\u{50}" .
		    "\u{3}\u{50}\u{5}\u{50}\u{320}\u{A}\u{50}\u{3}\u{51}\u{3}\u{51}\u{3}" .
		    "\u{51}\u{3}\u{51}\u{3}\u{52}\u{3}\u{52}\u{3}\u{52}\u{3}\u{53}\u{3}" .
		    "\u{53}\u{3}\u{53}\u{3}\u{53}\u{3}\u{53}\u{3}\u{53}\u{3}\u{53}\u{3}" .
		    "\u{53}\u{3}\u{53}\u{5}\u{53}\u{332}\u{A}\u{53}\u{3}\u{54}\u{3}\u{54}" .
		    "\u{3}\u{54}\u{5}\u{54}\u{337}\u{A}\u{54}\u{5}\u{54}\u{339}\u{A}\u{54}" .
		    "\u{3}\u{54}\u{3}\u{54}\u{3}\u{55}\u{3}\u{55}\u{3}\u{55}\u{7}\u{55}" .
		    "\u{340}\u{A}\u{55}\u{C}\u{55}\u{E}\u{55}\u{343}\u{B}\u{55}\u{3}\u{56}" .
		    "\u{3}\u{56}\u{3}\u{56}\u{5}\u{56}\u{348}\u{A}\u{56}\u{3}\u{56}\u{3}" .
		    "\u{56}\u{3}\u{57}\u{3}\u{57}\u{3}\u{57}\u{5}\u{57}\u{34F}\u{A}\u{57}" .
		    "\u{3}\u{58}\u{3}\u{58}\u{5}\u{58}\u{353}\u{A}\u{58}\u{3}\u{59}\u{3}" .
		    "\u{59}\u{3}\u{59}\u{3}\u{59}\u{3}\u{59}\u{7}\u{59}\u{35A}\u{A}\u{59}" .
		    "\u{C}\u{59}\u{E}\u{59}\u{35D}\u{B}\u{59}\u{3}\u{59}\u{3}\u{59}\u{3}" .
		    "\u{5A}\u{3}\u{5A}\u{3}\u{5A}\u{3}\u{5A}\u{3}\u{5A}\u{5}\u{5A}\u{366}" .
		    "\u{A}\u{5A}\u{3}\u{5A}\u{5}\u{5A}\u{369}\u{A}\u{5A}\u{3}\u{5B}\u{3}" .
		    "\u{5B}\u{3}\u{5C}\u{5}\u{5C}\u{36E}\u{A}\u{5C}\u{3}\u{5C}\u{3}\u{5C}" .
		    "\u{3}\u{5D}\u{3}\u{5D}\u{3}\u{5D}\u{3}\u{5D}\u{3}\u{5E}\u{3}\u{5E}" .
		    "\u{3}\u{5E}\u{3}\u{5E}\u{3}\u{5F}\u{3}\u{5F}\u{5}\u{5F}\u{37C}\u{A}" .
		    "\u{5F}\u{3}\u{5F}\u{3}\u{5F}\u{5}\u{5F}\u{380}\u{A}\u{5F}\u{3}\u{5F}" .
		    "\u{5}\u{5F}\u{383}\u{A}\u{5F}\u{3}\u{5F}\u{3}\u{5F}\u{3}\u{5F}\u{3}" .
		    "\u{5F}\u{3}\u{5F}\u{5}\u{5F}\u{38A}\u{A}\u{5F}\u{3}\u{5F}\u{3}\u{5F}" .
		    "\u{3}\u{60}\u{3}\u{60}\u{3}\u{60}\u{3}\u{60}\u{3}\u{60}\u{3}\u{61}" .
		    "\u{3}\u{61}\u{3}\u{61}\u{3}\u{61}\u{3}\u{61}\u{5}\u{61}\u{398}\u{A}" .
		    "\u{61}\u{5}\u{61}\u{39A}\u{A}\u{61}\u{3}\u{61}\u{5}\u{61}\u{39D}\u{A}" .
		    "\u{61}\u{3}\u{61}\u{5}\u{61}\u{3A0}\u{A}\u{61}\u{5}\u{61}\u{3A2}\u{A}" .
		    "\u{61}\u{3}\u{61}\u{3}\u{61}\u{3}\u{62}\u{3}\u{62}\u{3}\u{62}\u{3}" .
		    "\u{62}\u{3}\u{63}\u{3}\u{63}\u{3}\u{64}\u{3}\u{64}\u{3}\u{64}\u{3}" .
		    "\u{64}\u{5}\u{64}\u{3B0}\u{A}\u{64}\u{3}\u{64}\u{2}\u{4}\u{8E}\u{90}" .
		    "\u{65}\u{2}\u{4}\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}\u{14}\u{16}" .
		    "\u{18}\u{1A}\u{1C}\u{1E}\u{20}\u{22}\u{24}\u{26}\u{28}\u{2A}\u{2C}" .
		    "\u{2E}\u{30}\u{32}\u{34}\u{36}\u{38}\u{3A}\u{3C}\u{3E}\u{40}\u{42}" .
		    "\u{44}\u{46}\u{48}\u{4A}\u{4C}\u{4E}\u{50}\u{52}\u{54}\u{56}\u{58}" .
		    "\u{5A}\u{5C}\u{5E}\u{60}\u{62}\u{64}\u{66}\u{68}\u{6A}\u{6C}\u{6E}" .
		    "\u{70}\u{72}\u{74}\u{76}\u{78}\u{7A}\u{7C}\u{7E}\u{80}\u{82}\u{84}" .
		    "\u{86}\u{88}\u{8A}\u{8C}\u{8E}\u{90}\u{92}\u{94}\u{96}\u{98}\u{9A}" .
		    "\u{9C}\u{9E}\u{A0}\u{A2}\u{A4}\u{A6}\u{A8}\u{AA}\u{AC}\u{AE}\u{B0}" .
		    "\u{B2}\u{B4}\u{B6}\u{B8}\u{BA}\u{BC}\u{BE}\u{C0}\u{C2}\u{C4}\u{C6}" .
		    "\u{2}\u{B}\u{4}\u{2}\u{1D}\u{1D}\u{28}\u{28}\u{3}\u{2}\u{29}\u{2A}" .
		    "\u{4}\u{2}\u{35}\u{3A}\u{3C}\u{40}\u{4}\u{2}\u{36}\u{3A}\u{3F}\u{40}" .
		    "\u{4}\u{2}\u{35}\u{35}\u{3C}\u{3E}\u{3}\u{2}\u{2F}\u{34}\u{3}\u{2}" .
		    "\u{3B}\u{41}\u{4}\u{2}\u{42}\u{45}\u{49}\u{4A}\u{3}\u{2}\u{50}\u{51}" .
		    "\u{2}\u{3EA}\u{2}\u{C8}\u{3}\u{2}\u{2}\u{2}\u{4}\u{E0}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{6}\u{E3}\u{3}\u{2}\u{2}\u{2}\u{8}\u{F2}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{A}\u{F6}\u{3}\u{2}\u{2}\u{2}\u{C}\u{FB}\u{3}\u{2}\u{2}\u{2}\u{E}" .
		    "\u{FD}\u{3}\u{2}\u{2}\u{2}\u{10}\u{10B}\u{3}\u{2}\u{2}\u{2}\u{12}" .
		    "\u{113}\u{3}\u{2}\u{2}\u{2}\u{14}\u{11B}\u{3}\u{2}\u{2}\u{2}\u{16}" .
		    "\u{123}\u{3}\u{2}\u{2}\u{2}\u{18}\u{131}\u{3}\u{2}\u{2}\u{2}\u{1A}" .
		    "\u{137}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{13D}\u{3}\u{2}\u{2}\u{2}\u{1E}" .
		    "\u{144}\u{3}\u{2}\u{2}\u{2}\u{20}\u{146}\u{3}\u{2}\u{2}\u{2}\u{22}" .
		    "\u{154}\u{3}\u{2}\u{2}\u{2}\u{24}\u{15E}\u{3}\u{2}\u{2}\u{2}\u{26}" .
		    "\u{167}\u{3}\u{2}\u{2}\u{2}\u{28}\u{17A}\u{3}\u{2}\u{2}\u{2}\u{2A}" .
		    "\u{182}\u{3}\u{2}\u{2}\u{2}\u{2C}\u{184}\u{3}\u{2}\u{2}\u{2}\u{2E}" .
		    "\u{186}\u{3}\u{2}\u{2}\u{2}\u{30}\u{18A}\u{3}\u{2}\u{2}\u{2}\u{32}" .
		    "\u{18D}\u{3}\u{2}\u{2}\u{2}\u{34}\u{192}\u{3}\u{2}\u{2}\u{2}\u{36}" .
		    "\u{196}\u{3}\u{2}\u{2}\u{2}\u{38}\u{19A}\u{3}\u{2}\u{2}\u{2}\u{3A}" .
		    "\u{19C}\u{3}\u{2}\u{2}\u{2}\u{3C}\u{1A1}\u{3}\u{2}\u{2}\u{2}\u{3E}" .
		    "\u{1A5}\u{3}\u{2}\u{2}\u{2}\u{40}\u{1A9}\u{3}\u{2}\u{2}\u{2}\u{42}" .
		    "\u{1AD}\u{3}\u{2}\u{2}\u{2}\u{44}\u{1B0}\u{3}\u{2}\u{2}\u{2}\u{46}" .
		    "\u{1B2}\u{3}\u{2}\u{2}\u{2}\u{48}\u{1B5}\u{3}\u{2}\u{2}\u{2}\u{4A}" .
		    "\u{1C6}\u{3}\u{2}\u{2}\u{2}\u{4C}\u{1C8}\u{3}\u{2}\u{2}\u{2}\u{4E}" .
		    "\u{1DA}\u{3}\u{2}\u{2}\u{2}\u{50}\u{1E2}\u{3}\u{2}\u{2}\u{2}\u{52}" .
		    "\u{1E4}\u{3}\u{2}\u{2}\u{2}\u{54}\u{1F6}\u{3}\u{2}\u{2}\u{2}\u{56}" .
		    "\u{1FE}\u{3}\u{2}\u{2}\u{2}\u{58}\u{206}\u{3}\u{2}\u{2}\u{2}\u{5A}" .
		    "\u{20A}\u{3}\u{2}\u{2}\u{2}\u{5C}\u{216}\u{3}\u{2}\u{2}\u{2}\u{5E}" .
		    "\u{220}\u{3}\u{2}\u{2}\u{2}\u{60}\u{22B}\u{3}\u{2}\u{2}\u{2}\u{62}" .
		    "\u{233}\u{3}\u{2}\u{2}\u{2}\u{64}\u{237}\u{3}\u{2}\u{2}\u{2}\u{66}" .
		    "\u{240}\u{3}\u{2}\u{2}\u{2}\u{68}\u{250}\u{3}\u{2}\u{2}\u{2}\u{6A}" .
		    "\u{255}\u{3}\u{2}\u{2}\u{2}\u{6C}\u{25E}\u{3}\u{2}\u{2}\u{2}\u{6E}" .
		    "\u{262}\u{3}\u{2}\u{2}\u{2}\u{70}\u{26C}\u{3}\u{2}\u{2}\u{2}\u{72}" .
		    "\u{26E}\u{3}\u{2}\u{2}\u{2}\u{74}\u{273}\u{3}\u{2}\u{2}\u{2}\u{76}" .
		    "\u{275}\u{3}\u{2}\u{2}\u{2}\u{78}\u{277}\u{3}\u{2}\u{2}\u{2}\u{7A}" .
		    "\u{27A}\u{3}\u{2}\u{2}\u{2}\u{7C}\u{289}\u{3}\u{2}\u{2}\u{2}\u{7E}" .
		    "\u{28D}\u{3}\u{2}\u{2}\u{2}\u{80}\u{298}\u{3}\u{2}\u{2}\u{2}\u{82}" .
		    "\u{2A3}\u{3}\u{2}\u{2}\u{2}\u{84}\u{2A5}\u{3}\u{2}\u{2}\u{2}\u{86}" .
		    "\u{2AD}\u{3}\u{2}\u{2}\u{2}\u{88}\u{2B1}\u{3}\u{2}\u{2}\u{2}\u{8A}" .
		    "\u{2B3}\u{3}\u{2}\u{2}\u{2}\u{8C}\u{2C4}\u{3}\u{2}\u{2}\u{2}\u{8E}" .
		    "\u{2CE}\u{3}\u{2}\u{2}\u{2}\u{90}\u{2E8}\u{3}\u{2}\u{2}\u{2}\u{92}" .
		    "\u{2FB}\u{3}\u{2}\u{2}\u{2}\u{94}\u{2FD}\u{3}\u{2}\u{2}\u{2}\u{96}" .
		    "\u{30B}\u{3}\u{2}\u{2}\u{2}\u{98}\u{310}\u{3}\u{2}\u{2}\u{2}\u{9A}" .
		    "\u{318}\u{3}\u{2}\u{2}\u{2}\u{9C}\u{31A}\u{3}\u{2}\u{2}\u{2}\u{9E}" .
		    "\u{31C}\u{3}\u{2}\u{2}\u{2}\u{A0}\u{321}\u{3}\u{2}\u{2}\u{2}\u{A2}" .
		    "\u{325}\u{3}\u{2}\u{2}\u{2}\u{A4}\u{331}\u{3}\u{2}\u{2}\u{2}\u{A6}" .
		    "\u{333}\u{3}\u{2}\u{2}\u{2}\u{A8}\u{33C}\u{3}\u{2}\u{2}\u{2}\u{AA}" .
		    "\u{347}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{34E}\u{3}\u{2}\u{2}\u{2}\u{AE}" .
		    "\u{352}\u{3}\u{2}\u{2}\u{2}\u{B0}\u{354}\u{3}\u{2}\u{2}\u{2}\u{B2}" .
		    "\u{365}\u{3}\u{2}\u{2}\u{2}\u{B4}\u{36A}\u{3}\u{2}\u{2}\u{2}\u{B6}" .
		    "\u{36D}\u{3}\u{2}\u{2}\u{2}\u{B8}\u{371}\u{3}\u{2}\u{2}\u{2}\u{BA}" .
		    "\u{375}\u{3}\u{2}\u{2}\u{2}\u{BC}\u{379}\u{3}\u{2}\u{2}\u{2}\u{BE}" .
		    "\u{38D}\u{3}\u{2}\u{2}\u{2}\u{C0}\u{392}\u{3}\u{2}\u{2}\u{2}\u{C2}" .
		    "\u{3A5}\u{3}\u{2}\u{2}\u{2}\u{C4}\u{3A9}\u{3}\u{2}\u{2}\u{2}\u{C6}" .
		    "\u{3AF}\u{3}\u{2}\u{2}\u{2}\u{C8}\u{C9}\u{5}\u{4}\u{3}\u{2}\u{C9}" .
		    "\u{CF}\u{5}\u{C6}\u{64}\u{2}\u{CA}\u{CB}\u{5}\u{6}\u{4}\u{2}\u{CB}" .
		    "\u{CC}\u{5}\u{C6}\u{64}\u{2}\u{CC}\u{CE}\u{3}\u{2}\u{2}\u{2}\u{CD}" .
		    "\u{CA}\u{3}\u{2}\u{2}\u{2}\u{CE}\u{D1}\u{3}\u{2}\u{2}\u{2}\u{CF}\u{CD}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{CF}\u{D0}\u{3}\u{2}\u{2}\u{2}\u{D0}\u{DB}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{D1}\u{CF}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D6}\u{5}\u{1A}" .
		    "\u{E}\u{2}\u{D3}\u{D6}\u{5}\u{1C}\u{F}\u{2}\u{D4}\u{D6}\u{5}\u{C}" .
		    "\u{7}\u{2}\u{D5}\u{D2}\u{3}\u{2}\u{2}\u{2}\u{D5}\u{D3}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{D5}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{D6}\u{D7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D7}\u{D8}\u{5}\u{C6}\u{64}\u{2}\u{D8}\u{DA}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D9}\u{D5}\u{3}\u{2}\u{2}\u{2}\u{DA}\u{DD}\u{3}\u{2}\u{2}\u{2}\u{DB}" .
		    "\u{D9}\u{3}\u{2}\u{2}\u{2}\u{DB}\u{DC}\u{3}\u{2}\u{2}\u{2}\u{DC}\u{DE}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{DD}\u{DB}\u{3}\u{2}\u{2}\u{2}\u{DE}\u{DF}\u{7}" .
		    "\u{2}\u{2}\u{3}\u{DF}\u{3}\u{3}\u{2}\u{2}\u{2}\u{E0}\u{E1}\u{7}\u{10}" .
		    "\u{2}\u{2}\u{E1}\u{E2}\u{7}\u{1D}\u{2}\u{2}\u{E2}\u{5}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E3}\u{EF}\u{7}\u{19}\u{2}\u{2}\u{E4}\u{F0}\u{5}\u{8}\u{5}" .
		    "\u{2}\u{E5}\u{EB}\u{7}\u{1E}\u{2}\u{2}\u{E6}\u{E7}\u{5}\u{8}\u{5}" .
		    "\u{2}\u{E7}\u{E8}\u{5}\u{C6}\u{64}\u{2}\u{E8}\u{EA}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E9}\u{E6}\u{3}\u{2}\u{2}\u{2}\u{EA}\u{ED}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{EB}\u{E9}\u{3}\u{2}\u{2}\u{2}\u{EB}\u{EC}\u{3}\u{2}\u{2}\u{2}\u{EC}" .
		    "\u{EE}\u{3}\u{2}\u{2}\u{2}\u{ED}\u{EB}\u{3}\u{2}\u{2}\u{2}\u{EE}\u{F0}" .
		    "\u{7}\u{1F}\u{2}\u{2}\u{EF}\u{E4}\u{3}\u{2}\u{2}\u{2}\u{EF}\u{E5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F0}\u{7}\u{3}\u{2}\u{2}\u{2}\u{F1}\u{F3}\u{9}" .
		    "\u{2}\u{2}\u{2}\u{F2}\u{F1}\u{3}\u{2}\u{2}\u{2}\u{F2}\u{F3}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{F3}\u{F4}\u{3}\u{2}\u{2}\u{2}\u{F4}\u{F5}\u{5}\u{A}\u{6}" .
		    "\u{2}\u{F5}\u{9}\u{3}\u{2}\u{2}\u{2}\u{F6}\u{F7}\u{5}\u{B4}\u{5B}" .
		    "\u{2}\u{F7}\u{B}\u{3}\u{2}\u{2}\u{2}\u{F8}\u{FC}\u{5}\u{E}\u{8}\u{2}" .
		    "\u{F9}\u{FC}\u{5}\u{16}\u{C}\u{2}\u{FA}\u{FC}\u{5}\u{20}\u{11}\u{2}" .
		    "\u{FB}\u{F8}\u{3}\u{2}\u{2}\u{2}\u{FB}\u{F9}\u{3}\u{2}\u{2}\u{2}\u{FB}" .
		    "\u{FA}\u{3}\u{2}\u{2}\u{2}\u{FC}\u{D}\u{3}\u{2}\u{2}\u{2}\u{FD}\u{109}" .
		    "\u{7}\u{12}\u{2}\u{2}\u{FE}\u{10A}\u{5}\u{10}\u{9}\u{2}\u{FF}\u{105}" .
		    "\u{7}\u{1E}\u{2}\u{2}\u{100}\u{101}\u{5}\u{10}\u{9}\u{2}\u{101}\u{102}" .
		    "\u{5}\u{C6}\u{64}\u{2}\u{102}\u{104}\u{3}\u{2}\u{2}\u{2}\u{103}\u{100}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{104}\u{107}\u{3}\u{2}\u{2}\u{2}\u{105}\u{103}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{105}\u{106}\u{3}\u{2}\u{2}\u{2}\u{106}\u{108}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{107}\u{105}\u{3}\u{2}\u{2}\u{2}\u{108}\u{10A}" .
		    "\u{7}\u{1F}\u{2}\u{2}\u{109}\u{FE}\u{3}\u{2}\u{2}\u{2}\u{109}\u{FF}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{10A}\u{F}\u{3}\u{2}\u{2}\u{2}\u{10B}\u{111}" .
		    "\u{5}\u{12}\u{A}\u{2}\u{10C}\u{10E}\u{5}\u{6C}\u{37}\u{2}\u{10D}\u{10C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{10D}\u{10E}\u{3}\u{2}\u{2}\u{2}\u{10E}\u{10F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{10F}\u{110}\u{7}\u{24}\u{2}\u{2}\u{110}\u{112}" .
		    "\u{5}\u{14}\u{B}\u{2}\u{111}\u{10D}\u{3}\u{2}\u{2}\u{2}\u{111}\u{112}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{112}\u{11}\u{3}\u{2}\u{2}\u{2}\u{113}\u{118}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{114}\u{115}\u{7}\u{25}\u{2}\u{2}\u{115}\u{117}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{116}\u{114}\u{3}\u{2}\u{2}\u{2}\u{117}\u{11A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{118}\u{116}\u{3}\u{2}\u{2}\u{2}\u{118}\u{119}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{119}\u{13}\u{3}\u{2}\u{2}\u{2}\u{11A}\u{118}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{11B}\u{120}\u{5}\u{8E}\u{48}\u{2}\u{11C}\u{11D}" .
		    "\u{7}\u{25}\u{2}\u{2}\u{11D}\u{11F}\u{5}\u{8E}\u{48}\u{2}\u{11E}\u{11C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{11F}\u{122}\u{3}\u{2}\u{2}\u{2}\u{120}\u{11E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{120}\u{121}\u{3}\u{2}\u{2}\u{2}\u{121}\u{15}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{122}\u{120}\u{3}\u{2}\u{2}\u{2}\u{123}\u{12F}" .
		    "\u{7}\u{16}\u{2}\u{2}\u{124}\u{130}\u{5}\u{18}\u{D}\u{2}\u{125}\u{12B}" .
		    "\u{7}\u{1E}\u{2}\u{2}\u{126}\u{127}\u{5}\u{18}\u{D}\u{2}\u{127}\u{128}" .
		    "\u{5}\u{C6}\u{64}\u{2}\u{128}\u{12A}\u{3}\u{2}\u{2}\u{2}\u{129}\u{126}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12A}\u{12D}\u{3}\u{2}\u{2}\u{2}\u{12B}\u{129}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12B}\u{12C}\u{3}\u{2}\u{2}\u{2}\u{12C}\u{12E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12D}\u{12B}\u{3}\u{2}\u{2}\u{2}\u{12E}\u{130}" .
		    "\u{7}\u{1F}\u{2}\u{2}\u{12F}\u{124}\u{3}\u{2}\u{2}\u{2}\u{12F}\u{125}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{130}\u{17}\u{3}\u{2}\u{2}\u{2}\u{131}\u{133}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{132}\u{134}\u{7}\u{24}\u{2}\u{2}\u{133}\u{132}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{133}\u{134}\u{3}\u{2}\u{2}\u{2}\u{134}\u{135}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{135}\u{136}\u{5}\u{6C}\u{37}\u{2}\u{136}\u{19}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{137}\u{138}\u{7}\u{5}\u{2}\u{2}\u{138}\u{139}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{139}\u{13B}\u{5}\u{86}\u{44}\u{2}\u{13A}\u{13C}" .
		    "\u{5}\u{24}\u{13}\u{2}\u{13B}\u{13A}\u{3}\u{2}\u{2}\u{2}\u{13B}\u{13C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{13C}\u{1B}\u{3}\u{2}\u{2}\u{2}\u{13D}\u{13E}" .
		    "\u{7}\u{5}\u{2}\u{2}\u{13E}\u{13F}\u{5}\u{1E}\u{10}\u{2}\u{13F}\u{140}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{140}\u{142}\u{5}\u{86}\u{44}\u{2}\u{141}\u{143}" .
		    "\u{5}\u{24}\u{13}\u{2}\u{142}\u{141}\u{3}\u{2}\u{2}\u{2}\u{142}\u{143}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{143}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{144}\u{145}" .
		    "\u{5}\u{8A}\u{46}\u{2}\u{145}\u{1F}\u{3}\u{2}\u{2}\u{2}\u{146}\u{152}" .
		    "\u{7}\u{1B}\u{2}\u{2}\u{147}\u{153}\u{5}\u{22}\u{12}\u{2}\u{148}\u{14E}" .
		    "\u{7}\u{1E}\u{2}\u{2}\u{149}\u{14A}\u{5}\u{22}\u{12}\u{2}\u{14A}\u{14B}" .
		    "\u{5}\u{C6}\u{64}\u{2}\u{14B}\u{14D}\u{3}\u{2}\u{2}\u{2}\u{14C}\u{149}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{14D}\u{150}\u{3}\u{2}\u{2}\u{2}\u{14E}\u{14C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{14E}\u{14F}\u{3}\u{2}\u{2}\u{2}\u{14F}\u{151}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{150}\u{14E}\u{3}\u{2}\u{2}\u{2}\u{151}\u{153}" .
		    "\u{7}\u{1F}\u{2}\u{2}\u{152}\u{147}\u{3}\u{2}\u{2}\u{2}\u{152}\u{148}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{153}\u{21}\u{3}\u{2}\u{2}\u{2}\u{154}\u{15C}" .
		    "\u{5}\u{12}\u{A}\u{2}\u{155}\u{158}\u{5}\u{6C}\u{37}\u{2}\u{156}\u{157}" .
		    "\u{7}\u{24}\u{2}\u{2}\u{157}\u{159}\u{5}\u{14}\u{B}\u{2}\u{158}\u{156}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{158}\u{159}\u{3}\u{2}\u{2}\u{2}\u{159}\u{15D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{15A}\u{15B}\u{7}\u{24}\u{2}\u{2}\u{15B}\u{15D}" .
		    "\u{5}\u{14}\u{B}\u{2}\u{15C}\u{155}\u{3}\u{2}\u{2}\u{2}\u{15C}\u{15A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{15D}\u{23}\u{3}\u{2}\u{2}\u{2}\u{15E}\u{160}" .
		    "\u{7}\u{20}\u{2}\u{2}\u{15F}\u{161}\u{5}\u{26}\u{14}\u{2}\u{160}\u{15F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{160}\u{161}\u{3}\u{2}\u{2}\u{2}\u{161}\u{162}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{162}\u{163}\u{7}\u{21}\u{2}\u{2}\u{163}\u{25}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{164}\u{165}\u{5}\u{28}\u{15}\u{2}\u{165}\u{166}" .
		    "\u{5}\u{C6}\u{64}\u{2}\u{166}\u{168}\u{3}\u{2}\u{2}\u{2}\u{167}\u{164}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{168}\u{169}\u{3}\u{2}\u{2}\u{2}\u{169}\u{167}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{169}\u{16A}\u{3}\u{2}\u{2}\u{2}\u{16A}\u{27}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{16B}\u{17B}\u{5}\u{C}\u{7}\u{2}\u{16C}\u{17B}" .
		    "\u{5}\u{3A}\u{1E}\u{2}\u{16D}\u{17B}\u{5}\u{2A}\u{16}\u{2}\u{16E}" .
		    "\u{17B}\u{5}\u{6A}\u{36}\u{2}\u{16F}\u{17B}\u{5}\u{3C}\u{1F}\u{2}" .
		    "\u{170}\u{17B}\u{5}\u{3E}\u{20}\u{2}\u{171}\u{17B}\u{5}\u{40}\u{21}" .
		    "\u{2}\u{172}\u{17B}\u{5}\u{42}\u{22}\u{2}\u{173}\u{17B}\u{5}\u{44}" .
		    "\u{23}\u{2}\u{174}\u{17B}\u{5}\u{24}\u{13}\u{2}\u{175}\u{17B}\u{5}" .
		    "\u{48}\u{25}\u{2}\u{176}\u{17B}\u{5}\u{4A}\u{26}\u{2}\u{177}\u{17B}" .
		    "\u{5}\u{5C}\u{2F}\u{2}\u{178}\u{17B}\u{5}\u{64}\u{33}\u{2}\u{179}" .
		    "\u{17B}\u{5}\u{46}\u{24}\u{2}\u{17A}\u{16B}\u{3}\u{2}\u{2}\u{2}\u{17A}" .
		    "\u{16C}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{16D}\u{3}\u{2}\u{2}\u{2}\u{17A}" .
		    "\u{16E}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{16F}\u{3}\u{2}\u{2}\u{2}\u{17A}" .
		    "\u{170}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{171}\u{3}\u{2}\u{2}\u{2}\u{17A}" .
		    "\u{172}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{173}\u{3}\u{2}\u{2}\u{2}\u{17A}" .
		    "\u{174}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{175}\u{3}\u{2}\u{2}\u{2}\u{17A}" .
		    "\u{176}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{177}\u{3}\u{2}\u{2}\u{2}\u{17A}" .
		    "\u{178}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{179}\u{3}\u{2}\u{2}\u{2}\u{17B}" .
		    "\u{29}\u{3}\u{2}\u{2}\u{2}\u{17C}\u{183}\u{5}\u{2E}\u{18}\u{2}\u{17D}" .
		    "\u{183}\u{5}\u{30}\u{19}\u{2}\u{17E}\u{183}\u{5}\u{32}\u{1A}\u{2}" .
		    "\u{17F}\u{183}\u{5}\u{2C}\u{17}\u{2}\u{180}\u{183}\u{5}\u{36}\u{1C}" .
		    "\u{2}\u{181}\u{183}\u{5}\u{38}\u{1D}\u{2}\u{182}\u{17C}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{182}\u{17D}\u{3}\u{2}\u{2}\u{2}\u{182}\u{17E}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{182}\u{17F}\u{3}\u{2}\u{2}\u{2}\u{182}\u{180}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{182}\u{181}\u{3}\u{2}\u{2}\u{2}\u{183}\u{2B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{184}\u{185}\u{5}\u{8E}\u{48}\u{2}\u{185}\u{2D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{186}\u{187}\u{5}\u{8E}\u{48}\u{2}\u{187}\u{188}\u{7}" .
		    "\u{41}\u{2}\u{2}\u{188}\u{189}\u{5}\u{8E}\u{48}\u{2}\u{189}\u{2F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{18A}\u{18B}\u{5}\u{8E}\u{48}\u{2}\u{18B}\u{18C}" .
		    "\u{9}\u{3}\u{2}\u{2}\u{18C}\u{31}\u{3}\u{2}\u{2}\u{2}\u{18D}\u{18E}" .
		    "\u{5}\u{14}\u{B}\u{2}\u{18E}\u{18F}\u{5}\u{34}\u{1B}\u{2}\u{18F}\u{190}" .
		    "\u{5}\u{14}\u{B}\u{2}\u{190}\u{33}\u{3}\u{2}\u{2}\u{2}\u{191}\u{193}" .
		    "\u{9}\u{4}\u{2}\u{2}\u{192}\u{191}\u{3}\u{2}\u{2}\u{2}\u{192}\u{193}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{193}\u{194}\u{3}\u{2}\u{2}\u{2}\u{194}\u{195}" .
		    "\u{7}\u{24}\u{2}\u{2}\u{195}\u{35}\u{3}\u{2}\u{2}\u{2}\u{196}\u{197}" .
		    "\u{5}\u{12}\u{A}\u{2}\u{197}\u{198}\u{7}\u{2B}\u{2}\u{2}\u{198}\u{199}" .
		    "\u{5}\u{14}\u{B}\u{2}\u{199}\u{37}\u{3}\u{2}\u{2}\u{2}\u{19A}\u{19B}" .
		    "\u{7}\u{26}\u{2}\u{2}\u{19B}\u{39}\u{3}\u{2}\u{2}\u{2}\u{19C}\u{19D}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{19D}\u{19F}\u{7}\u{27}\u{2}\u{2}\u{19E}\u{1A0}" .
		    "\u{5}\u{28}\u{15}\u{2}\u{19F}\u{19E}\u{3}\u{2}\u{2}\u{2}\u{19F}\u{1A0}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1A0}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{1A1}\u{1A3}" .
		    "\u{7}\u{1A}\u{2}\u{2}\u{1A2}\u{1A4}\u{5}\u{14}\u{B}\u{2}\u{1A3}\u{1A2}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1A3}\u{1A4}\u{3}\u{2}\u{2}\u{2}\u{1A4}\u{3D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1A5}\u{1A7}\u{7}\u{3}\u{2}\u{2}\u{1A6}\u{1A8}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{1A7}\u{1A6}\u{3}\u{2}\u{2}\u{2}\u{1A7}\u{1A8}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1A8}\u{3F}\u{3}\u{2}\u{2}\u{2}\u{1A9}\u{1AB}" .
		    "\u{7}\u{17}\u{2}\u{2}\u{1AA}\u{1AC}\u{7}\u{1D}\u{2}\u{2}\u{1AB}\u{1AA}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1AB}\u{1AC}\u{3}\u{2}\u{2}\u{2}\u{1AC}\u{41}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1AD}\u{1AE}\u{7}\u{F}\u{2}\u{2}\u{1AE}\u{1AF}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{1AF}\u{43}\u{3}\u{2}\u{2}\u{2}\u{1B0}\u{1B1}" .
		    "\u{7}\u{13}\u{2}\u{2}\u{1B1}\u{45}\u{3}\u{2}\u{2}\u{2}\u{1B2}\u{1B3}" .
		    "\u{7}\u{9}\u{2}\u{2}\u{1B3}\u{1B4}\u{5}\u{8E}\u{48}\u{2}\u{1B4}\u{47}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1B5}\u{1B9}\u{7}\u{14}\u{2}\u{2}\u{1B6}\u{1B7}" .
		    "\u{5}\u{2A}\u{16}\u{2}\u{1B7}\u{1B8}\u{7}\u{26}\u{2}\u{2}\u{1B8}\u{1BA}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1B9}\u{1B6}\u{3}\u{2}\u{2}\u{2}\u{1B9}\u{1BA}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1BA}\u{1BB}\u{3}\u{2}\u{2}\u{2}\u{1BB}\u{1BC}" .
		    "\u{5}\u{8E}\u{48}\u{2}\u{1BC}\u{1C2}\u{5}\u{24}\u{13}\u{2}\u{1BD}" .
		    "\u{1C0}\u{7}\u{E}\u{2}\u{2}\u{1BE}\u{1C1}\u{5}\u{48}\u{25}\u{2}\u{1BF}" .
		    "\u{1C1}\u{5}\u{24}\u{13}\u{2}\u{1C0}\u{1BE}\u{3}\u{2}\u{2}\u{2}\u{1C0}" .
		    "\u{1BF}\u{3}\u{2}\u{2}\u{2}\u{1C1}\u{1C3}\u{3}\u{2}\u{2}\u{2}\u{1C2}" .
		    "\u{1BD}\u{3}\u{2}\u{2}\u{2}\u{1C2}\u{1C3}\u{3}\u{2}\u{2}\u{2}\u{1C3}" .
		    "\u{49}\u{3}\u{2}\u{2}\u{2}\u{1C4}\u{1C7}\u{5}\u{4C}\u{27}\u{2}\u{1C5}" .
		    "\u{1C7}\u{5}\u{52}\u{2A}\u{2}\u{1C6}\u{1C4}\u{3}\u{2}\u{2}\u{2}\u{1C6}" .
		    "\u{1C5}\u{3}\u{2}\u{2}\u{2}\u{1C7}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{1C8}" .
		    "\u{1CC}\u{7}\u{11}\u{2}\u{2}\u{1C9}\u{1CA}\u{5}\u{2A}\u{16}\u{2}\u{1CA}" .
		    "\u{1CB}\u{7}\u{26}\u{2}\u{2}\u{1CB}\u{1CD}\u{3}\u{2}\u{2}\u{2}\u{1CC}" .
		    "\u{1C9}\u{3}\u{2}\u{2}\u{2}\u{1CC}\u{1CD}\u{3}\u{2}\u{2}\u{2}\u{1CD}" .
		    "\u{1CF}\u{3}\u{2}\u{2}\u{2}\u{1CE}\u{1D0}\u{5}\u{8E}\u{48}\u{2}\u{1CF}" .
		    "\u{1CE}\u{3}\u{2}\u{2}\u{2}\u{1CF}\u{1D0}\u{3}\u{2}\u{2}\u{2}\u{1D0}" .
		    "\u{1D1}\u{3}\u{2}\u{2}\u{2}\u{1D1}\u{1D5}\u{7}\u{20}\u{2}\u{2}\u{1D2}" .
		    "\u{1D4}\u{5}\u{4E}\u{28}\u{2}\u{1D3}\u{1D2}\u{3}\u{2}\u{2}\u{2}\u{1D4}" .
		    "\u{1D7}\u{3}\u{2}\u{2}\u{2}\u{1D5}\u{1D3}\u{3}\u{2}\u{2}\u{2}\u{1D5}" .
		    "\u{1D6}\u{3}\u{2}\u{2}\u{2}\u{1D6}\u{1D8}\u{3}\u{2}\u{2}\u{2}\u{1D7}" .
		    "\u{1D5}\u{3}\u{2}\u{2}\u{2}\u{1D8}\u{1D9}\u{7}\u{21}\u{2}\u{2}\u{1D9}" .
		    "\u{4D}\u{3}\u{2}\u{2}\u{2}\u{1DA}\u{1DB}\u{5}\u{50}\u{29}\u{2}\u{1DB}" .
		    "\u{1DD}\u{7}\u{27}\u{2}\u{2}\u{1DC}\u{1DE}\u{5}\u{26}\u{14}\u{2}\u{1DD}" .
		    "\u{1DC}\u{3}\u{2}\u{2}\u{2}\u{1DD}\u{1DE}\u{3}\u{2}\u{2}\u{2}\u{1DE}" .
		    "\u{4F}\u{3}\u{2}\u{2}\u{2}\u{1DF}\u{1E0}\u{7}\u{8}\u{2}\u{2}\u{1E0}" .
		    "\u{1E3}\u{5}\u{14}\u{B}\u{2}\u{1E1}\u{1E3}\u{7}\u{4}\u{2}\u{2}\u{1E2}" .
		    "\u{1DF}\u{3}\u{2}\u{2}\u{2}\u{1E2}\u{1E1}\u{3}\u{2}\u{2}\u{2}\u{1E3}" .
		    "\u{51}\u{3}\u{2}\u{2}\u{2}\u{1E4}\u{1E8}\u{7}\u{11}\u{2}\u{2}\u{1E5}" .
		    "\u{1E6}\u{5}\u{2A}\u{16}\u{2}\u{1E6}\u{1E7}\u{7}\u{26}\u{2}\u{2}\u{1E7}" .
		    "\u{1E9}\u{3}\u{2}\u{2}\u{2}\u{1E8}\u{1E5}\u{3}\u{2}\u{2}\u{2}\u{1E8}" .
		    "\u{1E9}\u{3}\u{2}\u{2}\u{2}\u{1E9}\u{1EA}\u{3}\u{2}\u{2}\u{2}\u{1EA}" .
		    "\u{1EB}\u{5}\u{54}\u{2B}\u{2}\u{1EB}\u{1EF}\u{7}\u{20}\u{2}\u{2}\u{1EC}" .
		    "\u{1EE}\u{5}\u{56}\u{2C}\u{2}\u{1ED}\u{1EC}\u{3}\u{2}\u{2}\u{2}\u{1EE}" .
		    "\u{1F1}\u{3}\u{2}\u{2}\u{2}\u{1EF}\u{1ED}\u{3}\u{2}\u{2}\u{2}\u{1EF}" .
		    "\u{1F0}\u{3}\u{2}\u{2}\u{2}\u{1F0}\u{1F2}\u{3}\u{2}\u{2}\u{2}\u{1F1}" .
		    "\u{1EF}\u{3}\u{2}\u{2}\u{2}\u{1F2}\u{1F3}\u{7}\u{21}\u{2}\u{2}\u{1F3}" .
		    "\u{53}\u{3}\u{2}\u{2}\u{2}\u{1F4}\u{1F5}\u{7}\u{1D}\u{2}\u{2}\u{1F5}" .
		    "\u{1F7}\u{7}\u{2B}\u{2}\u{2}\u{1F6}\u{1F4}\u{3}\u{2}\u{2}\u{2}\u{1F6}" .
		    "\u{1F7}\u{3}\u{2}\u{2}\u{2}\u{1F7}\u{1F8}\u{3}\u{2}\u{2}\u{2}\u{1F8}" .
		    "\u{1F9}\u{5}\u{90}\u{49}\u{2}\u{1F9}\u{1FA}\u{7}\u{28}\u{2}\u{2}\u{1FA}" .
		    "\u{1FB}\u{7}\u{1E}\u{2}\u{2}\u{1FB}\u{1FC}\u{7}\u{16}\u{2}\u{2}\u{1FC}" .
		    "\u{1FD}\u{7}\u{1F}\u{2}\u{2}\u{1FD}\u{55}\u{3}\u{2}\u{2}\u{2}\u{1FE}" .
		    "\u{1FF}\u{5}\u{58}\u{2D}\u{2}\u{1FF}\u{201}\u{7}\u{27}\u{2}\u{2}\u{200}" .
		    "\u{202}\u{5}\u{26}\u{14}\u{2}\u{201}\u{200}\u{3}\u{2}\u{2}\u{2}\u{201}" .
		    "\u{202}\u{3}\u{2}\u{2}\u{2}\u{202}\u{57}\u{3}\u{2}\u{2}\u{2}\u{203}" .
		    "\u{204}\u{7}\u{8}\u{2}\u{2}\u{204}\u{207}\u{5}\u{5A}\u{2E}\u{2}\u{205}" .
		    "\u{207}\u{7}\u{4}\u{2}\u{2}\u{206}\u{203}\u{3}\u{2}\u{2}\u{2}\u{206}" .
		    "\u{205}\u{3}\u{2}\u{2}\u{2}\u{207}\u{59}\u{3}\u{2}\u{2}\u{2}\u{208}" .
		    "\u{20B}\u{5}\u{6C}\u{37}\u{2}\u{209}\u{20B}\u{7}\u{1C}\u{2}\u{2}\u{20A}" .
		    "\u{208}\u{3}\u{2}\u{2}\u{2}\u{20A}\u{209}\u{3}\u{2}\u{2}\u{2}\u{20B}" .
		    "\u{213}\u{3}\u{2}\u{2}\u{2}\u{20C}\u{20F}\u{7}\u{25}\u{2}\u{2}\u{20D}" .
		    "\u{210}\u{5}\u{6C}\u{37}\u{2}\u{20E}\u{210}\u{7}\u{1C}\u{2}\u{2}\u{20F}" .
		    "\u{20D}\u{3}\u{2}\u{2}\u{2}\u{20F}\u{20E}\u{3}\u{2}\u{2}\u{2}\u{210}" .
		    "\u{212}\u{3}\u{2}\u{2}\u{2}\u{211}\u{20C}\u{3}\u{2}\u{2}\u{2}\u{212}" .
		    "\u{215}\u{3}\u{2}\u{2}\u{2}\u{213}\u{211}\u{3}\u{2}\u{2}\u{2}\u{213}" .
		    "\u{214}\u{3}\u{2}\u{2}\u{2}\u{214}\u{5B}\u{3}\u{2}\u{2}\u{2}\u{215}" .
		    "\u{213}\u{3}\u{2}\u{2}\u{2}\u{216}\u{217}\u{7}\u{7}\u{2}\u{2}\u{217}" .
		    "\u{21B}\u{7}\u{20}\u{2}\u{2}\u{218}\u{21A}\u{5}\u{5E}\u{30}\u{2}\u{219}" .
		    "\u{218}\u{3}\u{2}\u{2}\u{2}\u{21A}\u{21D}\u{3}\u{2}\u{2}\u{2}\u{21B}" .
		    "\u{219}\u{3}\u{2}\u{2}\u{2}\u{21B}\u{21C}\u{3}\u{2}\u{2}\u{2}\u{21C}" .
		    "\u{21E}\u{3}\u{2}\u{2}\u{2}\u{21D}\u{21B}\u{3}\u{2}\u{2}\u{2}\u{21E}" .
		    "\u{21F}\u{7}\u{21}\u{2}\u{2}\u{21F}\u{5D}\u{3}\u{2}\u{2}\u{2}\u{220}" .
		    "\u{221}\u{5}\u{60}\u{31}\u{2}\u{221}\u{223}\u{7}\u{27}\u{2}\u{2}\u{222}" .
		    "\u{224}\u{5}\u{26}\u{14}\u{2}\u{223}\u{222}\u{3}\u{2}\u{2}\u{2}\u{223}" .
		    "\u{224}\u{3}\u{2}\u{2}\u{2}\u{224}\u{5F}\u{3}\u{2}\u{2}\u{2}\u{225}" .
		    "\u{228}\u{7}\u{8}\u{2}\u{2}\u{226}\u{229}\u{5}\u{2E}\u{18}\u{2}\u{227}" .
		    "\u{229}\u{5}\u{62}\u{32}\u{2}\u{228}\u{226}\u{3}\u{2}\u{2}\u{2}\u{228}" .
		    "\u{227}\u{3}\u{2}\u{2}\u{2}\u{229}\u{22C}\u{3}\u{2}\u{2}\u{2}\u{22A}" .
		    "\u{22C}\u{7}\u{4}\u{2}\u{2}\u{22B}\u{225}\u{3}\u{2}\u{2}\u{2}\u{22B}" .
		    "\u{22A}\u{3}\u{2}\u{2}\u{2}\u{22C}\u{61}\u{3}\u{2}\u{2}\u{2}\u{22D}" .
		    "\u{22E}\u{5}\u{14}\u{B}\u{2}\u{22E}\u{22F}\u{7}\u{24}\u{2}\u{2}\u{22F}" .
		    "\u{234}\u{3}\u{2}\u{2}\u{2}\u{230}\u{231}\u{5}\u{12}\u{A}\u{2}\u{231}" .
		    "\u{232}\u{7}\u{2B}\u{2}\u{2}\u{232}\u{234}\u{3}\u{2}\u{2}\u{2}\u{233}" .
		    "\u{22D}\u{3}\u{2}\u{2}\u{2}\u{233}\u{230}\u{3}\u{2}\u{2}\u{2}\u{233}" .
		    "\u{234}\u{3}\u{2}\u{2}\u{2}\u{234}\u{235}\u{3}\u{2}\u{2}\u{2}\u{235}" .
		    "\u{236}\u{5}\u{8E}\u{48}\u{2}\u{236}\u{63}\u{3}\u{2}\u{2}\u{2}\u{237}" .
		    "\u{23B}\u{7}\u{18}\u{2}\u{2}\u{238}\u{23C}\u{5}\u{8E}\u{48}\u{2}\u{239}" .
		    "\u{23C}\u{5}\u{66}\u{34}\u{2}\u{23A}\u{23C}\u{5}\u{68}\u{35}\u{2}" .
		    "\u{23B}\u{238}\u{3}\u{2}\u{2}\u{2}\u{23B}\u{239}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{23B}\u{23A}\u{3}\u{2}\u{2}\u{2}\u{23B}\u{23C}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{23C}\u{23D}\u{3}\u{2}\u{2}\u{2}\u{23D}\u{23E}\u{5}\u{24}\u{13}" .
		    "\u{2}\u{23E}\u{65}\u{3}\u{2}\u{2}\u{2}\u{23F}\u{241}\u{5}\u{2A}\u{16}" .
		    "\u{2}\u{240}\u{23F}\u{3}\u{2}\u{2}\u{2}\u{240}\u{241}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{241}\u{242}\u{3}\u{2}\u{2}\u{2}\u{242}\u{244}\u{7}\u{26}\u{2}" .
		    "\u{2}\u{243}\u{245}\u{5}\u{8E}\u{48}\u{2}\u{244}\u{243}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{244}\u{245}\u{3}\u{2}\u{2}\u{2}\u{245}\u{246}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{246}\u{248}\u{7}\u{26}\u{2}\u{2}\u{247}\u{249}\u{5}\u{2A}" .
		    "\u{16}\u{2}\u{248}\u{247}\u{3}\u{2}\u{2}\u{2}\u{248}\u{249}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{249}\u{67}\u{3}\u{2}\u{2}\u{2}\u{24A}\u{24B}\u{5}\u{14}" .
		    "\u{B}\u{2}\u{24B}\u{24C}\u{7}\u{24}\u{2}\u{2}\u{24C}\u{251}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{24D}\u{24E}\u{5}\u{12}\u{A}\u{2}\u{24E}\u{24F}\u{7}\u{2B}" .
		    "\u{2}\u{2}\u{24F}\u{251}\u{3}\u{2}\u{2}\u{2}\u{250}\u{24A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{250}\u{24D}\u{3}\u{2}\u{2}\u{2}\u{250}\u{251}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{251}\u{252}\u{3}\u{2}\u{2}\u{2}\u{252}\u{253}\u{7}\u{15}" .
		    "\u{2}\u{2}\u{253}\u{254}\u{5}\u{8E}\u{48}\u{2}\u{254}\u{69}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{255}\u{256}\u{7}\u{A}\u{2}\u{2}\u{256}\u{257}\u{5}\u{8E}" .
		    "\u{48}\u{2}\u{257}\u{6B}\u{3}\u{2}\u{2}\u{2}\u{258}\u{25F}\u{5}\u{6E}" .
		    "\u{38}\u{2}\u{259}\u{25F}\u{5}\u{70}\u{39}\u{2}\u{25A}\u{25B}\u{7}" .
		    "\u{1E}\u{2}\u{2}\u{25B}\u{25C}\u{5}\u{6C}\u{37}\u{2}\u{25C}\u{25D}" .
		    "\u{7}\u{1F}\u{2}\u{2}\u{25D}\u{25F}\u{3}\u{2}\u{2}\u{2}\u{25E}\u{258}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{25E}\u{259}\u{3}\u{2}\u{2}\u{2}\u{25E}\u{25A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{25F}\u{6D}\u{3}\u{2}\u{2}\u{2}\u{260}\u{263}" .
		    "\u{5}\u{A0}\u{51}\u{2}\u{261}\u{263}\u{7}\u{1D}\u{2}\u{2}\u{262}\u{260}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{262}\u{261}\u{3}\u{2}\u{2}\u{2}\u{263}\u{6F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{264}\u{26D}\u{5}\u{72}\u{3A}\u{2}\u{265}\u{26D}" .
		    "\u{5}\u{B0}\u{59}\u{2}\u{266}\u{26D}\u{5}\u{78}\u{3D}\u{2}\u{267}" .
		    "\u{26D}\u{5}\u{84}\u{43}\u{2}\u{268}\u{26D}\u{5}\u{7A}\u{3E}\u{2}" .
		    "\u{269}\u{26D}\u{5}\u{7C}\u{3F}\u{2}\u{26A}\u{26D}\u{5}\u{7E}\u{40}" .
		    "\u{2}\u{26B}\u{26D}\u{5}\u{80}\u{41}\u{2}\u{26C}\u{264}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{26C}\u{265}\u{3}\u{2}\u{2}\u{2}\u{26C}\u{266}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{26C}\u{267}\u{3}\u{2}\u{2}\u{2}\u{26C}\u{268}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{26C}\u{269}\u{3}\u{2}\u{2}\u{2}\u{26C}\u{26A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{26C}\u{26B}\u{3}\u{2}\u{2}\u{2}\u{26D}\u{71}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{26E}\u{26F}\u{7}\u{22}\u{2}\u{2}\u{26F}\u{270}\u{5}\u{74}" .
		    "\u{3B}\u{2}\u{270}\u{271}\u{7}\u{23}\u{2}\u{2}\u{271}\u{272}\u{5}" .
		    "\u{76}\u{3C}\u{2}\u{272}\u{73}\u{3}\u{2}\u{2}\u{2}\u{273}\u{274}\u{5}" .
		    "\u{8E}\u{48}\u{2}\u{274}\u{75}\u{3}\u{2}\u{2}\u{2}\u{275}\u{276}\u{5}" .
		    "\u{6C}\u{37}\u{2}\u{276}\u{77}\u{3}\u{2}\u{2}\u{2}\u{277}\u{278}\u{7}" .
		    "\u{3F}\u{2}\u{2}\u{278}\u{279}\u{5}\u{6C}\u{37}\u{2}\u{279}\u{79}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{27A}\u{27B}\u{7}\u{6}\u{2}\u{2}\u{27B}\u{284}" .
		    "\u{7}\u{20}\u{2}\u{2}\u{27C}\u{27F}\u{5}\u{82}\u{42}\u{2}\u{27D}\u{27F}" .
		    "\u{5}\u{6E}\u{38}\u{2}\u{27E}\u{27C}\u{3}\u{2}\u{2}\u{2}\u{27E}\u{27D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{27F}\u{280}\u{3}\u{2}\u{2}\u{2}\u{280}\u{281}" .
		    "\u{5}\u{C6}\u{64}\u{2}\u{281}\u{283}\u{3}\u{2}\u{2}\u{2}\u{282}\u{27E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{283}\u{286}\u{3}\u{2}\u{2}\u{2}\u{284}\u{282}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{284}\u{285}\u{3}\u{2}\u{2}\u{2}\u{285}\u{287}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{286}\u{284}\u{3}\u{2}\u{2}\u{2}\u{287}\u{288}" .
		    "\u{7}\u{21}\u{2}\u{2}\u{288}\u{7B}\u{3}\u{2}\u{2}\u{2}\u{289}\u{28A}" .
		    "\u{7}\u{22}\u{2}\u{2}\u{28A}\u{28B}\u{7}\u{23}\u{2}\u{2}\u{28B}\u{28C}" .
		    "\u{5}\u{76}\u{3C}\u{2}\u{28C}\u{7D}\u{3}\u{2}\u{2}\u{2}\u{28D}\u{28E}" .
		    "\u{7}\u{B}\u{2}\u{2}\u{28E}\u{28F}\u{7}\u{22}\u{2}\u{2}\u{28F}\u{290}" .
		    "\u{5}\u{6C}\u{37}\u{2}\u{290}\u{291}\u{7}\u{23}\u{2}\u{2}\u{291}\u{292}" .
		    "\u{5}\u{76}\u{3C}\u{2}\u{292}\u{7F}\u{3}\u{2}\u{2}\u{2}\u{293}\u{299}" .
		    "\u{7}\u{D}\u{2}\u{2}\u{294}\u{295}\u{7}\u{D}\u{2}\u{2}\u{295}\u{299}" .
		    "\u{7}\u{41}\u{2}\u{2}\u{296}\u{297}\u{7}\u{41}\u{2}\u{2}\u{297}\u{299}" .
		    "\u{7}\u{D}\u{2}\u{2}\u{298}\u{293}\u{3}\u{2}\u{2}\u{2}\u{298}\u{294}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{298}\u{296}\u{3}\u{2}\u{2}\u{2}\u{299}\u{29A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{29A}\u{29B}\u{5}\u{76}\u{3C}\u{2}\u{29B}\u{81}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{29C}\u{29D}\u{6}\u{42}\u{2}\u{2}\u{29D}\u{29E}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{29E}\u{29F}\u{5}\u{8A}\u{46}\u{2}\u{29F}\u{2A0}" .
		    "\u{5}\u{88}\u{45}\u{2}\u{2A0}\u{2A4}\u{3}\u{2}\u{2}\u{2}\u{2A1}\u{2A2}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{2A2}\u{2A4}\u{5}\u{8A}\u{46}\u{2}\u{2A3}\u{29C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2A3}\u{2A1}\u{3}\u{2}\u{2}\u{2}\u{2A4}\u{83}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2A5}\u{2A6}\u{7}\u{5}\u{2}\u{2}\u{2A6}\u{2A7}" .
		    "\u{5}\u{86}\u{44}\u{2}\u{2A7}\u{85}\u{3}\u{2}\u{2}\u{2}\u{2A8}\u{2A9}" .
		    "\u{6}\u{44}\u{3}\u{2}\u{2A9}\u{2AA}\u{5}\u{8A}\u{46}\u{2}\u{2AA}\u{2AB}" .
		    "\u{5}\u{88}\u{45}\u{2}\u{2AB}\u{2AE}\u{3}\u{2}\u{2}\u{2}\u{2AC}\u{2AE}" .
		    "\u{5}\u{8A}\u{46}\u{2}\u{2AD}\u{2A8}\u{3}\u{2}\u{2}\u{2}\u{2AD}\u{2AC}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2AE}\u{87}\u{3}\u{2}\u{2}\u{2}\u{2AF}\u{2B2}" .
		    "\u{5}\u{8A}\u{46}\u{2}\u{2B0}\u{2B2}\u{5}\u{6C}\u{37}\u{2}\u{2B1}" .
		    "\u{2AF}\u{3}\u{2}\u{2}\u{2}\u{2B1}\u{2B0}\u{3}\u{2}\u{2}\u{2}\u{2B2}" .
		    "\u{89}\u{3}\u{2}\u{2}\u{2}\u{2B3}\u{2BF}\u{7}\u{1E}\u{2}\u{2}\u{2B4}" .
		    "\u{2B9}\u{5}\u{8C}\u{47}\u{2}\u{2B5}\u{2B6}\u{7}\u{25}\u{2}\u{2}\u{2B6}" .
		    "\u{2B8}\u{5}\u{8C}\u{47}\u{2}\u{2B7}\u{2B5}\u{3}\u{2}\u{2}\u{2}\u{2B8}" .
		    "\u{2BB}\u{3}\u{2}\u{2}\u{2}\u{2B9}\u{2B7}\u{3}\u{2}\u{2}\u{2}\u{2B9}" .
		    "\u{2BA}\u{3}\u{2}\u{2}\u{2}\u{2BA}\u{2BD}\u{3}\u{2}\u{2}\u{2}\u{2BB}" .
		    "\u{2B9}\u{3}\u{2}\u{2}\u{2}\u{2BC}\u{2BE}\u{7}\u{25}\u{2}\u{2}\u{2BD}" .
		    "\u{2BC}\u{3}\u{2}\u{2}\u{2}\u{2BD}\u{2BE}\u{3}\u{2}\u{2}\u{2}\u{2BE}" .
		    "\u{2C0}\u{3}\u{2}\u{2}\u{2}\u{2BF}\u{2B4}\u{3}\u{2}\u{2}\u{2}\u{2BF}" .
		    "\u{2C0}\u{3}\u{2}\u{2}\u{2}\u{2C0}\u{2C1}\u{3}\u{2}\u{2}\u{2}\u{2C1}" .
		    "\u{2C2}\u{7}\u{1F}\u{2}\u{2}\u{2C2}\u{8B}\u{3}\u{2}\u{2}\u{2}\u{2C3}" .
		    "\u{2C5}\u{5}\u{12}\u{A}\u{2}\u{2C4}\u{2C3}\u{3}\u{2}\u{2}\u{2}\u{2C4}" .
		    "\u{2C5}\u{3}\u{2}\u{2}\u{2}\u{2C5}\u{2C7}\u{3}\u{2}\u{2}\u{2}\u{2C6}" .
		    "\u{2C8}\u{7}\u{2C}\u{2}\u{2}\u{2C7}\u{2C6}\u{3}\u{2}\u{2}\u{2}\u{2C7}" .
		    "\u{2C8}\u{3}\u{2}\u{2}\u{2}\u{2C8}\u{2C9}\u{3}\u{2}\u{2}\u{2}\u{2C9}" .
		    "\u{2CA}\u{5}\u{6C}\u{37}\u{2}\u{2CA}\u{8D}\u{3}\u{2}\u{2}\u{2}\u{2CB}" .
		    "\u{2CC}\u{8}\u{48}\u{1}\u{2}\u{2CC}\u{2CF}\u{5}\u{90}\u{49}\u{2}\u{2CD}" .
		    "\u{2CF}\u{5}\u{92}\u{4A}\u{2}\u{2CE}\u{2CB}\u{3}\u{2}\u{2}\u{2}\u{2CE}" .
		    "\u{2CD}\u{3}\u{2}\u{2}\u{2}\u{2CF}\u{2E1}\u{3}\u{2}\u{2}\u{2}\u{2D0}" .
		    "\u{2D1}\u{C}\u{7}\u{2}\u{2}\u{2D1}\u{2D2}\u{9}\u{5}\u{2}\u{2}\u{2D2}" .
		    "\u{2E0}\u{5}\u{8E}\u{48}\u{8}\u{2D3}\u{2D4}\u{C}\u{6}\u{2}\u{2}\u{2D4}" .
		    "\u{2D5}\u{9}\u{6}\u{2}\u{2}\u{2D5}\u{2E0}\u{5}\u{8E}\u{48}\u{7}\u{2D6}" .
		    "\u{2D7}\u{C}\u{5}\u{2}\u{2}\u{2D7}\u{2D8}\u{9}\u{7}\u{2}\u{2}\u{2D8}" .
		    "\u{2E0}\u{5}\u{8E}\u{48}\u{6}\u{2D9}\u{2DA}\u{C}\u{4}\u{2}\u{2}\u{2DA}" .
		    "\u{2DB}\u{7}\u{2E}\u{2}\u{2}\u{2DB}\u{2E0}\u{5}\u{8E}\u{48}\u{5}\u{2DC}" .
		    "\u{2DD}\u{C}\u{3}\u{2}\u{2}\u{2DD}\u{2DE}\u{7}\u{2D}\u{2}\u{2}\u{2DE}" .
		    "\u{2E0}\u{5}\u{8E}\u{48}\u{4}\u{2DF}\u{2D0}\u{3}\u{2}\u{2}\u{2}\u{2DF}" .
		    "\u{2D3}\u{3}\u{2}\u{2}\u{2}\u{2DF}\u{2D6}\u{3}\u{2}\u{2}\u{2}\u{2DF}" .
		    "\u{2D9}\u{3}\u{2}\u{2}\u{2}\u{2DF}\u{2DC}\u{3}\u{2}\u{2}\u{2}\u{2E0}" .
		    "\u{2E3}\u{3}\u{2}\u{2}\u{2}\u{2E1}\u{2DF}\u{3}\u{2}\u{2}\u{2}\u{2E1}" .
		    "\u{2E2}\u{3}\u{2}\u{2}\u{2}\u{2E2}\u{8F}\u{3}\u{2}\u{2}\u{2}\u{2E3}" .
		    "\u{2E1}\u{3}\u{2}\u{2}\u{2}\u{2E4}\u{2E5}\u{8}\u{49}\u{1}\u{2}\u{2E5}" .
		    "\u{2E9}\u{5}\u{96}\u{4C}\u{2}\u{2E6}\u{2E9}\u{5}\u{94}\u{4B}\u{2}" .
		    "\u{2E7}\u{2E9}\u{5}\u{C2}\u{62}\u{2}\u{2E8}\u{2E4}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2E8}\u{2E6}\u{3}\u{2}\u{2}\u{2}\u{2E8}\u{2E7}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2E9}\u{2F5}\u{3}\u{2}\u{2}\u{2}\u{2EA}\u{2F1}\u{C}\u{3}\u{2}" .
		    "\u{2}\u{2EB}\u{2EC}\u{7}\u{28}\u{2}\u{2}\u{2EC}\u{2F2}\u{7}\u{1D}" .
		    "\u{2}\u{2}\u{2ED}\u{2F2}\u{5}\u{BA}\u{5E}\u{2}\u{2EE}\u{2F2}\u{5}" .
		    "\u{BC}\u{5F}\u{2}\u{2EF}\u{2F2}\u{5}\u{BE}\u{60}\u{2}\u{2F0}\u{2F2}" .
		    "\u{5}\u{C0}\u{61}\u{2}\u{2F1}\u{2EB}\u{3}\u{2}\u{2}\u{2}\u{2F1}\u{2ED}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2F1}\u{2EE}\u{3}\u{2}\u{2}\u{2}\u{2F1}\u{2EF}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2F1}\u{2F0}\u{3}\u{2}\u{2}\u{2}\u{2F2}\u{2F4}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2F3}\u{2EA}\u{3}\u{2}\u{2}\u{2}\u{2F4}\u{2F7}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2F5}\u{2F3}\u{3}\u{2}\u{2}\u{2}\u{2F5}\u{2F6}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2F6}\u{91}\u{3}\u{2}\u{2}\u{2}\u{2F7}\u{2F5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2F8}\u{2FC}\u{5}\u{90}\u{49}\u{2}\u{2F9}\u{2FA}" .
		    "\u{9}\u{8}\u{2}\u{2}\u{2FA}\u{2FC}\u{5}\u{8E}\u{48}\u{2}\u{2FB}\u{2F8}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2FB}\u{2F9}\u{3}\u{2}\u{2}\u{2}\u{2FC}\u{93}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2FD}\u{2FE}\u{5}\u{6C}\u{37}\u{2}\u{2FE}\u{2FF}" .
		    "\u{7}\u{1E}\u{2}\u{2}\u{2FF}\u{301}\u{5}\u{8E}\u{48}\u{2}\u{300}\u{302}" .
		    "\u{7}\u{25}\u{2}\u{2}\u{301}\u{300}\u{3}\u{2}\u{2}\u{2}\u{301}\u{302}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{302}\u{303}\u{3}\u{2}\u{2}\u{2}\u{303}\u{304}" .
		    "\u{7}\u{1F}\u{2}\u{2}\u{304}\u{95}\u{3}\u{2}\u{2}\u{2}\u{305}\u{30C}" .
		    "\u{5}\u{98}\u{4D}\u{2}\u{306}\u{30C}\u{5}\u{9E}\u{50}\u{2}\u{307}" .
		    "\u{308}\u{7}\u{1E}\u{2}\u{2}\u{308}\u{309}\u{5}\u{8E}\u{48}\u{2}\u{309}" .
		    "\u{30A}\u{7}\u{1F}\u{2}\u{2}\u{30A}\u{30C}\u{3}\u{2}\u{2}\u{2}\u{30B}" .
		    "\u{305}\u{3}\u{2}\u{2}\u{2}\u{30B}\u{306}\u{3}\u{2}\u{2}\u{2}\u{30B}" .
		    "\u{307}\u{3}\u{2}\u{2}\u{2}\u{30C}\u{97}\u{3}\u{2}\u{2}\u{2}\u{30D}" .
		    "\u{311}\u{5}\u{9A}\u{4E}\u{2}\u{30E}\u{311}\u{5}\u{A2}\u{52}\u{2}" .
		    "\u{30F}\u{311}\u{5}\u{B8}\u{5D}\u{2}\u{310}\u{30D}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{310}\u{30E}\u{3}\u{2}\u{2}\u{2}\u{310}\u{30F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{311}\u{99}\u{3}\u{2}\u{2}\u{2}\u{312}\u{319}\u{7}\u{1C}\u{2}" .
		    "\u{2}\u{313}\u{319}\u{5}\u{9C}\u{4F}\u{2}\u{314}\u{319}\u{5}\u{B4}" .
		    "\u{5B}\u{2}\u{315}\u{319}\u{7}\u{46}\u{2}\u{2}\u{316}\u{319}\u{7}" .
		    "\u{49}\u{2}\u{2}\u{317}\u{319}\u{7}\u{4A}\u{2}\u{2}\u{318}\u{312}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{318}\u{313}\u{3}\u{2}\u{2}\u{2}\u{318}\u{314}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{318}\u{315}\u{3}\u{2}\u{2}\u{2}\u{318}\u{316}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{318}\u{317}\u{3}\u{2}\u{2}\u{2}\u{319}\u{9B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{31A}\u{31B}\u{9}\u{9}\u{2}\u{2}\u{31B}\u{9D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{31C}\u{31F}\u{7}\u{1D}\u{2}\u{2}\u{31D}\u{31E}" .
		    "\u{7}\u{28}\u{2}\u{2}\u{31E}\u{320}\u{7}\u{1D}\u{2}\u{2}\u{31F}\u{31D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{31F}\u{320}\u{3}\u{2}\u{2}\u{2}\u{320}\u{9F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{321}\u{322}\u{7}\u{1D}\u{2}\u{2}\u{322}\u{323}" .
		    "\u{7}\u{28}\u{2}\u{2}\u{323}\u{324}\u{7}\u{1D}\u{2}\u{2}\u{324}\u{A1}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{325}\u{326}\u{5}\u{A4}\u{53}\u{2}\u{326}\u{327}" .
		    "\u{5}\u{A6}\u{54}\u{2}\u{327}\u{A3}\u{3}\u{2}\u{2}\u{2}\u{328}\u{332}" .
		    "\u{5}\u{B0}\u{59}\u{2}\u{329}\u{332}\u{5}\u{72}\u{3A}\u{2}\u{32A}" .
		    "\u{32B}\u{7}\u{22}\u{2}\u{2}\u{32B}\u{32C}\u{7}\u{2C}\u{2}\u{2}\u{32C}" .
		    "\u{32D}\u{7}\u{23}\u{2}\u{2}\u{32D}\u{332}\u{5}\u{76}\u{3C}\u{2}\u{32E}" .
		    "\u{332}\u{5}\u{7C}\u{3F}\u{2}\u{32F}\u{332}\u{5}\u{7E}\u{40}\u{2}" .
		    "\u{330}\u{332}\u{5}\u{6E}\u{38}\u{2}\u{331}\u{328}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{331}\u{329}\u{3}\u{2}\u{2}\u{2}\u{331}\u{32A}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{331}\u{32E}\u{3}\u{2}\u{2}\u{2}\u{331}\u{32F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{331}\u{330}\u{3}\u{2}\u{2}\u{2}\u{332}\u{A5}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{333}\u{338}\u{7}\u{20}\u{2}\u{2}\u{334}\u{336}\u{5}\u{A8}" .
		    "\u{55}\u{2}\u{335}\u{337}\u{7}\u{25}\u{2}\u{2}\u{336}\u{335}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{336}\u{337}\u{3}\u{2}\u{2}\u{2}\u{337}\u{339}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{338}\u{334}\u{3}\u{2}\u{2}\u{2}\u{338}\u{339}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{339}\u{33A}\u{3}\u{2}\u{2}\u{2}\u{33A}\u{33B}\u{7}" .
		    "\u{21}\u{2}\u{2}\u{33B}\u{A7}\u{3}\u{2}\u{2}\u{2}\u{33C}\u{341}\u{5}" .
		    "\u{AA}\u{56}\u{2}\u{33D}\u{33E}\u{7}\u{25}\u{2}\u{2}\u{33E}\u{340}" .
		    "\u{5}\u{AA}\u{56}\u{2}\u{33F}\u{33D}\u{3}\u{2}\u{2}\u{2}\u{340}\u{343}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{341}\u{33F}\u{3}\u{2}\u{2}\u{2}\u{341}\u{342}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{342}\u{A9}\u{3}\u{2}\u{2}\u{2}\u{343}\u{341}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{344}\u{345}\u{5}\u{AC}\u{57}\u{2}\u{345}\u{346}" .
		    "\u{7}\u{27}\u{2}\u{2}\u{346}\u{348}\u{3}\u{2}\u{2}\u{2}\u{347}\u{344}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{347}\u{348}\u{3}\u{2}\u{2}\u{2}\u{348}\u{349}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{349}\u{34A}\u{5}\u{AE}\u{58}\u{2}\u{34A}\u{AB}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{34B}\u{34F}\u{7}\u{1D}\u{2}\u{2}\u{34C}\u{34F}" .
		    "\u{5}\u{8E}\u{48}\u{2}\u{34D}\u{34F}\u{5}\u{A6}\u{54}\u{2}\u{34E}" .
		    "\u{34B}\u{3}\u{2}\u{2}\u{2}\u{34E}\u{34C}\u{3}\u{2}\u{2}\u{2}\u{34E}" .
		    "\u{34D}\u{3}\u{2}\u{2}\u{2}\u{34F}\u{AD}\u{3}\u{2}\u{2}\u{2}\u{350}" .
		    "\u{353}\u{5}\u{8E}\u{48}\u{2}\u{351}\u{353}\u{5}\u{A6}\u{54}\u{2}" .
		    "\u{352}\u{350}\u{3}\u{2}\u{2}\u{2}\u{352}\u{351}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{353}\u{AF}\u{3}\u{2}\u{2}\u{2}\u{354}\u{355}\u{7}\u{C}\u{2}\u{2}" .
		    "\u{355}\u{35B}\u{7}\u{20}\u{2}\u{2}\u{356}\u{357}\u{5}\u{B2}\u{5A}" .
		    "\u{2}\u{357}\u{358}\u{5}\u{C6}\u{64}\u{2}\u{358}\u{35A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{359}\u{356}\u{3}\u{2}\u{2}\u{2}\u{35A}\u{35D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{35B}\u{359}\u{3}\u{2}\u{2}\u{2}\u{35B}\u{35C}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{35C}\u{35E}\u{3}\u{2}\u{2}\u{2}\u{35D}\u{35B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{35E}\u{35F}\u{7}\u{21}\u{2}\u{2}\u{35F}\u{B1}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{360}\u{361}\u{6}\u{5A}\u{A}\u{2}\u{361}\u{362}\u{5}\u{12}" .
		    "\u{A}\u{2}\u{362}\u{363}\u{5}\u{6C}\u{37}\u{2}\u{363}\u{366}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{364}\u{366}\u{5}\u{B6}\u{5C}\u{2}\u{365}\u{360}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{365}\u{364}\u{3}\u{2}\u{2}\u{2}\u{366}\u{368}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{367}\u{369}\u{5}\u{B4}\u{5B}\u{2}\u{368}\u{367}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{368}\u{369}\u{3}\u{2}\u{2}\u{2}\u{369}\u{B3}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{36A}\u{36B}\u{9}\u{A}\u{2}\u{2}\u{36B}\u{B5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{36C}\u{36E}\u{7}\u{3F}\u{2}\u{2}\u{36D}\u{36C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{36D}\u{36E}\u{3}\u{2}\u{2}\u{2}\u{36E}\u{36F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{36F}\u{370}\u{5}\u{6E}\u{38}\u{2}\u{370}\u{B7}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{371}\u{372}\u{7}\u{5}\u{2}\u{2}\u{372}\u{373}" .
		    "\u{5}\u{86}\u{44}\u{2}\u{373}\u{374}\u{5}\u{24}\u{13}\u{2}\u{374}" .
		    "\u{B9}\u{3}\u{2}\u{2}\u{2}\u{375}\u{376}\u{7}\u{22}\u{2}\u{2}\u{376}" .
		    "\u{377}\u{5}\u{8E}\u{48}\u{2}\u{377}\u{378}\u{7}\u{23}\u{2}\u{2}\u{378}" .
		    "\u{BB}\u{3}\u{2}\u{2}\u{2}\u{379}\u{389}\u{7}\u{22}\u{2}\u{2}\u{37A}" .
		    "\u{37C}\u{5}\u{8E}\u{48}\u{2}\u{37B}\u{37A}\u{3}\u{2}\u{2}\u{2}\u{37B}" .
		    "\u{37C}\u{3}\u{2}\u{2}\u{2}\u{37C}\u{37D}\u{3}\u{2}\u{2}\u{2}\u{37D}" .
		    "\u{37F}\u{7}\u{27}\u{2}\u{2}\u{37E}\u{380}\u{5}\u{8E}\u{48}\u{2}\u{37F}" .
		    "\u{37E}\u{3}\u{2}\u{2}\u{2}\u{37F}\u{380}\u{3}\u{2}\u{2}\u{2}\u{380}" .
		    "\u{38A}\u{3}\u{2}\u{2}\u{2}\u{381}\u{383}\u{5}\u{8E}\u{48}\u{2}\u{382}" .
		    "\u{381}\u{3}\u{2}\u{2}\u{2}\u{382}\u{383}\u{3}\u{2}\u{2}\u{2}\u{383}" .
		    "\u{384}\u{3}\u{2}\u{2}\u{2}\u{384}\u{385}\u{7}\u{27}\u{2}\u{2}\u{385}" .
		    "\u{386}\u{5}\u{8E}\u{48}\u{2}\u{386}\u{387}\u{7}\u{27}\u{2}\u{2}\u{387}" .
		    "\u{388}\u{5}\u{8E}\u{48}\u{2}\u{388}\u{38A}\u{3}\u{2}\u{2}\u{2}\u{389}" .
		    "\u{37B}\u{3}\u{2}\u{2}\u{2}\u{389}\u{382}\u{3}\u{2}\u{2}\u{2}\u{38A}" .
		    "\u{38B}\u{3}\u{2}\u{2}\u{2}\u{38B}\u{38C}\u{7}\u{23}\u{2}\u{2}\u{38C}" .
		    "\u{BD}\u{3}\u{2}\u{2}\u{2}\u{38D}\u{38E}\u{7}\u{28}\u{2}\u{2}\u{38E}" .
		    "\u{38F}\u{7}\u{1E}\u{2}\u{2}\u{38F}\u{390}\u{5}\u{6C}\u{37}\u{2}\u{390}" .
		    "\u{391}\u{7}\u{1F}\u{2}\u{2}\u{391}\u{BF}\u{3}\u{2}\u{2}\u{2}\u{392}" .
		    "\u{3A1}\u{7}\u{1E}\u{2}\u{2}\u{393}\u{39A}\u{5}\u{14}\u{B}\u{2}\u{394}" .
		    "\u{397}\u{5}\u{6C}\u{37}\u{2}\u{395}\u{396}\u{7}\u{25}\u{2}\u{2}\u{396}" .
		    "\u{398}\u{5}\u{14}\u{B}\u{2}\u{397}\u{395}\u{3}\u{2}\u{2}\u{2}\u{397}" .
		    "\u{398}\u{3}\u{2}\u{2}\u{2}\u{398}\u{39A}\u{3}\u{2}\u{2}\u{2}\u{399}" .
		    "\u{393}\u{3}\u{2}\u{2}\u{2}\u{399}\u{394}\u{3}\u{2}\u{2}\u{2}\u{39A}" .
		    "\u{39C}\u{3}\u{2}\u{2}\u{2}\u{39B}\u{39D}\u{7}\u{2C}\u{2}\u{2}\u{39C}" .
		    "\u{39B}\u{3}\u{2}\u{2}\u{2}\u{39C}\u{39D}\u{3}\u{2}\u{2}\u{2}\u{39D}" .
		    "\u{39F}\u{3}\u{2}\u{2}\u{2}\u{39E}\u{3A0}\u{7}\u{25}\u{2}\u{2}\u{39F}" .
		    "\u{39E}\u{3}\u{2}\u{2}\u{2}\u{39F}\u{3A0}\u{3}\u{2}\u{2}\u{2}\u{3A0}" .
		    "\u{3A2}\u{3}\u{2}\u{2}\u{2}\u{3A1}\u{399}\u{3}\u{2}\u{2}\u{2}\u{3A1}" .
		    "\u{3A2}\u{3}\u{2}\u{2}\u{2}\u{3A2}\u{3A3}\u{3}\u{2}\u{2}\u{2}\u{3A3}" .
		    "\u{3A4}\u{7}\u{1F}\u{2}\u{2}\u{3A4}\u{C1}\u{3}\u{2}\u{2}\u{2}\u{3A5}" .
		    "\u{3A6}\u{5}\u{C4}\u{63}\u{2}\u{3A6}\u{3A7}\u{7}\u{28}\u{2}\u{2}\u{3A7}" .
		    "\u{3A8}\u{7}\u{1D}\u{2}\u{2}\u{3A8}\u{C3}\u{3}\u{2}\u{2}\u{2}\u{3A9}" .
		    "\u{3AA}\u{5}\u{6C}\u{37}\u{2}\u{3AA}\u{C5}\u{3}\u{2}\u{2}\u{2}\u{3AB}" .
		    "\u{3B0}\u{7}\u{26}\u{2}\u{2}\u{3AC}\u{3B0}\u{7}\u{2}\u{2}\u{3}\u{3AD}" .
		    "\u{3B0}\u{6}\u{64}\u{B}\u{2}\u{3AE}\u{3B0}\u{6}\u{64}\u{C}\u{2}\u{3AF}" .
		    "\u{3AB}\u{3}\u{2}\u{2}\u{2}\u{3AF}\u{3AC}\u{3}\u{2}\u{2}\u{2}\u{3AF}" .
		    "\u{3AD}\u{3}\u{2}\u{2}\u{2}\u{3AF}\u{3AE}\u{3}\u{2}\u{2}\u{2}\u{3B0}" .
		    "\u{C7}\u{3}\u{2}\u{2}\u{2}\u{6B}\u{CF}\u{D5}\u{DB}\u{EB}\u{EF}\u{F2}" .
		    "\u{FB}\u{105}\u{109}\u{10D}\u{111}\u{118}\u{120}\u{12B}\u{12F}\u{133}" .
		    "\u{13B}\u{142}\u{14E}\u{152}\u{158}\u{15C}\u{160}\u{169}\u{17A}\u{182}" .
		    "\u{192}\u{19F}\u{1A3}\u{1A7}\u{1AB}\u{1B9}\u{1C0}\u{1C2}\u{1C6}\u{1CC}" .
		    "\u{1CF}\u{1D5}\u{1DD}\u{1E2}\u{1E8}\u{1EF}\u{1F6}\u{201}\u{206}\u{20A}" .
		    "\u{20F}\u{213}\u{21B}\u{223}\u{228}\u{22B}\u{233}\u{23B}\u{240}\u{244}" .
		    "\u{248}\u{250}\u{25E}\u{262}\u{26C}\u{27E}\u{284}\u{298}\u{2A3}\u{2AD}" .
		    "\u{2B1}\u{2B9}\u{2BD}\u{2BF}\u{2C4}\u{2C7}\u{2CE}\u{2DF}\u{2E1}\u{2E8}" .
		    "\u{2F1}\u{2F5}\u{2FB}\u{301}\u{30B}\u{310}\u{318}\u{31F}\u{331}\u{336}" .
		    "\u{338}\u{341}\u{347}\u{34E}\u{352}\u{35B}\u{365}\u{368}\u{36D}\u{37B}" .
		    "\u{37F}\u{382}\u{389}\u{397}\u{399}\u{39C}\u{39F}\u{3A1}\u{3AF}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "GoParser.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function sourceFile() : Context\SourceFileContext
		{
		    $localContext = new Context\SourceFileContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_sourceFile);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(198);
		        $this->packageClause();
		        $this->setState(199);
		        $this->eos();
		        $this->setState(205);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::IMPORT) {
		        	$this->setState(200);
		        	$this->importDecl();
		        	$this->setState(201);
		        	$this->eos();
		        	$this->setState(207);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(217);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::CONST) | (1 << self::TYPE) | (1 << self::VAR))) !== 0)) {
		        	$this->setState(211);
		        	$this->errorHandler->sync($this);

		        	switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        		case 1:
		        		    $this->setState(208);
		        		    $this->functionDecl();
		        		break;

		        		case 2:
		        		    $this->setState(209);
		        		    $this->methodDecl();
		        		break;

		        		case 3:
		        		    $this->setState(210);
		        		    $this->declaration();
		        		break;
		        	}
		        	$this->setState(213);
		        	$this->eos();
		        	$this->setState(219);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(220);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function packageClause() : Context\PackageClauseContext
		{
		    $localContext = new Context\PackageClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_packageClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(222);
		        $this->match(self::PACKAGE);
		        $this->setState(223);
		        $localContext->packageName = $this->match(self::IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function importDecl() : Context\ImportDeclContext
		{
		    $localContext = new Context\ImportDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_importDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(225);
		        $this->match(self::IMPORT);
		        $this->setState(237);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::IDENTIFIER:
		            case self::DOT:
		            case self::RAW_STRING_LIT:
		            case self::INTERPRETED_STRING_LIT:
		            	$this->setState(226);
		            	$this->importSpec();
		            	break;

		            case self::L_PAREN:
		            	$this->setState(227);
		            	$this->match(self::L_PAREN);
		            	$this->setState(233);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ((((($_la - 27)) & ~0x3f) === 0 && ((1 << ($_la - 27)) & ((1 << (self::IDENTIFIER - 27)) | (1 << (self::DOT - 27)) | (1 << (self::RAW_STRING_LIT - 27)) | (1 << (self::INTERPRETED_STRING_LIT - 27)))) !== 0)) {
		            		$this->setState(228);
		            		$this->importSpec();
		            		$this->setState(229);
		            		$this->eos();
		            		$this->setState(235);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(236);
		            	$this->match(self::R_PAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function importSpec() : Context\ImportSpecContext
		{
		    $localContext = new Context\ImportSpecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_importSpec);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(240);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::IDENTIFIER || $_la === self::DOT) {
		        	$this->setState(239);

		        	$localContext->alias = $this->input->LT(1);
		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::IDENTIFIER || $_la === self::DOT)) {
		        		    $localContext->alias = $this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        }
		        $this->setState(242);
		        $this->importPath();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function importPath() : Context\ImportPathContext
		{
		    $localContext = new Context\ImportPathContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_importPath);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(244);
		        $this->string_();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaration() : Context\DeclarationContext
		{
		    $localContext = new Context\DeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_declaration);

		    try {
		        $this->setState(249);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CONST:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(246);
		            	$this->constDecl();
		            	break;

		            case self::TYPE:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(247);
		            	$this->typeDecl();
		            	break;

		            case self::VAR:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(248);
		            	$this->varDecl();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constDecl() : Context\ConstDeclContext
		{
		    $localContext = new Context\ConstDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_constDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(251);
		        $this->match(self::CONST);
		        $this->setState(263);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::IDENTIFIER:
		            	$this->setState(252);
		            	$this->constSpec();
		            	break;

		            case self::L_PAREN:
		            	$this->setState(253);
		            	$this->match(self::L_PAREN);
		            	$this->setState(259);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::IDENTIFIER) {
		            		$this->setState(254);
		            		$this->constSpec();
		            		$this->setState(255);
		            		$this->eos();
		            		$this->setState(261);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(262);
		            	$this->match(self::R_PAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constSpec() : Context\ConstSpecContext
		{
		    $localContext = new Context\ConstSpecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_constSpec);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(265);
		        $this->identifierList();
		        $this->setState(271);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		            case 1:
		        	    $this->setState(267);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::STAR) | (1 << self::RECEIVE))) !== 0)) {
		        	    	$this->setState(266);
		        	    	$this->type_();
		        	    }
		        	    $this->setState(269);
		        	    $this->match(self::ASSIGN);
		        	    $this->setState(270);
		        	    $this->expressionList();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function identifierList() : Context\IdentifierListContext
		{
		    $localContext = new Context\IdentifierListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_identifierList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(273);
		        $this->match(self::IDENTIFIER);
		        $this->setState(278);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(274);
		        		$this->match(self::COMMA);
		        		$this->setState(275);
		        		$this->match(self::IDENTIFIER); 
		        	}

		        	$this->setState(280);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionList() : Context\ExpressionListContext
		{
		    $localContext = new Context\ExpressionListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_expressionList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(281);
		        $this->recursiveExpression(0);
		        $this->setState(286);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(282);
		        		$this->match(self::COMMA);
		        		$this->setState(283);
		        		$this->recursiveExpression(0); 
		        	}

		        	$this->setState(288);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeDecl() : Context\TypeDeclContext
		{
		    $localContext = new Context\TypeDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_typeDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(289);
		        $this->match(self::TYPE);
		        $this->setState(301);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::IDENTIFIER:
		            	$this->setState(290);
		            	$this->typeSpec();
		            	break;

		            case self::L_PAREN:
		            	$this->setState(291);
		            	$this->match(self::L_PAREN);
		            	$this->setState(297);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::IDENTIFIER) {
		            		$this->setState(292);
		            		$this->typeSpec();
		            		$this->setState(293);
		            		$this->eos();
		            		$this->setState(299);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(300);
		            	$this->match(self::R_PAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeSpec() : Context\TypeSpecContext
		{
		    $localContext = new Context\TypeSpecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_typeSpec);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(303);
		        $this->match(self::IDENTIFIER);
		        $this->setState(305);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASSIGN) {
		        	$this->setState(304);
		        	$this->match(self::ASSIGN);
		        }
		        $this->setState(307);
		        $this->type_();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionDecl() : Context\FunctionDeclContext
		{
		    $localContext = new Context\FunctionDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_functionDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(309);
		        $this->match(self::FUNC);
		        $this->setState(310);
		        $this->match(self::IDENTIFIER);

		        $this->setState(311);
		        $this->signature();
		        $this->setState(313);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		            case 1:
		        	    $this->setState(312);
		        	    $this->block();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function methodDecl() : Context\MethodDeclContext
		{
		    $localContext = new Context\MethodDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_methodDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(315);
		        $this->match(self::FUNC);
		        $this->setState(316);
		        $this->receiver();
		        $this->setState(317);
		        $this->match(self::IDENTIFIER);

		        $this->setState(318);
		        $this->signature();
		        $this->setState(320);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
		            case 1:
		        	    $this->setState(319);
		        	    $this->block();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function receiver() : Context\ReceiverContext
		{
		    $localContext = new Context\ReceiverContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_receiver);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(322);
		        $this->parameters();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varDecl() : Context\VarDeclContext
		{
		    $localContext = new Context\VarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_varDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(324);
		        $this->match(self::VAR);
		        $this->setState(336);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::IDENTIFIER:
		            	$this->setState(325);
		            	$this->varSpec();
		            	break;

		            case self::L_PAREN:
		            	$this->setState(326);
		            	$this->match(self::L_PAREN);
		            	$this->setState(332);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::IDENTIFIER) {
		            		$this->setState(327);
		            		$this->varSpec();
		            		$this->setState(328);
		            		$this->eos();
		            		$this->setState(334);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(335);
		            	$this->match(self::R_PAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varSpec() : Context\VarSpecContext
		{
		    $localContext = new Context\VarSpecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_varSpec);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(338);
		        $this->identifierList();
		        $this->setState(346);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::FUNC:
		            case self::INTERFACE:
		            case self::MAP:
		            case self::STRUCT:
		            case self::CHAN:
		            case self::IDENTIFIER:
		            case self::L_PAREN:
		            case self::L_BRACKET:
		            case self::STAR:
		            case self::RECEIVE:
		            	$this->setState(339);
		            	$this->type_();
		            	$this->setState(342);
		            	$this->errorHandler->sync($this);

		            	switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
		            	    case 1:
		            		    $this->setState(340);
		            		    $this->match(self::ASSIGN);
		            		    $this->setState(341);
		            		    $this->expressionList();
		            		break;
		            	}
		            	break;

		            case self::ASSIGN:
		            	$this->setState(344);
		            	$this->match(self::ASSIGN);
		            	$this->setState(345);
		            	$this->expressionList();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function block() : Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(348);
		        $this->match(self::L_CURLY);
		        $this->setState(350);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::BREAK) | (1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::SELECT) | (1 << self::DEFER) | (1 << self::GO) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::GOTO) | (1 << self::SWITCH) | (1 << self::CONST) | (1 << self::FALLTHROUGH) | (1 << self::IF) | (1 << self::TYPE) | (1 << self::CONTINUE) | (1 << self::FOR) | (1 << self::RETURN) | (1 << self::VAR) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_CURLY) | (1 << self::L_BRACKET) | (1 << self::SEMI) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(349);
		        	$this->statementList();
		        }
		        $this->setState(352);
		        $this->match(self::R_CURLY);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statementList() : Context\StatementListContext
		{
		    $localContext = new Context\StatementListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_statementList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(357); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(354);
		        	$this->statement();
		        	$this->setState(355);
		        	$this->eos();
		        	$this->setState(359); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::BREAK) | (1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::SELECT) | (1 << self::DEFER) | (1 << self::GO) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::GOTO) | (1 << self::SWITCH) | (1 << self::CONST) | (1 << self::FALLTHROUGH) | (1 << self::IF) | (1 << self::TYPE) | (1 << self::CONTINUE) | (1 << self::FOR) | (1 << self::RETURN) | (1 << self::VAR) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_CURLY) | (1 << self::L_BRACKET) | (1 << self::SEMI) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0));
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statement() : Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_statement);

		    try {
		        $this->setState(376);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(361);
		        	    $this->declaration();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(362);
		        	    $this->labeledStmt();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(363);
		        	    $this->simpleStmt();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(364);
		        	    $this->goStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(365);
		        	    $this->returnStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(366);
		        	    $this->breakStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(367);
		        	    $this->continueStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(368);
		        	    $this->gotoStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(369);
		        	    $this->fallthroughStmt();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(370);
		        	    $this->block();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(371);
		        	    $this->ifStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(372);
		        	    $this->switchStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(373);
		        	    $this->selectStmt();
		        	break;

		        	case 14:
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(374);
		        	    $this->forStmt();
		        	break;

		        	case 15:
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(375);
		        	    $this->deferStmt();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function simpleStmt() : Context\SimpleStmtContext
		{
		    $localContext = new Context\SimpleStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_simpleStmt);

		    try {
		        $this->setState(384);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(378);
		        	    $this->sendStmt();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(379);
		        	    $this->incDecStmt();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(380);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(381);
		        	    $this->expressionStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(382);
		        	    $this->shortVarDecl();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(383);
		        	    $this->emptyStmt();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionStmt() : Context\ExpressionStmtContext
		{
		    $localContext = new Context\ExpressionStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_expressionStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(386);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sendStmt() : Context\SendStmtContext
		{
		    $localContext = new Context\SendStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_sendStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(388);
		        $localContext->channel = $this->recursiveExpression(0);
		        $this->setState(389);
		        $this->match(self::RECEIVE);
		        $this->setState(390);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function incDecStmt() : Context\IncDecStmtContext
		{
		    $localContext = new Context\IncDecStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_incDecStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(392);
		        $this->recursiveExpression(0);
		        $this->setState(393);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::PLUS_PLUS || $_la === self::MINUS_MINUS)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignment() : Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(395);
		        $this->expressionList();
		        $this->setState(396);
		        $this->assign_op();
		        $this->setState(397);
		        $this->expressionList();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assign_op() : Context\Assign_opContext
		{
		    $localContext = new Context\Assign_opContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_assign_op);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(400);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::OR) | (1 << self::DIV) | (1 << self::MOD) | (1 << self::LSHIFT) | (1 << self::RSHIFT) | (1 << self::BIT_CLEAR) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND))) !== 0)) {
		        	$this->setState(399);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::OR) | (1 << self::DIV) | (1 << self::MOD) | (1 << self::LSHIFT) | (1 << self::RSHIFT) | (1 << self::BIT_CLEAR) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND))) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        }
		        $this->setState(402);
		        $this->match(self::ASSIGN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function shortVarDecl() : Context\ShortVarDeclContext
		{
		    $localContext = new Context\ShortVarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_shortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(404);
		        $this->identifierList();
		        $this->setState(405);
		        $this->match(self::DECLARE_ASSIGN);
		        $this->setState(406);
		        $this->expressionList();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function emptyStmt() : Context\EmptyStmtContext
		{
		    $localContext = new Context\EmptyStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_emptyStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(408);
		        $this->match(self::SEMI);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function labeledStmt() : Context\LabeledStmtContext
		{
		    $localContext = new Context\LabeledStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_labeledStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(410);
		        $this->match(self::IDENTIFIER);
		        $this->setState(411);
		        $this->match(self::COLON);
		        $this->setState(413);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		            case 1:
		        	    $this->setState(412);
		        	    $this->statement();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnStmt() : Context\ReturnStmtContext
		{
		    $localContext = new Context\ReturnStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(415);
		        $this->match(self::RETURN);
		        $this->setState(417);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
		            case 1:
		        	    $this->setState(416);
		        	    $this->expressionList();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function breakStmt() : Context\BreakStmtContext
		{
		    $localContext = new Context\BreakStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_breakStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(419);
		        $this->match(self::BREAK);
		        $this->setState(421);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
		            case 1:
		        	    $this->setState(420);
		        	    $this->match(self::IDENTIFIER);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function continueStmt() : Context\ContinueStmtContext
		{
		    $localContext = new Context\ContinueStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_continueStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(423);
		        $this->match(self::CONTINUE);
		        $this->setState(425);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
		            case 1:
		        	    $this->setState(424);
		        	    $this->match(self::IDENTIFIER);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function gotoStmt() : Context\GotoStmtContext
		{
		    $localContext = new Context\GotoStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_gotoStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(427);
		        $this->match(self::GOTO);
		        $this->setState(428);
		        $this->match(self::IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function fallthroughStmt() : Context\FallthroughStmtContext
		{
		    $localContext = new Context\FallthroughStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_fallthroughStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(430);
		        $this->match(self::FALLTHROUGH);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function deferStmt() : Context\DeferStmtContext
		{
		    $localContext = new Context\DeferStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_deferStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(432);
		        $this->match(self::DEFER);
		        $this->setState(433);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStmt() : Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(435);
		        $this->match(self::IF);
		        $this->setState(439);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx)) {
		            case 1:
		        	    $this->setState(436);
		        	    $this->simpleStmt();
		        	    $this->setState(437);
		        	    $this->match(self::SEMI);
		        	break;
		        }
		        $this->setState(441);
		        $this->recursiveExpression(0);
		        $this->setState(442);
		        $this->block();
		        $this->setState(448);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 33, $this->ctx)) {
		            case 1:
		        	    $this->setState(443);
		        	    $this->match(self::ELSE);
		        	    $this->setState(446);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->input->LA(1)) {
		        	        case self::IF:
		        	        	$this->setState(444);
		        	        	$this->ifStmt();
		        	        	break;

		        	        case self::L_CURLY:
		        	        	$this->setState(445);
		        	        	$this->block();
		        	        	break;

		        	    default:
		        	    	throw new NoViableAltException($this);
		        	    }
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchStmt() : Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_switchStmt);

		    try {
		        $this->setState(452);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(450);
		        	    $this->exprSwitchStmt();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(451);
		        	    $this->typeSwitchStmt();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprSwitchStmt() : Context\ExprSwitchStmtContext
		{
		    $localContext = new Context\ExprSwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_exprSwitchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(454);
		        $this->match(self::SWITCH);
		        $this->setState(458);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx)) {
		            case 1:
		        	    $this->setState(455);
		        	    $this->simpleStmt();
		        	    $this->setState(456);
		        	    $this->match(self::SEMI);
		        	break;
		        }
		        $this->setState(461);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(460);
		        	$this->recursiveExpression(0);
		        }
		        $this->setState(463);
		        $this->match(self::L_CURLY);
		        $this->setState(467);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::DEFAULT || $_la === self::CASE) {
		        	$this->setState(464);
		        	$this->exprCaseClause();
		        	$this->setState(469);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(470);
		        $this->match(self::R_CURLY);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprCaseClause() : Context\ExprCaseClauseContext
		{
		    $localContext = new Context\ExprCaseClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_exprCaseClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(472);
		        $this->exprSwitchCase();
		        $this->setState(473);
		        $this->match(self::COLON);
		        $this->setState(475);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::BREAK) | (1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::SELECT) | (1 << self::DEFER) | (1 << self::GO) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::GOTO) | (1 << self::SWITCH) | (1 << self::CONST) | (1 << self::FALLTHROUGH) | (1 << self::IF) | (1 << self::TYPE) | (1 << self::CONTINUE) | (1 << self::FOR) | (1 << self::RETURN) | (1 << self::VAR) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_CURLY) | (1 << self::L_BRACKET) | (1 << self::SEMI) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(474);
		        	$this->statementList();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprSwitchCase() : Context\ExprSwitchCaseContext
		{
		    $localContext = new Context\ExprSwitchCaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_exprSwitchCase);

		    try {
		        $this->setState(480);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CASE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(477);
		            	$this->match(self::CASE);
		            	$this->setState(478);
		            	$this->expressionList();
		            	break;

		            case self::DEFAULT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(479);
		            	$this->match(self::DEFAULT);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeSwitchStmt() : Context\TypeSwitchStmtContext
		{
		    $localContext = new Context\TypeSwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_typeSwitchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(482);
		        $this->match(self::SWITCH);
		        $this->setState(486);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 40, $this->ctx)) {
		            case 1:
		        	    $this->setState(483);
		        	    $this->simpleStmt();
		        	    $this->setState(484);
		        	    $this->match(self::SEMI);
		        	break;
		        }
		        $this->setState(488);
		        $this->typeSwitchGuard();
		        $this->setState(489);
		        $this->match(self::L_CURLY);
		        $this->setState(493);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::DEFAULT || $_la === self::CASE) {
		        	$this->setState(490);
		        	$this->typeCaseClause();
		        	$this->setState(495);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(496);
		        $this->match(self::R_CURLY);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeSwitchGuard() : Context\TypeSwitchGuardContext
		{
		    $localContext = new Context\TypeSwitchGuardContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_typeSwitchGuard);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(500);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 42, $this->ctx)) {
		            case 1:
		        	    $this->setState(498);
		        	    $this->match(self::IDENTIFIER);
		        	    $this->setState(499);
		        	    $this->match(self::DECLARE_ASSIGN);
		        	break;
		        }
		        $this->setState(502);
		        $this->recursivePrimaryExpr(0);
		        $this->setState(503);
		        $this->match(self::DOT);
		        $this->setState(504);
		        $this->match(self::L_PAREN);
		        $this->setState(505);
		        $this->match(self::TYPE);
		        $this->setState(506);
		        $this->match(self::R_PAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeCaseClause() : Context\TypeCaseClauseContext
		{
		    $localContext = new Context\TypeCaseClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_typeCaseClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(508);
		        $this->typeSwitchCase();
		        $this->setState(509);
		        $this->match(self::COLON);
		        $this->setState(511);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::BREAK) | (1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::SELECT) | (1 << self::DEFER) | (1 << self::GO) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::GOTO) | (1 << self::SWITCH) | (1 << self::CONST) | (1 << self::FALLTHROUGH) | (1 << self::IF) | (1 << self::TYPE) | (1 << self::CONTINUE) | (1 << self::FOR) | (1 << self::RETURN) | (1 << self::VAR) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_CURLY) | (1 << self::L_BRACKET) | (1 << self::SEMI) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(510);
		        	$this->statementList();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeSwitchCase() : Context\TypeSwitchCaseContext
		{
		    $localContext = new Context\TypeSwitchCaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_typeSwitchCase);

		    try {
		        $this->setState(516);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CASE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(513);
		            	$this->match(self::CASE);
		            	$this->setState(514);
		            	$this->typeList();
		            	break;

		            case self::DEFAULT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(515);
		            	$this->match(self::DEFAULT);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeList() : Context\TypeListContext
		{
		    $localContext = new Context\TypeListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 88, self::RULE_typeList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(520);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::FUNC:
		            case self::INTERFACE:
		            case self::MAP:
		            case self::STRUCT:
		            case self::CHAN:
		            case self::IDENTIFIER:
		            case self::L_PAREN:
		            case self::L_BRACKET:
		            case self::STAR:
		            case self::RECEIVE:
		            	$this->setState(518);
		            	$this->type_();
		            	break;

		            case self::NIL_LIT:
		            	$this->setState(519);
		            	$this->match(self::NIL_LIT);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        $this->setState(529);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(522);
		        	$this->match(self::COMMA);
		        	$this->setState(525);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::FUNC:
		        	    case self::INTERFACE:
		        	    case self::MAP:
		        	    case self::STRUCT:
		        	    case self::CHAN:
		        	    case self::IDENTIFIER:
		        	    case self::L_PAREN:
		        	    case self::L_BRACKET:
		        	    case self::STAR:
		        	    case self::RECEIVE:
		        	    	$this->setState(523);
		        	    	$this->type_();
		        	    	break;

		        	    case self::NIL_LIT:
		        	    	$this->setState(524);
		        	    	$this->match(self::NIL_LIT);
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(531);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function selectStmt() : Context\SelectStmtContext
		{
		    $localContext = new Context\SelectStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 90, self::RULE_selectStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(532);
		        $this->match(self::SELECT);
		        $this->setState(533);
		        $this->match(self::L_CURLY);
		        $this->setState(537);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::DEFAULT || $_la === self::CASE) {
		        	$this->setState(534);
		        	$this->commClause();
		        	$this->setState(539);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(540);
		        $this->match(self::R_CURLY);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function commClause() : Context\CommClauseContext
		{
		    $localContext = new Context\CommClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 92, self::RULE_commClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(542);
		        $this->commCase();
		        $this->setState(543);
		        $this->match(self::COLON);
		        $this->setState(545);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::BREAK) | (1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::SELECT) | (1 << self::DEFER) | (1 << self::GO) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::GOTO) | (1 << self::SWITCH) | (1 << self::CONST) | (1 << self::FALLTHROUGH) | (1 << self::IF) | (1 << self::TYPE) | (1 << self::CONTINUE) | (1 << self::FOR) | (1 << self::RETURN) | (1 << self::VAR) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_CURLY) | (1 << self::L_BRACKET) | (1 << self::SEMI) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(544);
		        	$this->statementList();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function commCase() : Context\CommCaseContext
		{
		    $localContext = new Context\CommCaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 94, self::RULE_commCase);

		    try {
		        $this->setState(553);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CASE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(547);
		            	$this->match(self::CASE);
		            	$this->setState(550);
		            	$this->errorHandler->sync($this);

		            	switch ($this->getInterpreter()->adaptivePredict($this->input, 50, $this->ctx)) {
		            		case 1:
		            		    $this->setState(548);
		            		    $this->sendStmt();
		            		break;

		            		case 2:
		            		    $this->setState(549);
		            		    $this->recvStmt();
		            		break;
		            	}
		            	break;

		            case self::DEFAULT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(552);
		            	$this->match(self::DEFAULT);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function recvStmt() : Context\RecvStmtContext
		{
		    $localContext = new Context\RecvStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 96, self::RULE_recvStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(561);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 52, $this->ctx)) {
		            case 1:
		        	    $this->setState(555);
		        	    $this->expressionList();
		        	    $this->setState(556);
		        	    $this->match(self::ASSIGN);
		        	break;

		            case 2:
		        	    $this->setState(558);
		        	    $this->identifierList();
		        	    $this->setState(559);
		        	    $this->match(self::DECLARE_ASSIGN);
		        	break;
		        }
		        $this->setState(563);
		        $localContext->recvExpr = $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forStmt() : Context\ForStmtContext
		{
		    $localContext = new Context\ForStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 98, self::RULE_forStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(565);
		        $this->match(self::FOR);
		        $this->setState(569);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 53, $this->ctx)) {
		            case 1:
		        	    $this->setState(566);
		        	    $this->recursiveExpression(0);
		        	break;

		            case 2:
		        	    $this->setState(567);
		        	    $this->forClause();
		        	break;

		            case 3:
		        	    $this->setState(568);
		        	    $this->rangeClause();
		        	break;
		        }
		        $this->setState(571);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forClause() : Context\ForClauseContext
		{
		    $localContext = new Context\ForClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 100, self::RULE_forClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(574);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 54, $this->ctx)) {
		            case 1:
		        	    $this->setState(573);
		        	    $localContext->initStmt = $this->simpleStmt();
		        	break;
		        }
		        $this->setState(576);
		        $this->match(self::SEMI);
		        $this->setState(578);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(577);
		        	$this->recursiveExpression(0);
		        }
		        $this->setState(580);
		        $this->match(self::SEMI);
		        $this->setState(582);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::SEMI) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(581);
		        	$localContext->postStmt = $this->simpleStmt();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function rangeClause() : Context\RangeClauseContext
		{
		    $localContext = new Context\RangeClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 102, self::RULE_rangeClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(590);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 57, $this->ctx)) {
		            case 1:
		        	    $this->setState(584);
		        	    $this->expressionList();
		        	    $this->setState(585);
		        	    $this->match(self::ASSIGN);
		        	break;

		            case 2:
		        	    $this->setState(587);
		        	    $this->identifierList();
		        	    $this->setState(588);
		        	    $this->match(self::DECLARE_ASSIGN);
		        	break;
		        }
		        $this->setState(592);
		        $this->match(self::RANGE);
		        $this->setState(593);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function goStmt() : Context\GoStmtContext
		{
		    $localContext = new Context\GoStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 104, self::RULE_goStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(595);
		        $this->match(self::GO);
		        $this->setState(596);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type_() : Context\Type_Context
		{
		    $localContext = new Context\Type_Context($this->ctx, $this->getState());

		    $this->enterRule($localContext, 106, self::RULE_type_);

		    try {
		        $this->setState(604);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::IDENTIFIER:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(598);
		            	$this->typeName();
		            	break;

		            case self::FUNC:
		            case self::INTERFACE:
		            case self::MAP:
		            case self::STRUCT:
		            case self::CHAN:
		            case self::L_BRACKET:
		            case self::STAR:
		            case self::RECEIVE:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(599);
		            	$this->typeLit();
		            	break;

		            case self::L_PAREN:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(600);
		            	$this->match(self::L_PAREN);
		            	$this->setState(601);
		            	$this->type_();
		            	$this->setState(602);
		            	$this->match(self::R_PAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeName() : Context\TypeNameContext
		{
		    $localContext = new Context\TypeNameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 108, self::RULE_typeName);

		    try {
		        $this->setState(608);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 59, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(606);
		        	    $this->qualifiedIdent();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(607);
		        	    $this->match(self::IDENTIFIER);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeLit() : Context\TypeLitContext
		{
		    $localContext = new Context\TypeLitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 110, self::RULE_typeLit);

		    try {
		        $this->setState(618);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 60, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(610);
		        	    $this->arrayType();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(611);
		        	    $this->structType();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(612);
		        	    $this->pointerType();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(613);
		        	    $this->functionType();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(614);
		        	    $this->interfaceType();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(615);
		        	    $this->sliceType();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(616);
		        	    $this->mapType();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(617);
		        	    $this->channelType();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayType() : Context\ArrayTypeContext
		{
		    $localContext = new Context\ArrayTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 112, self::RULE_arrayType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(620);
		        $this->match(self::L_BRACKET);
		        $this->setState(621);
		        $this->arrayLength();
		        $this->setState(622);
		        $this->match(self::R_BRACKET);
		        $this->setState(623);
		        $this->elementType();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayLength() : Context\ArrayLengthContext
		{
		    $localContext = new Context\ArrayLengthContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 114, self::RULE_arrayLength);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(625);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function elementType() : Context\ElementTypeContext
		{
		    $localContext = new Context\ElementTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 116, self::RULE_elementType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(627);
		        $this->type_();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function pointerType() : Context\PointerTypeContext
		{
		    $localContext = new Context\PointerTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 118, self::RULE_pointerType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(629);
		        $this->match(self::STAR);
		        $this->setState(630);
		        $this->type_();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function interfaceType() : Context\InterfaceTypeContext
		{
		    $localContext = new Context\InterfaceTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 120, self::RULE_interfaceType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(632);
		        $this->match(self::INTERFACE);
		        $this->setState(633);
		        $this->match(self::L_CURLY);
		        $this->setState(642);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 62, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(636);
		        		$this->errorHandler->sync($this);

		        		switch ($this->getInterpreter()->adaptivePredict($this->input, 61, $this->ctx)) {
		        			case 1:
		        			    $this->setState(634);
		        			    $this->methodSpec();
		        			break;

		        			case 2:
		        			    $this->setState(635);
		        			    $this->typeName();
		        			break;
		        		}
		        		$this->setState(638);
		        		$this->eos(); 
		        	}

		        	$this->setState(644);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 62, $this->ctx);
		        }
		        $this->setState(645);
		        $this->match(self::R_CURLY);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sliceType() : Context\SliceTypeContext
		{
		    $localContext = new Context\SliceTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 122, self::RULE_sliceType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(647);
		        $this->match(self::L_BRACKET);
		        $this->setState(648);
		        $this->match(self::R_BRACKET);
		        $this->setState(649);
		        $this->elementType();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function mapType() : Context\MapTypeContext
		{
		    $localContext = new Context\MapTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 124, self::RULE_mapType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(651);
		        $this->match(self::MAP);
		        $this->setState(652);
		        $this->match(self::L_BRACKET);
		        $this->setState(653);
		        $this->type_();
		        $this->setState(654);
		        $this->match(self::R_BRACKET);
		        $this->setState(655);
		        $this->elementType();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function channelType() : Context\ChannelTypeContext
		{
		    $localContext = new Context\ChannelTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 126, self::RULE_channelType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(662);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 63, $this->ctx)) {
		        	case 1:
		        	    $this->setState(657);
		        	    $this->match(self::CHAN);
		        	break;

		        	case 2:
		        	    $this->setState(658);
		        	    $this->match(self::CHAN);
		        	    $this->setState(659);
		        	    $this->match(self::RECEIVE);
		        	break;

		        	case 3:
		        	    $this->setState(660);
		        	    $this->match(self::RECEIVE);
		        	    $this->setState(661);
		        	    $this->match(self::CHAN);
		        	break;
		        }
		        $this->setState(664);
		        $this->elementType();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function methodSpec() : Context\MethodSpecContext
		{
		    $localContext = new Context\MethodSpecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 128, self::RULE_methodSpec);

		    try {
		        $this->setState(673);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 64, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(666);

		        	    if (!($this->noTerminatorAfterParams(2))) {
		        	        throw new FailedPredicateException($this, "\\\$this->noTerminatorAfterParams(2)");
		        	    }
		        	    $this->setState(667);
		        	    $this->match(self::IDENTIFIER);
		        	    $this->setState(668);
		        	    $this->parameters();
		        	    $this->setState(669);
		        	    $this->result();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(671);
		        	    $this->match(self::IDENTIFIER);
		        	    $this->setState(672);
		        	    $this->parameters();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionType() : Context\FunctionTypeContext
		{
		    $localContext = new Context\FunctionTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 130, self::RULE_functionType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(675);
		        $this->match(self::FUNC);
		        $this->setState(676);
		        $this->signature();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function signature() : Context\SignatureContext
		{
		    $localContext = new Context\SignatureContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 132, self::RULE_signature);

		    try {
		        $this->setState(683);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 65, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(678);

		        	    if (!($this->noTerminatorAfterParams(1))) {
		        	        throw new FailedPredicateException($this, "\\\$this->noTerminatorAfterParams(1)");
		        	    }
		        	    $this->setState(679);
		        	    $this->parameters();
		        	    $this->setState(680);
		        	    $this->result();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(682);
		        	    $this->parameters();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function result() : Context\ResultContext
		{
		    $localContext = new Context\ResultContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 134, self::RULE_result);

		    try {
		        $this->setState(687);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 66, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(685);
		        	    $this->parameters();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(686);
		        	    $this->type_();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameters() : Context\ParametersContext
		{
		    $localContext = new Context\ParametersContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 136, self::RULE_parameters);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(689);
		        $this->match(self::L_PAREN);
		        $this->setState(701);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::ELLIPSIS) | (1 << self::STAR) | (1 << self::RECEIVE))) !== 0)) {
		        	$this->setState(690);
		        	$this->parameterDecl();
		        	$this->setState(695);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 67, $this->ctx);

		        	while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        		if ($alt === 1) {
		        			$this->setState(691);
		        			$this->match(self::COMMA);
		        			$this->setState(692);
		        			$this->parameterDecl(); 
		        		}

		        		$this->setState(697);
		        		$this->errorHandler->sync($this);

		        		$alt = $this->getInterpreter()->adaptivePredict($this->input, 67, $this->ctx);
		        	}
		        	$this->setState(699);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::COMMA) {
		        		$this->setState(698);
		        		$this->match(self::COMMA);
		        	}
		        }
		        $this->setState(703);
		        $this->match(self::R_PAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameterDecl() : Context\ParameterDeclContext
		{
		    $localContext = new Context\ParameterDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 138, self::RULE_parameterDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(706);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 70, $this->ctx)) {
		            case 1:
		        	    $this->setState(705);
		        	    $this->identifierList();
		        	break;
		        }
		        $this->setState(709);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELLIPSIS) {
		        	$this->setState(708);
		        	$this->match(self::ELLIPSIS);
		        }
		        $this->setState(711);
		        $this->type_();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression() : Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence) : Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 140;
			$this->enterRecursionRule($localContext, 140, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(716);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 72, $this->ctx)) {
					case 1:
					    $this->setState(714);
					    $this->recursivePrimaryExpr(0);
					break;

					case 2:
					    $this->setState(715);
					    $this->unaryExpr();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(735);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 74, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(733);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 73, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(718);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(719);

							    $localContext->mul_op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::DIV) | (1 << self::MOD) | (1 << self::LSHIFT) | (1 << self::RSHIFT) | (1 << self::BIT_CLEAR) | (1 << self::STAR) | (1 << self::AMPERSAND))) !== 0))) {
							    	    $localContext->mul_op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(720);
							    $this->recursiveExpression(6);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(721);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(722);

							    $localContext->add_op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::OR) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET))) !== 0))) {
							    	    $localContext->add_op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(723);
							    $this->recursiveExpression(5);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(724);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(725);

							    $localContext->rel_op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::EQUALS) | (1 << self::NOT_EQUALS) | (1 << self::LESS) | (1 << self::LESS_OR_EQUALS) | (1 << self::GREATER) | (1 << self::GREATER_OR_EQUALS))) !== 0))) {
							    	    $localContext->rel_op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(726);
							    $this->recursiveExpression(4);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(727);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(728);
							    $this->match(self::LOGICAL_AND);
							    $this->setState(729);
							    $this->recursiveExpression(3);
							break;

							case 5:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(730);

							    if (!($this->precpred($this->ctx, 1))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
							    }
							    $this->setState(731);
							    $this->match(self::LOGICAL_OR);
							    $this->setState(732);
							    $this->recursiveExpression(2);
							break;
						} 
					}

					$this->setState(737);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 74, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primaryExpr() : Context\PrimaryExprContext
		{
			return $this->recursivePrimaryExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursivePrimaryExpr(int $precedence) : Context\PrimaryExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\PrimaryExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 142;
			$this->enterRecursionRule($localContext, 142, self::RULE_primaryExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(742);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 75, $this->ctx)) {
					case 1:
					    $this->setState(739);
					    $this->operand();
					break;

					case 2:
					    $this->setState(740);
					    $this->conversion();
					break;

					case 3:
					    $this->setState(741);
					    $this->methodExpr();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(755);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 77, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\PrimaryExprContext($parentContext, $parentState);
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_primaryExpr);
						$this->setState(744);

						if (!($this->precpred($this->ctx, 1))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
						}
						$this->setState(751);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 76, $this->ctx)) {
							case 1:
							    $this->setState(745);
							    $this->match(self::DOT);
							    $this->setState(746);
							    $this->match(self::IDENTIFIER);
							break;

							case 2:
							    $this->setState(747);
							    $this->index();
							break;

							case 3:
							    $this->setState(748);
							    $this->slice_();
							break;

							case 4:
							    $this->setState(749);
							    $this->typeAssertion();
							break;

							case 5:
							    $this->setState(750);
							    $this->arguments();
							break;
						} 
					}

					$this->setState(757);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 77, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unaryExpr() : Context\UnaryExprContext
		{
		    $localContext = new Context\UnaryExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 144, self::RULE_unaryExpr);

		    try {
		        $this->setState(761);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 78, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(758);
		        	    $this->recursivePrimaryExpr(0);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(759);

		        	    $localContext->unary_op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0))) {
		        	    	    $localContext->unary_op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(760);
		        	    $this->recursiveExpression(0);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function conversion() : Context\ConversionContext
		{
		    $localContext = new Context\ConversionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 146, self::RULE_conversion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(763);
		        $this->type_();
		        $this->setState(764);
		        $this->match(self::L_PAREN);
		        $this->setState(765);
		        $this->recursiveExpression(0);
		        $this->setState(767);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COMMA) {
		        	$this->setState(766);
		        	$this->match(self::COMMA);
		        }
		        $this->setState(769);
		        $this->match(self::R_PAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function operand() : Context\OperandContext
		{
		    $localContext = new Context\OperandContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 148, self::RULE_operand);

		    try {
		        $this->setState(777);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 80, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(771);
		        	    $this->literal();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(772);
		        	    $this->operandName();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(773);
		        	    $this->match(self::L_PAREN);
		        	    $this->setState(774);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(775);
		        	    $this->match(self::R_PAREN);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal() : Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 150, self::RULE_literal);

		    try {
		        $this->setState(782);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::NIL_LIT:
		            case self::DECIMAL_LIT:
		            case self::BINARY_LIT:
		            case self::OCTAL_LIT:
		            case self::HEX_LIT:
		            case self::FLOAT_LIT:
		            case self::IMAGINARY_LIT:
		            case self::RUNE_LIT:
		            case self::RAW_STRING_LIT:
		            case self::INTERPRETED_STRING_LIT:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(779);
		            	$this->basicLit();
		            	break;

		            case self::MAP:
		            case self::STRUCT:
		            case self::IDENTIFIER:
		            case self::L_BRACKET:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(780);
		            	$this->compositeLit();
		            	break;

		            case self::FUNC:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(781);
		            	$this->functionLit();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function basicLit() : Context\BasicLitContext
		{
		    $localContext = new Context\BasicLitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 152, self::RULE_basicLit);

		    try {
		        $this->setState(790);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 82, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(784);
		        	    $this->match(self::NIL_LIT);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(785);
		        	    $this->integer();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(786);
		        	    $this->string_();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(787);
		        	    $this->match(self::FLOAT_LIT);
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(788);
		        	    $this->match(self::IMAGINARY_LIT);
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(789);
		        	    $this->match(self::RUNE_LIT);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function integer() : Context\IntegerContext
		{
		    $localContext = new Context\IntegerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 154, self::RULE_integer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(792);

		        $_la = $this->input->LA(1);

		        if (!((((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)))) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function operandName() : Context\OperandNameContext
		{
		    $localContext = new Context\OperandNameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 156, self::RULE_operandName);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(794);
		        $this->match(self::IDENTIFIER);
		        $this->setState(797);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 83, $this->ctx)) {
		            case 1:
		        	    $this->setState(795);
		        	    $this->match(self::DOT);
		        	    $this->setState(796);
		        	    $this->match(self::IDENTIFIER);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function qualifiedIdent() : Context\QualifiedIdentContext
		{
		    $localContext = new Context\QualifiedIdentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 158, self::RULE_qualifiedIdent);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(799);
		        $this->match(self::IDENTIFIER);
		        $this->setState(800);
		        $this->match(self::DOT);
		        $this->setState(801);
		        $this->match(self::IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function compositeLit() : Context\CompositeLitContext
		{
		    $localContext = new Context\CompositeLitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 160, self::RULE_compositeLit);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(803);
		        $this->literalType();
		        $this->setState(804);
		        $this->literalValue();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literalType() : Context\LiteralTypeContext
		{
		    $localContext = new Context\LiteralTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 162, self::RULE_literalType);

		    try {
		        $this->setState(815);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 84, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(806);
		        	    $this->structType();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(807);
		        	    $this->arrayType();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(808);
		        	    $this->match(self::L_BRACKET);
		        	    $this->setState(809);
		        	    $this->match(self::ELLIPSIS);
		        	    $this->setState(810);
		        	    $this->match(self::R_BRACKET);
		        	    $this->setState(811);
		        	    $this->elementType();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(812);
		        	    $this->sliceType();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(813);
		        	    $this->mapType();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(814);
		        	    $this->typeName();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literalValue() : Context\LiteralValueContext
		{
		    $localContext = new Context\LiteralValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 164, self::RULE_literalValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(817);
		        $this->match(self::L_CURLY);
		        $this->setState(822);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_CURLY) | (1 << self::L_BRACKET) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(818);
		        	$this->elementList();
		        	$this->setState(820);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::COMMA) {
		        		$this->setState(819);
		        		$this->match(self::COMMA);
		        	}
		        }
		        $this->setState(824);
		        $this->match(self::R_CURLY);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function elementList() : Context\ElementListContext
		{
		    $localContext = new Context\ElementListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 166, self::RULE_elementList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(826);
		        $this->keyedElement();
		        $this->setState(831);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 87, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(827);
		        		$this->match(self::COMMA);
		        		$this->setState(828);
		        		$this->keyedElement(); 
		        	}

		        	$this->setState(833);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 87, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function keyedElement() : Context\KeyedElementContext
		{
		    $localContext = new Context\KeyedElementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 168, self::RULE_keyedElement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(837);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 88, $this->ctx)) {
		            case 1:
		        	    $this->setState(834);
		        	    $this->key();
		        	    $this->setState(835);
		        	    $this->match(self::COLON);
		        	break;
		        }
		        $this->setState(839);
		        $this->element();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function key() : Context\KeyContext
		{
		    $localContext = new Context\KeyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 170, self::RULE_key);

		    try {
		        $this->setState(844);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 89, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(841);
		        	    $this->match(self::IDENTIFIER);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(842);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(843);
		        	    $this->literalValue();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function element() : Context\ElementContext
		{
		    $localContext = new Context\ElementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 172, self::RULE_element);

		    try {
		        $this->setState(848);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::FUNC:
		            case self::INTERFACE:
		            case self::MAP:
		            case self::STRUCT:
		            case self::CHAN:
		            case self::NIL_LIT:
		            case self::IDENTIFIER:
		            case self::L_PAREN:
		            case self::L_BRACKET:
		            case self::EXCLAMATION:
		            case self::PLUS:
		            case self::MINUS:
		            case self::CARET:
		            case self::STAR:
		            case self::AMPERSAND:
		            case self::RECEIVE:
		            case self::DECIMAL_LIT:
		            case self::BINARY_LIT:
		            case self::OCTAL_LIT:
		            case self::HEX_LIT:
		            case self::FLOAT_LIT:
		            case self::IMAGINARY_LIT:
		            case self::RUNE_LIT:
		            case self::RAW_STRING_LIT:
		            case self::INTERPRETED_STRING_LIT:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(846);
		            	$this->recursiveExpression(0);
		            	break;

		            case self::L_CURLY:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(847);
		            	$this->literalValue();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function structType() : Context\StructTypeContext
		{
		    $localContext = new Context\StructTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 174, self::RULE_structType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(850);
		        $this->match(self::STRUCT);
		        $this->setState(851);
		        $this->match(self::L_CURLY);
		        $this->setState(857);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 91, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(852);
		        		$this->fieldDecl();
		        		$this->setState(853);
		        		$this->eos(); 
		        	}

		        	$this->setState(859);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 91, $this->ctx);
		        }
		        $this->setState(860);
		        $this->match(self::R_CURLY);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function fieldDecl() : Context\FieldDeclContext
		{
		    $localContext = new Context\FieldDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 176, self::RULE_fieldDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(867);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 92, $this->ctx)) {
		        	case 1:
		        	    $this->setState(862);

		        	    if (!($this->noTerminatorBetween(2))) {
		        	        throw new FailedPredicateException($this, "\\\$this->noTerminatorBetween(2)");
		        	    }
		        	    $this->setState(863);
		        	    $this->identifierList();
		        	    $this->setState(864);
		        	    $this->type_();
		        	break;

		        	case 2:
		        	    $this->setState(866);
		        	    $this->embeddedField();
		        	break;
		        }
		        $this->setState(870);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 93, $this->ctx)) {
		            case 1:
		        	    $this->setState(869);
		        	    $localContext->tag = $this->string_();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function string_() : Context\String_Context
		{
		    $localContext = new Context\String_Context($this->ctx, $this->getState());

		    $this->enterRule($localContext, 178, self::RULE_string_);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(872);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::RAW_STRING_LIT || $_la === self::INTERPRETED_STRING_LIT)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function embeddedField() : Context\EmbeddedFieldContext
		{
		    $localContext = new Context\EmbeddedFieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 180, self::RULE_embeddedField);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(875);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::STAR) {
		        	$this->setState(874);
		        	$this->match(self::STAR);
		        }
		        $this->setState(877);
		        $this->typeName();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionLit() : Context\FunctionLitContext
		{
		    $localContext = new Context\FunctionLitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 182, self::RULE_functionLit);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(879);
		        $this->match(self::FUNC);
		        $this->setState(880);
		        $this->signature();
		        $this->setState(881);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function index() : Context\IndexContext
		{
		    $localContext = new Context\IndexContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 184, self::RULE_index);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(883);
		        $this->match(self::L_BRACKET);
		        $this->setState(884);
		        $this->recursiveExpression(0);
		        $this->setState(885);
		        $this->match(self::R_BRACKET);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function slice_() : Context\Slice_Context
		{
		    $localContext = new Context\Slice_Context($this->ctx, $this->getState());

		    $this->enterRule($localContext, 186, self::RULE_slice_);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(887);
		        $this->match(self::L_BRACKET);
		        $this->setState(903);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 98, $this->ctx)) {
		        	case 1:
		        	    $this->setState(889);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	    	$this->setState(888);
		        	    	$this->recursiveExpression(0);
		        	    }
		        	    $this->setState(891);
		        	    $this->match(self::COLON);
		        	    $this->setState(893);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	    	$this->setState(892);
		        	    	$this->recursiveExpression(0);
		        	    }
		        	break;

		        	case 2:
		        	    $this->setState(896);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	    	$this->setState(895);
		        	    	$this->recursiveExpression(0);
		        	    }
		        	    $this->setState(898);
		        	    $this->match(self::COLON);
		        	    $this->setState(899);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(900);
		        	    $this->match(self::COLON);
		        	    $this->setState(901);
		        	    $this->recursiveExpression(0);
		        	break;
		        }
		        $this->setState(905);
		        $this->match(self::R_BRACKET);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeAssertion() : Context\TypeAssertionContext
		{
		    $localContext = new Context\TypeAssertionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 188, self::RULE_typeAssertion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(907);
		        $this->match(self::DOT);
		        $this->setState(908);
		        $this->match(self::L_PAREN);
		        $this->setState(909);
		        $this->type_();
		        $this->setState(910);
		        $this->match(self::R_PAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arguments() : Context\ArgumentsContext
		{
		    $localContext = new Context\ArgumentsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 190, self::RULE_arguments);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(912);
		        $this->match(self::L_PAREN);
		        $this->setState(927);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::FUNC) | (1 << self::INTERFACE) | (1 << self::MAP) | (1 << self::STRUCT) | (1 << self::CHAN) | (1 << self::NIL_LIT) | (1 << self::IDENTIFIER) | (1 << self::L_PAREN) | (1 << self::L_BRACKET) | (1 << self::EXCLAMATION) | (1 << self::PLUS) | (1 << self::MINUS) | (1 << self::CARET) | (1 << self::STAR) | (1 << self::AMPERSAND) | (1 << self::RECEIVE))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::DECIMAL_LIT - 64)) | (1 << (self::BINARY_LIT - 64)) | (1 << (self::OCTAL_LIT - 64)) | (1 << (self::HEX_LIT - 64)) | (1 << (self::FLOAT_LIT - 64)) | (1 << (self::IMAGINARY_LIT - 64)) | (1 << (self::RUNE_LIT - 64)) | (1 << (self::RAW_STRING_LIT - 64)) | (1 << (self::INTERPRETED_STRING_LIT - 64)))) !== 0)) {
		        	$this->setState(919);
		        	$this->errorHandler->sync($this);

		        	switch ($this->getInterpreter()->adaptivePredict($this->input, 100, $this->ctx)) {
		        		case 1:
		        		    $this->setState(913);
		        		    $this->expressionList();
		        		break;

		        		case 2:
		        		    $this->setState(914);
		        		    $this->type_();
		        		    $this->setState(917);
		        		    $this->errorHandler->sync($this);

		        		    switch ($this->getInterpreter()->adaptivePredict($this->input, 99, $this->ctx)) {
		        		        case 1:
		        		    	    $this->setState(915);
		        		    	    $this->match(self::COMMA);
		        		    	    $this->setState(916);
		        		    	    $this->expressionList();
		        		    	break;
		        		    }
		        		break;
		        	}
		        	$this->setState(922);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::ELLIPSIS) {
		        		$this->setState(921);
		        		$this->match(self::ELLIPSIS);
		        	}
		        	$this->setState(925);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::COMMA) {
		        		$this->setState(924);
		        		$this->match(self::COMMA);
		        	}
		        }
		        $this->setState(929);
		        $this->match(self::R_PAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function methodExpr() : Context\MethodExprContext
		{
		    $localContext = new Context\MethodExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 192, self::RULE_methodExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(931);
		        $this->receiverType();
		        $this->setState(932);
		        $this->match(self::DOT);
		        $this->setState(933);
		        $this->match(self::IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function receiverType() : Context\ReceiverTypeContext
		{
		    $localContext = new Context\ReceiverTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 194, self::RULE_receiverType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(935);
		        $this->type_();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function eos() : Context\EosContext
		{
		    $localContext = new Context\EosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 196, self::RULE_eos);

		    try {
		        $this->setState(941);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 104, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(937);
		        	    $this->match(self::SEMI);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(938);
		        	    $this->match(self::EOF);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(939);

		        	    if (!($this->lineTerminatorAhead())) {
		        	        throw new FailedPredicateException($this, "\\\$this->lineTerminatorAhead()");
		        	    }
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(940);

		        	    if (!($this->checkPreviousTokenText("}"))) {
		        	        throw new FailedPredicateException($this, "\\\$this->checkPreviousTokenText(\"}\")");
		        	    }
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex) : bool
		{
			switch ($ruleIndex) {
					case 64:
						return $this->sempredMethodSpec($localContext, $predicateIndex);

					case 66:
						return $this->sempredSignature($localContext, $predicateIndex);

					case 70:
						return $this->sempredExpression($localContext, $predicateIndex);

					case 71:
						return $this->sempredPrimaryExpr($localContext, $predicateIndex);

					case 88:
						return $this->sempredFieldDecl($localContext, $predicateIndex);

					case 98:
						return $this->sempredEos($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredMethodSpec(?Context\MethodSpecContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->noTerminatorAfterParams(2);
			}

			return true;
		}

		private function sempredSignature(?Context\SignatureContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 1:
			        return $this->noTerminatorAfterParams(1);
			}

			return true;
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 2:
			        return $this->precpred($this->ctx, 5);

			    case 3:
			        return $this->precpred($this->ctx, 4);

			    case 4:
			        return $this->precpred($this->ctx, 3);

			    case 5:
			        return $this->precpred($this->ctx, 2);

			    case 6:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
		}

		private function sempredPrimaryExpr(?Context\PrimaryExprContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 7:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
		}

		private function sempredFieldDecl(?Context\FieldDeclContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 8:
			        return $this->noTerminatorBetween(2);
			}

			return true;
		}

		private function sempredEos(?Context\EosContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 9:
			        return $this->lineTerminatorAhead();

			    case 10:
			        return $this->checkPreviousTokenText("}");
			}

			return true;
		}
	}
}

namespace GoInterpreter\Parser\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GoInterpreter\Parser\GoParser;
	use GoInterpreter\Parser\GoParserVisitor;
	use GoInterpreter\Parser\GoParserListener;

	class SourceFileContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_sourceFile;
	    }

	    public function packageClause() : ?PackageClauseContext
	    {
	    	return $this->getTypedRuleContext(PackageClauseContext::class, 0);
	    }

	    /**
	     * @return array<EosContext>|EosContext|null
	     */
	    public function eos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EosContext::class);
	    	}

	        return $this->getTypedRuleContext(EosContext::class, $index);
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::EOF, 0);
	    }

	    /**
	     * @return array<ImportDeclContext>|ImportDeclContext|null
	     */
	    public function importDecl(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ImportDeclContext::class);
	    	}

	        return $this->getTypedRuleContext(ImportDeclContext::class, $index);
	    }

	    /**
	     * @return array<FunctionDeclContext>|FunctionDeclContext|null
	     */
	    public function functionDecl(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FunctionDeclContext::class);
	    	}

	        return $this->getTypedRuleContext(FunctionDeclContext::class, $index);
	    }

	    /**
	     * @return array<MethodDeclContext>|MethodDeclContext|null
	     */
	    public function methodDecl(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MethodDeclContext::class);
	    	}

	        return $this->getTypedRuleContext(MethodDeclContext::class, $index);
	    }

	    /**
	     * @return array<DeclarationContext>|DeclarationContext|null
	     */
	    public function declaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(DeclarationContext::class);
	    	}

	        return $this->getTypedRuleContext(DeclarationContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterSourceFile($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitSourceFile($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitSourceFile($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PackageClauseContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $packageName
		 */
		public $packageName;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_packageClause;
	    }

	    public function PACKAGE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::PACKAGE, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterPackageClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitPackageClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitPackageClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ImportDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_importDecl;
	    }

	    public function IMPORT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IMPORT, 0);
	    }

	    /**
	     * @return array<ImportSpecContext>|ImportSpecContext|null
	     */
	    public function importSpec(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ImportSpecContext::class);
	    	}

	        return $this->getTypedRuleContext(ImportSpecContext::class, $index);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

	    /**
	     * @return array<EosContext>|EosContext|null
	     */
	    public function eos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EosContext::class);
	    	}

	        return $this->getTypedRuleContext(EosContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterImportDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitImportDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitImportDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ImportSpecContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $alias
		 */
		public $alias;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_importSpec;
	    }

	    public function importPath() : ?ImportPathContext
	    {
	    	return $this->getTypedRuleContext(ImportPathContext::class, 0);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DOT, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterImportSpec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitImportSpec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitImportSpec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ImportPathContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_importPath;
	    }

	    public function string_() : ?String_Context
	    {
	    	return $this->getTypedRuleContext(String_Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterImportPath($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitImportPath($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitImportPath($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_declaration;
	    }

	    public function constDecl() : ?ConstDeclContext
	    {
	    	return $this->getTypedRuleContext(ConstDeclContext::class, 0);
	    }

	    public function typeDecl() : ?TypeDeclContext
	    {
	    	return $this->getTypedRuleContext(TypeDeclContext::class, 0);
	    }

	    public function varDecl() : ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_constDecl;
	    }

	    public function CONST() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CONST, 0);
	    }

	    /**
	     * @return array<ConstSpecContext>|ConstSpecContext|null
	     */
	    public function constSpec(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ConstSpecContext::class);
	    	}

	        return $this->getTypedRuleContext(ConstSpecContext::class, $index);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

	    /**
	     * @return array<EosContext>|EosContext|null
	     */
	    public function eos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EosContext::class);
	    	}

	        return $this->getTypedRuleContext(EosContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterConstDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitConstDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitConstDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstSpecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_constSpec;
	    }

	    public function identifierList() : ?IdentifierListContext
	    {
	    	return $this->getTypedRuleContext(IdentifierListContext::class, 0);
	    }

	    public function ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ASSIGN, 0);
	    }

	    public function expressionList() : ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterConstSpec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitConstSpec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitConstSpec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdentifierListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_identifierList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::IDENTIFIER);
	    	}

	        return $this->getToken(GoParser::IDENTIFIER, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::COMMA);
	    	}

	        return $this->getToken(GoParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterIdentifierList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitIdentifierList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitIdentifierList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_expressionList;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::COMMA);
	    	}

	        return $this->getToken(GoParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterExpressionList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitExpressionList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitExpressionList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeDecl;
	    }

	    public function TYPE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::TYPE, 0);
	    }

	    /**
	     * @return array<TypeSpecContext>|TypeSpecContext|null
	     */
	    public function typeSpec(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeSpecContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeSpecContext::class, $index);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

	    /**
	     * @return array<EosContext>|EosContext|null
	     */
	    public function eos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EosContext::class);
	    	}

	        return $this->getTypedRuleContext(EosContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeSpecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeSpec;
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ASSIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeSpec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeSpec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeSpec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_functionDecl;
	    }

	    public function FUNC() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::FUNC, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

	    public function signature() : ?SignatureContext
	    {
	    	return $this->getTypedRuleContext(SignatureContext::class, 0);
	    }

	    public function block() : ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterFunctionDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitFunctionDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitFunctionDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MethodDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_methodDecl;
	    }

	    public function FUNC() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::FUNC, 0);
	    }

	    public function receiver() : ?ReceiverContext
	    {
	    	return $this->getTypedRuleContext(ReceiverContext::class, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

	    public function signature() : ?SignatureContext
	    {
	    	return $this->getTypedRuleContext(SignatureContext::class, 0);
	    }

	    public function block() : ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterMethodDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitMethodDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitMethodDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReceiverContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_receiver;
	    }

	    public function parameters() : ?ParametersContext
	    {
	    	return $this->getTypedRuleContext(ParametersContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterReceiver($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitReceiver($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitReceiver($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_varDecl;
	    }

	    public function VAR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::VAR, 0);
	    }

	    /**
	     * @return array<VarSpecContext>|VarSpecContext|null
	     */
	    public function varSpec(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(VarSpecContext::class);
	    	}

	        return $this->getTypedRuleContext(VarSpecContext::class, $index);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

	    /**
	     * @return array<EosContext>|EosContext|null
	     */
	    public function eos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EosContext::class);
	    	}

	        return $this->getTypedRuleContext(EosContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VarSpecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_varSpec;
	    }

	    public function identifierList() : ?IdentifierListContext
	    {
	    	return $this->getTypedRuleContext(IdentifierListContext::class, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ASSIGN, 0);
	    }

	    public function expressionList() : ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterVarSpec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitVarSpec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitVarSpec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_block;
	    }

	    public function L_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_CURLY, 0);
	    }

	    public function R_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_CURLY, 0);
	    }

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterBlock($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitBlock($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StatementListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_statementList;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

	    /**
	     * @return array<EosContext>|EosContext|null
	     */
	    public function eos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EosContext::class);
	    	}

	        return $this->getTypedRuleContext(EosContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterStatementList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitStatementList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitStatementList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_statement;
	    }

	    public function declaration() : ?DeclarationContext
	    {
	    	return $this->getTypedRuleContext(DeclarationContext::class, 0);
	    }

	    public function labeledStmt() : ?LabeledStmtContext
	    {
	    	return $this->getTypedRuleContext(LabeledStmtContext::class, 0);
	    }

	    public function simpleStmt() : ?SimpleStmtContext
	    {
	    	return $this->getTypedRuleContext(SimpleStmtContext::class, 0);
	    }

	    public function goStmt() : ?GoStmtContext
	    {
	    	return $this->getTypedRuleContext(GoStmtContext::class, 0);
	    }

	    public function returnStmt() : ?ReturnStmtContext
	    {
	    	return $this->getTypedRuleContext(ReturnStmtContext::class, 0);
	    }

	    public function breakStmt() : ?BreakStmtContext
	    {
	    	return $this->getTypedRuleContext(BreakStmtContext::class, 0);
	    }

	    public function continueStmt() : ?ContinueStmtContext
	    {
	    	return $this->getTypedRuleContext(ContinueStmtContext::class, 0);
	    }

	    public function gotoStmt() : ?GotoStmtContext
	    {
	    	return $this->getTypedRuleContext(GotoStmtContext::class, 0);
	    }

	    public function fallthroughStmt() : ?FallthroughStmtContext
	    {
	    	return $this->getTypedRuleContext(FallthroughStmtContext::class, 0);
	    }

	    public function block() : ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function ifStmt() : ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

	    public function switchStmt() : ?SwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(SwitchStmtContext::class, 0);
	    }

	    public function selectStmt() : ?SelectStmtContext
	    {
	    	return $this->getTypedRuleContext(SelectStmtContext::class, 0);
	    }

	    public function forStmt() : ?ForStmtContext
	    {
	    	return $this->getTypedRuleContext(ForStmtContext::class, 0);
	    }

	    public function deferStmt() : ?DeferStmtContext
	    {
	    	return $this->getTypedRuleContext(DeferStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SimpleStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_simpleStmt;
	    }

	    public function sendStmt() : ?SendStmtContext
	    {
	    	return $this->getTypedRuleContext(SendStmtContext::class, 0);
	    }

	    public function incDecStmt() : ?IncDecStmtContext
	    {
	    	return $this->getTypedRuleContext(IncDecStmtContext::class, 0);
	    }

	    public function assignment() : ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

	    public function expressionStmt() : ?ExpressionStmtContext
	    {
	    	return $this->getTypedRuleContext(ExpressionStmtContext::class, 0);
	    }

	    public function shortVarDecl() : ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function emptyStmt() : ?EmptyStmtContext
	    {
	    	return $this->getTypedRuleContext(EmptyStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterSimpleStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitSimpleStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitSimpleStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_expressionStmt;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterExpressionStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitExpressionStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitExpressionStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SendStmtContext extends ParserRuleContext
	{
		/**
		 * @var ExpressionContext|null $channel
		 */
		public $channel;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_sendStmt;
	    }

	    public function RECEIVE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RECEIVE, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterSendStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitSendStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitSendStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IncDecStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_incDecStmt;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function PLUS_PLUS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::PLUS_PLUS, 0);
	    }

	    public function MINUS_MINUS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::MINUS_MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterIncDecStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitIncDecStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitIncDecStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignmentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_assignment;
	    }

	    /**
	     * @return array<ExpressionListContext>|ExpressionListContext|null
	     */
	    public function expressionList(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionListContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionListContext::class, $index);
	    }

	    public function assign_op() : ?Assign_opContext
	    {
	    	return $this->getTypedRuleContext(Assign_opContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitAssignment($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Assign_opContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_assign_op;
	    }

	    public function ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ASSIGN, 0);
	    }

	    public function PLUS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::PLUS, 0);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::MINUS, 0);
	    }

	    public function OR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::OR, 0);
	    }

	    public function CARET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CARET, 0);
	    }

	    public function STAR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::STAR, 0);
	    }

	    public function DIV() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DIV, 0);
	    }

	    public function MOD() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::MOD, 0);
	    }

	    public function LSHIFT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::LSHIFT, 0);
	    }

	    public function RSHIFT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RSHIFT, 0);
	    }

	    public function AMPERSAND() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::AMPERSAND, 0);
	    }

	    public function BIT_CLEAR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::BIT_CLEAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterAssign_op($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitAssign_op($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitAssign_op($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ShortVarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_shortVarDecl;
	    }

	    public function identifierList() : ?IdentifierListContext
	    {
	    	return $this->getTypedRuleContext(IdentifierListContext::class, 0);
	    }

	    public function DECLARE_ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DECLARE_ASSIGN, 0);
	    }

	    public function expressionList() : ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterShortVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitShortVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitShortVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EmptyStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_emptyStmt;
	    }

	    public function SEMI() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::SEMI, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterEmptyStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitEmptyStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitEmptyStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LabeledStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_labeledStmt;
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::COLON, 0);
	    }

	    public function statement() : ?StatementContext
	    {
	    	return $this->getTypedRuleContext(StatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterLabeledStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitLabeledStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitLabeledStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_returnStmt;
	    }

	    public function RETURN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RETURN, 0);
	    }

	    public function expressionList() : ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterReturnStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitReturnStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitReturnStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BreakStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_breakStmt;
	    }

	    public function BREAK() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::BREAK, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterBreakStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitBreakStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitBreakStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ContinueStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_continueStmt;
	    }

	    public function CONTINUE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CONTINUE, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterContinueStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitContinueStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitContinueStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class GotoStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_gotoStmt;
	    }

	    public function GOTO() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::GOTO, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterGotoStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitGotoStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitGotoStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FallthroughStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_fallthroughStmt;
	    }

	    public function FALLTHROUGH() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::FALLTHROUGH, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterFallthroughStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitFallthroughStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitFallthroughStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeferStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_deferStmt;
	    }

	    public function DEFER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DEFER, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterDeferStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitDeferStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitDeferStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IfStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_ifStmt;
	    }

	    public function IF() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IF, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<BlockContext>|BlockContext|null
	     */
	    public function block(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BlockContext::class);
	    	}

	        return $this->getTypedRuleContext(BlockContext::class, $index);
	    }

	    public function simpleStmt() : ?SimpleStmtContext
	    {
	    	return $this->getTypedRuleContext(SimpleStmtContext::class, 0);
	    }

	    public function SEMI() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::SEMI, 0);
	    }

	    public function ELSE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ELSE, 0);
	    }

	    public function ifStmt() : ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterIfStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitIfStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitIfStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_switchStmt;
	    }

	    public function exprSwitchStmt() : ?ExprSwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(ExprSwitchStmtContext::class, 0);
	    }

	    public function typeSwitchStmt() : ?TypeSwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(TypeSwitchStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprSwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_exprSwitchStmt;
	    }

	    public function SWITCH() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::SWITCH, 0);
	    }

	    public function L_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_CURLY, 0);
	    }

	    public function R_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_CURLY, 0);
	    }

	    public function simpleStmt() : ?SimpleStmtContext
	    {
	    	return $this->getTypedRuleContext(SimpleStmtContext::class, 0);
	    }

	    public function SEMI() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::SEMI, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<ExprCaseClauseContext>|ExprCaseClauseContext|null
	     */
	    public function exprCaseClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprCaseClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprCaseClauseContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterExprSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitExprSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitExprSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprCaseClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_exprCaseClause;
	    }

	    public function exprSwitchCase() : ?ExprSwitchCaseContext
	    {
	    	return $this->getTypedRuleContext(ExprSwitchCaseContext::class, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::COLON, 0);
	    }

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterExprCaseClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitExprCaseClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitExprCaseClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprSwitchCaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_exprSwitchCase;
	    }

	    public function CASE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CASE, 0);
	    }

	    public function expressionList() : ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

	    public function DEFAULT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DEFAULT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterExprSwitchCase($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitExprSwitchCase($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitExprSwitchCase($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeSwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeSwitchStmt;
	    }

	    public function SWITCH() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::SWITCH, 0);
	    }

	    public function typeSwitchGuard() : ?TypeSwitchGuardContext
	    {
	    	return $this->getTypedRuleContext(TypeSwitchGuardContext::class, 0);
	    }

	    public function L_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_CURLY, 0);
	    }

	    public function R_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_CURLY, 0);
	    }

	    public function simpleStmt() : ?SimpleStmtContext
	    {
	    	return $this->getTypedRuleContext(SimpleStmtContext::class, 0);
	    }

	    public function SEMI() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::SEMI, 0);
	    }

	    /**
	     * @return array<TypeCaseClauseContext>|TypeCaseClauseContext|null
	     */
	    public function typeCaseClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeCaseClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeCaseClauseContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeSwitchGuardContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeSwitchGuard;
	    }

	    public function primaryExpr() : ?PrimaryExprContext
	    {
	    	return $this->getTypedRuleContext(PrimaryExprContext::class, 0);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DOT, 0);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function TYPE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::TYPE, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

	    public function DECLARE_ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DECLARE_ASSIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeSwitchGuard($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeSwitchGuard($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeSwitchGuard($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeCaseClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeCaseClause;
	    }

	    public function typeSwitchCase() : ?TypeSwitchCaseContext
	    {
	    	return $this->getTypedRuleContext(TypeSwitchCaseContext::class, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::COLON, 0);
	    }

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeCaseClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeCaseClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeCaseClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeSwitchCaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeSwitchCase;
	    }

	    public function CASE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CASE, 0);
	    }

	    public function typeList() : ?TypeListContext
	    {
	    	return $this->getTypedRuleContext(TypeListContext::class, 0);
	    }

	    public function DEFAULT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DEFAULT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeSwitchCase($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeSwitchCase($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeSwitchCase($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeList;
	    }

	    /**
	     * @return array<Type_Context>|Type_Context|null
	     */
	    public function type_(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Type_Context::class);
	    	}

	        return $this->getTypedRuleContext(Type_Context::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function NIL_LIT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::NIL_LIT);
	    	}

	        return $this->getToken(GoParser::NIL_LIT, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::COMMA);
	    	}

	        return $this->getToken(GoParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SelectStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_selectStmt;
	    }

	    public function SELECT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::SELECT, 0);
	    }

	    public function L_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_CURLY, 0);
	    }

	    public function R_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_CURLY, 0);
	    }

	    /**
	     * @return array<CommClauseContext>|CommClauseContext|null
	     */
	    public function commClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(CommClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(CommClauseContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterSelectStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitSelectStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitSelectStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CommClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_commClause;
	    }

	    public function commCase() : ?CommCaseContext
	    {
	    	return $this->getTypedRuleContext(CommCaseContext::class, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::COLON, 0);
	    }

	    public function statementList() : ?StatementListContext
	    {
	    	return $this->getTypedRuleContext(StatementListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterCommClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitCommClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitCommClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CommCaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_commCase;
	    }

	    public function CASE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CASE, 0);
	    }

	    public function sendStmt() : ?SendStmtContext
	    {
	    	return $this->getTypedRuleContext(SendStmtContext::class, 0);
	    }

	    public function recvStmt() : ?RecvStmtContext
	    {
	    	return $this->getTypedRuleContext(RecvStmtContext::class, 0);
	    }

	    public function DEFAULT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DEFAULT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterCommCase($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitCommCase($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitCommCase($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RecvStmtContext extends ParserRuleContext
	{
		/**
		 * @var ExpressionContext|null $recvExpr
		 */
		public $recvExpr;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_recvStmt;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function expressionList() : ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

	    public function ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ASSIGN, 0);
	    }

	    public function identifierList() : ?IdentifierListContext
	    {
	    	return $this->getTypedRuleContext(IdentifierListContext::class, 0);
	    }

	    public function DECLARE_ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DECLARE_ASSIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterRecvStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitRecvStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitRecvStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_forStmt;
	    }

	    public function FOR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::FOR, 0);
	    }

	    public function block() : ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function forClause() : ?ForClauseContext
	    {
	    	return $this->getTypedRuleContext(ForClauseContext::class, 0);
	    }

	    public function rangeClause() : ?RangeClauseContext
	    {
	    	return $this->getTypedRuleContext(RangeClauseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterForStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitForStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitForStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForClauseContext extends ParserRuleContext
	{
		/**
		 * @var SimpleStmtContext|null $initStmt
		 */
		public $initStmt;

		/**
		 * @var SimpleStmtContext|null $postStmt
		 */
		public $postStmt;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_forClause;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SEMI(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::SEMI);
	    	}

	        return $this->getToken(GoParser::SEMI, $index);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<SimpleStmtContext>|SimpleStmtContext|null
	     */
	    public function simpleStmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SimpleStmtContext::class);
	    	}

	        return $this->getTypedRuleContext(SimpleStmtContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterForClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitForClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitForClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RangeClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_rangeClause;
	    }

	    public function RANGE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RANGE, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function expressionList() : ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

	    public function ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ASSIGN, 0);
	    }

	    public function identifierList() : ?IdentifierListContext
	    {
	    	return $this->getTypedRuleContext(IdentifierListContext::class, 0);
	    }

	    public function DECLARE_ASSIGN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DECLARE_ASSIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterRangeClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitRangeClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitRangeClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class GoStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_goStmt;
	    }

	    public function GO() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::GO, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterGoStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitGoStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitGoStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Type_Context extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_type_;
	    }

	    public function typeName() : ?TypeNameContext
	    {
	    	return $this->getTypedRuleContext(TypeNameContext::class, 0);
	    }

	    public function typeLit() : ?TypeLitContext
	    {
	    	return $this->getTypedRuleContext(TypeLitContext::class, 0);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterType_($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitType_($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitType_($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeNameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeName;
	    }

	    public function qualifiedIdent() : ?QualifiedIdentContext
	    {
	    	return $this->getTypedRuleContext(QualifiedIdentContext::class, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeName($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeName($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeName($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeLitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeLit;
	    }

	    public function arrayType() : ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    public function structType() : ?StructTypeContext
	    {
	    	return $this->getTypedRuleContext(StructTypeContext::class, 0);
	    }

	    public function pointerType() : ?PointerTypeContext
	    {
	    	return $this->getTypedRuleContext(PointerTypeContext::class, 0);
	    }

	    public function functionType() : ?FunctionTypeContext
	    {
	    	return $this->getTypedRuleContext(FunctionTypeContext::class, 0);
	    }

	    public function interfaceType() : ?InterfaceTypeContext
	    {
	    	return $this->getTypedRuleContext(InterfaceTypeContext::class, 0);
	    }

	    public function sliceType() : ?SliceTypeContext
	    {
	    	return $this->getTypedRuleContext(SliceTypeContext::class, 0);
	    }

	    public function mapType() : ?MapTypeContext
	    {
	    	return $this->getTypedRuleContext(MapTypeContext::class, 0);
	    }

	    public function channelType() : ?ChannelTypeContext
	    {
	    	return $this->getTypedRuleContext(ChannelTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_arrayType;
	    }

	    public function L_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_BRACKET, 0);
	    }

	    public function arrayLength() : ?ArrayLengthContext
	    {
	    	return $this->getTypedRuleContext(ArrayLengthContext::class, 0);
	    }

	    public function R_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_BRACKET, 0);
	    }

	    public function elementType() : ?ElementTypeContext
	    {
	    	return $this->getTypedRuleContext(ElementTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterArrayType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitArrayType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitArrayType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayLengthContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_arrayLength;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterArrayLength($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitArrayLength($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitArrayLength($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ElementTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_elementType;
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterElementType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitElementType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitElementType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PointerTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_pointerType;
	    }

	    public function STAR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::STAR, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterPointerType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitPointerType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitPointerType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class InterfaceTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_interfaceType;
	    }

	    public function INTERFACE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::INTERFACE, 0);
	    }

	    public function L_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_CURLY, 0);
	    }

	    public function R_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_CURLY, 0);
	    }

	    /**
	     * @return array<EosContext>|EosContext|null
	     */
	    public function eos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EosContext::class);
	    	}

	        return $this->getTypedRuleContext(EosContext::class, $index);
	    }

	    /**
	     * @return array<MethodSpecContext>|MethodSpecContext|null
	     */
	    public function methodSpec(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MethodSpecContext::class);
	    	}

	        return $this->getTypedRuleContext(MethodSpecContext::class, $index);
	    }

	    /**
	     * @return array<TypeNameContext>|TypeNameContext|null
	     */
	    public function typeName(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeNameContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeNameContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterInterfaceType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitInterfaceType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitInterfaceType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SliceTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_sliceType;
	    }

	    public function L_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_BRACKET, 0);
	    }

	    public function R_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_BRACKET, 0);
	    }

	    public function elementType() : ?ElementTypeContext
	    {
	    	return $this->getTypedRuleContext(ElementTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterSliceType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitSliceType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitSliceType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MapTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_mapType;
	    }

	    public function MAP() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::MAP, 0);
	    }

	    public function L_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_BRACKET, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function R_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_BRACKET, 0);
	    }

	    public function elementType() : ?ElementTypeContext
	    {
	    	return $this->getTypedRuleContext(ElementTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterMapType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitMapType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitMapType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ChannelTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_channelType;
	    }

	    public function elementType() : ?ElementTypeContext
	    {
	    	return $this->getTypedRuleContext(ElementTypeContext::class, 0);
	    }

	    public function CHAN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CHAN, 0);
	    }

	    public function RECEIVE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RECEIVE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterChannelType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitChannelType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitChannelType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MethodSpecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_methodSpec;
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

	    public function parameters() : ?ParametersContext
	    {
	    	return $this->getTypedRuleContext(ParametersContext::class, 0);
	    }

	    public function result() : ?ResultContext
	    {
	    	return $this->getTypedRuleContext(ResultContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterMethodSpec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitMethodSpec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitMethodSpec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_functionType;
	    }

	    public function FUNC() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::FUNC, 0);
	    }

	    public function signature() : ?SignatureContext
	    {
	    	return $this->getTypedRuleContext(SignatureContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterFunctionType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitFunctionType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitFunctionType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SignatureContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_signature;
	    }

	    public function parameters() : ?ParametersContext
	    {
	    	return $this->getTypedRuleContext(ParametersContext::class, 0);
	    }

	    public function result() : ?ResultContext
	    {
	    	return $this->getTypedRuleContext(ResultContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterSignature($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitSignature($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitSignature($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ResultContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_result;
	    }

	    public function parameters() : ?ParametersContext
	    {
	    	return $this->getTypedRuleContext(ParametersContext::class, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterResult($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitResult($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitResult($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParametersContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_parameters;
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

	    /**
	     * @return array<ParameterDeclContext>|ParameterDeclContext|null
	     */
	    public function parameterDecl(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParameterDeclContext::class);
	    	}

	        return $this->getTypedRuleContext(ParameterDeclContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::COMMA);
	    	}

	        return $this->getToken(GoParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterParameters($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitParameters($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitParameters($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParameterDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_parameterDecl;
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function identifierList() : ?IdentifierListContext
	    {
	    	return $this->getTypedRuleContext(IdentifierListContext::class, 0);
	    }

	    public function ELLIPSIS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ELLIPSIS, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterParameterDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitParameterDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitParameterDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $mul_op
		 */
		public $mul_op;

		/**
		 * @var Token|null $add_op
		 */
		public $add_op;

		/**
		 * @var Token|null $rel_op
		 */
		public $rel_op;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_expression;
	    }

	    public function primaryExpr() : ?PrimaryExprContext
	    {
	    	return $this->getTypedRuleContext(PrimaryExprContext::class, 0);
	    }

	    public function unaryExpr() : ?UnaryExprContext
	    {
	    	return $this->getTypedRuleContext(UnaryExprContext::class, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function STAR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::STAR, 0);
	    }

	    public function DIV() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DIV, 0);
	    }

	    public function MOD() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::MOD, 0);
	    }

	    public function LSHIFT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::LSHIFT, 0);
	    }

	    public function RSHIFT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RSHIFT, 0);
	    }

	    public function AMPERSAND() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::AMPERSAND, 0);
	    }

	    public function BIT_CLEAR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::BIT_CLEAR, 0);
	    }

	    public function PLUS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::PLUS, 0);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::MINUS, 0);
	    }

	    public function OR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::OR, 0);
	    }

	    public function CARET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CARET, 0);
	    }

	    public function EQUALS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::EQUALS, 0);
	    }

	    public function NOT_EQUALS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::NOT_EQUALS, 0);
	    }

	    public function LESS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::LESS, 0);
	    }

	    public function LESS_OR_EQUALS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::LESS_OR_EQUALS, 0);
	    }

	    public function GREATER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::GREATER, 0);
	    }

	    public function GREATER_OR_EQUALS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::GREATER_OR_EQUALS, 0);
	    }

	    public function LOGICAL_AND() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::LOGICAL_AND, 0);
	    }

	    public function LOGICAL_OR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::LOGICAL_OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrimaryExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_primaryExpr;
	    }

	    public function operand() : ?OperandContext
	    {
	    	return $this->getTypedRuleContext(OperandContext::class, 0);
	    }

	    public function conversion() : ?ConversionContext
	    {
	    	return $this->getTypedRuleContext(ConversionContext::class, 0);
	    }

	    public function methodExpr() : ?MethodExprContext
	    {
	    	return $this->getTypedRuleContext(MethodExprContext::class, 0);
	    }

	    public function primaryExpr() : ?PrimaryExprContext
	    {
	    	return $this->getTypedRuleContext(PrimaryExprContext::class, 0);
	    }

	    public function index() : ?IndexContext
	    {
	    	return $this->getTypedRuleContext(IndexContext::class, 0);
	    }

	    public function slice_() : ?Slice_Context
	    {
	    	return $this->getTypedRuleContext(Slice_Context::class, 0);
	    }

	    public function typeAssertion() : ?TypeAssertionContext
	    {
	    	return $this->getTypedRuleContext(TypeAssertionContext::class, 0);
	    }

	    public function arguments() : ?ArgumentsContext
	    {
	    	return $this->getTypedRuleContext(ArgumentsContext::class, 0);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DOT, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterPrimaryExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitPrimaryExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitPrimaryExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryExprContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $unary_op
		 */
		public $unary_op;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_unaryExpr;
	    }

	    public function primaryExpr() : ?PrimaryExprContext
	    {
	    	return $this->getTypedRuleContext(PrimaryExprContext::class, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function PLUS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::PLUS, 0);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::MINUS, 0);
	    }

	    public function EXCLAMATION() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::EXCLAMATION, 0);
	    }

	    public function CARET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::CARET, 0);
	    }

	    public function STAR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::STAR, 0);
	    }

	    public function AMPERSAND() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::AMPERSAND, 0);
	    }

	    public function RECEIVE() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RECEIVE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterUnaryExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitUnaryExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitUnaryExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConversionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_conversion;
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

	    public function COMMA() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::COMMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterConversion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitConversion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitConversion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OperandContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_operand;
	    }

	    public function literal() : ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function operandName() : ?OperandNameContext
	    {
	    	return $this->getTypedRuleContext(OperandNameContext::class, 0);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterOperand($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitOperand($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitOperand($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_literal;
	    }

	    public function basicLit() : ?BasicLitContext
	    {
	    	return $this->getTypedRuleContext(BasicLitContext::class, 0);
	    }

	    public function compositeLit() : ?CompositeLitContext
	    {
	    	return $this->getTypedRuleContext(CompositeLitContext::class, 0);
	    }

	    public function functionLit() : ?FunctionLitContext
	    {
	    	return $this->getTypedRuleContext(FunctionLitContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BasicLitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_basicLit;
	    }

	    public function NIL_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::NIL_LIT, 0);
	    }

	    public function integer() : ?IntegerContext
	    {
	    	return $this->getTypedRuleContext(IntegerContext::class, 0);
	    }

	    public function string_() : ?String_Context
	    {
	    	return $this->getTypedRuleContext(String_Context::class, 0);
	    }

	    public function FLOAT_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::FLOAT_LIT, 0);
	    }

	    public function IMAGINARY_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IMAGINARY_LIT, 0);
	    }

	    public function RUNE_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RUNE_LIT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterBasicLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitBasicLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitBasicLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IntegerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_integer;
	    }

	    public function DECIMAL_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DECIMAL_LIT, 0);
	    }

	    public function BINARY_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::BINARY_LIT, 0);
	    }

	    public function OCTAL_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::OCTAL_LIT, 0);
	    }

	    public function HEX_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::HEX_LIT, 0);
	    }

	    public function IMAGINARY_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IMAGINARY_LIT, 0);
	    }

	    public function RUNE_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RUNE_LIT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterInteger($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitInteger($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitInteger($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OperandNameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_operandName;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::IDENTIFIER);
	    	}

	        return $this->getToken(GoParser::IDENTIFIER, $index);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterOperandName($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitOperandName($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitOperandName($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class QualifiedIdentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_qualifiedIdent;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::IDENTIFIER);
	    	}

	        return $this->getToken(GoParser::IDENTIFIER, $index);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterQualifiedIdent($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitQualifiedIdent($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitQualifiedIdent($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CompositeLitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_compositeLit;
	    }

	    public function literalType() : ?LiteralTypeContext
	    {
	    	return $this->getTypedRuleContext(LiteralTypeContext::class, 0);
	    }

	    public function literalValue() : ?LiteralValueContext
	    {
	    	return $this->getTypedRuleContext(LiteralValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterCompositeLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitCompositeLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitCompositeLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_literalType;
	    }

	    public function structType() : ?StructTypeContext
	    {
	    	return $this->getTypedRuleContext(StructTypeContext::class, 0);
	    }

	    public function arrayType() : ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    public function L_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_BRACKET, 0);
	    }

	    public function ELLIPSIS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ELLIPSIS, 0);
	    }

	    public function R_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_BRACKET, 0);
	    }

	    public function elementType() : ?ElementTypeContext
	    {
	    	return $this->getTypedRuleContext(ElementTypeContext::class, 0);
	    }

	    public function sliceType() : ?SliceTypeContext
	    {
	    	return $this->getTypedRuleContext(SliceTypeContext::class, 0);
	    }

	    public function mapType() : ?MapTypeContext
	    {
	    	return $this->getTypedRuleContext(MapTypeContext::class, 0);
	    }

	    public function typeName() : ?TypeNameContext
	    {
	    	return $this->getTypedRuleContext(TypeNameContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterLiteralType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitLiteralType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitLiteralType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_literalValue;
	    }

	    public function L_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_CURLY, 0);
	    }

	    public function R_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_CURLY, 0);
	    }

	    public function elementList() : ?ElementListContext
	    {
	    	return $this->getTypedRuleContext(ElementListContext::class, 0);
	    }

	    public function COMMA() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::COMMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterLiteralValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitLiteralValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitLiteralValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ElementListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_elementList;
	    }

	    /**
	     * @return array<KeyedElementContext>|KeyedElementContext|null
	     */
	    public function keyedElement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(KeyedElementContext::class);
	    	}

	        return $this->getTypedRuleContext(KeyedElementContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::COMMA);
	    	}

	        return $this->getToken(GoParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterElementList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitElementList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitElementList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class KeyedElementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_keyedElement;
	    }

	    public function element() : ?ElementContext
	    {
	    	return $this->getTypedRuleContext(ElementContext::class, 0);
	    }

	    public function key() : ?KeyContext
	    {
	    	return $this->getTypedRuleContext(KeyContext::class, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::COLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterKeyedElement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitKeyedElement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitKeyedElement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class KeyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_key;
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function literalValue() : ?LiteralValueContext
	    {
	    	return $this->getTypedRuleContext(LiteralValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterKey($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitKey($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitKey($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ElementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_element;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function literalValue() : ?LiteralValueContext
	    {
	    	return $this->getTypedRuleContext(LiteralValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterElement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitElement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitElement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StructTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_structType;
	    }

	    public function STRUCT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::STRUCT, 0);
	    }

	    public function L_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_CURLY, 0);
	    }

	    public function R_CURLY() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_CURLY, 0);
	    }

	    /**
	     * @return array<FieldDeclContext>|FieldDeclContext|null
	     */
	    public function fieldDecl(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FieldDeclContext::class);
	    	}

	        return $this->getTypedRuleContext(FieldDeclContext::class, $index);
	    }

	    /**
	     * @return array<EosContext>|EosContext|null
	     */
	    public function eos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EosContext::class);
	    	}

	        return $this->getTypedRuleContext(EosContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterStructType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitStructType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitStructType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FieldDeclContext extends ParserRuleContext
	{
		/**
		 * @var String_Context|null $tag
		 */
		public $tag;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_fieldDecl;
	    }

	    public function identifierList() : ?IdentifierListContext
	    {
	    	return $this->getTypedRuleContext(IdentifierListContext::class, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function embeddedField() : ?EmbeddedFieldContext
	    {
	    	return $this->getTypedRuleContext(EmbeddedFieldContext::class, 0);
	    }

	    public function string_() : ?String_Context
	    {
	    	return $this->getTypedRuleContext(String_Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterFieldDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitFieldDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitFieldDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class String_Context extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_string_;
	    }

	    public function RAW_STRING_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::RAW_STRING_LIT, 0);
	    }

	    public function INTERPRETED_STRING_LIT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::INTERPRETED_STRING_LIT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterString_($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitString_($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitString_($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EmbeddedFieldContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_embeddedField;
	    }

	    public function typeName() : ?TypeNameContext
	    {
	    	return $this->getTypedRuleContext(TypeNameContext::class, 0);
	    }

	    public function STAR() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::STAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterEmbeddedField($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitEmbeddedField($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitEmbeddedField($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionLitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_functionLit;
	    }

	    public function FUNC() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::FUNC, 0);
	    }

	    public function signature() : ?SignatureContext
	    {
	    	return $this->getTypedRuleContext(SignatureContext::class, 0);
	    }

	    public function block() : ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterFunctionLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitFunctionLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitFunctionLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IndexContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_index;
	    }

	    public function L_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_BRACKET, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function R_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_BRACKET, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterIndex($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitIndex($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitIndex($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Slice_Context extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_slice_;
	    }

	    public function L_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_BRACKET, 0);
	    }

	    public function R_BRACKET() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_BRACKET, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COLON(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::COLON);
	    	}

	        return $this->getToken(GoParser::COLON, $index);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterSlice_($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitSlice_($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitSlice_($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeAssertionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_typeAssertion;
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DOT, 0);
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterTypeAssertion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitTypeAssertion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitTypeAssertion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgumentsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_arguments;
	    }

	    public function L_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::L_PAREN, 0);
	    }

	    public function R_PAREN() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::R_PAREN, 0);
	    }

	    public function expressionList() : ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

	    public function ELLIPSIS() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::ELLIPSIS, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GoParser::COMMA);
	    	}

	        return $this->getToken(GoParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterArguments($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitArguments($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitArguments($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MethodExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_methodExpr;
	    }

	    public function receiverType() : ?ReceiverTypeContext
	    {
	    	return $this->getTypedRuleContext(ReceiverTypeContext::class, 0);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::DOT, 0);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterMethodExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitMethodExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitMethodExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReceiverTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_receiverType;
	    }

	    public function type_() : ?Type_Context
	    {
	    	return $this->getTypedRuleContext(Type_Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterReceiverType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitReceiverType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitReceiverType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EosContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return GoParser::RULE_eos;
	    }

	    public function SEMI() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::SEMI, 0);
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(GoParser::EOF, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->enterEos($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof GoParserListener) {
			    $listener->exitEos($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof GoParserVisitor) {
			    return $visitor->visitEos($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}