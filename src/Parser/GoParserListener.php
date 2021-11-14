<?php

/*
 * Generated from GoParser.g4 by ANTLR 4.9
 */

namespace GoInterpreter\Parser;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GoParser}.
 */
interface GoParserListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GoParser::sourceFile()}.
	 * @param $context The parse tree.
	 */
	public function enterSourceFile(Context\SourceFileContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::sourceFile()}.
	 * @param $context The parse tree.
	 */
	public function exitSourceFile(Context\SourceFileContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::packageClause()}.
	 * @param $context The parse tree.
	 */
	public function enterPackageClause(Context\PackageClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::packageClause()}.
	 * @param $context The parse tree.
	 */
	public function exitPackageClause(Context\PackageClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::importDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterImportDecl(Context\ImportDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::importDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitImportDecl(Context\ImportDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::importSpec()}.
	 * @param $context The parse tree.
	 */
	public function enterImportSpec(Context\ImportSpecContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::importSpec()}.
	 * @param $context The parse tree.
	 */
	public function exitImportSpec(Context\ImportSpecContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::importPath()}.
	 * @param $context The parse tree.
	 */
	public function enterImportPath(Context\ImportPathContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::importPath()}.
	 * @param $context The parse tree.
	 */
	public function exitImportPath(Context\ImportPathContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaration(Context\DeclarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaration(Context\DeclarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::constDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterConstDecl(Context\ConstDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::constDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitConstDecl(Context\ConstDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::constSpec()}.
	 * @param $context The parse tree.
	 */
	public function enterConstSpec(Context\ConstSpecContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::constSpec()}.
	 * @param $context The parse tree.
	 */
	public function exitConstSpec(Context\ConstSpecContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::identifierList()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifierList(Context\IdentifierListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::identifierList()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifierList(Context\IdentifierListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::expressionList()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionList(Context\ExpressionListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::expressionList()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionList(Context\ExpressionListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeDecl(Context\TypeDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeDecl(Context\TypeDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeSpec()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeSpec(Context\TypeSpecContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeSpec()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeSpec(Context\TypeSpecContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::functionDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionDecl(Context\FunctionDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::functionDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionDecl(Context\FunctionDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::methodDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterMethodDecl(Context\MethodDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::methodDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitMethodDecl(Context\MethodDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::receiver()}.
	 * @param $context The parse tree.
	 */
	public function enterReceiver(Context\ReceiverContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::receiver()}.
	 * @param $context The parse tree.
	 */
	public function exitReceiver(Context\ReceiverContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::varDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterVarDecl(Context\VarDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::varDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitVarDecl(Context\VarDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::varSpec()}.
	 * @param $context The parse tree.
	 */
	public function enterVarSpec(Context\VarSpecContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::varSpec()}.
	 * @param $context The parse tree.
	 */
	public function exitVarSpec(Context\VarSpecContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlock(Context\BlockContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlock(Context\BlockContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::statementList()}.
	 * @param $context The parse tree.
	 */
	public function enterStatementList(Context\StatementListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::statementList()}.
	 * @param $context The parse tree.
	 */
	public function exitStatementList(Context\StatementListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::simpleStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleStmt(Context\SimpleStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::simpleStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleStmt(Context\SimpleStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::expressionStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionStmt(Context\ExpressionStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::expressionStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionStmt(Context\ExpressionStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::sendStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSendStmt(Context\SendStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::sendStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSendStmt(Context\SendStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::incDecStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIncDecStmt(Context\IncDecStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::incDecStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIncDecStmt(Context\IncDecStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment(Context\AssignmentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment(Context\AssignmentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::assign_op()}.
	 * @param $context The parse tree.
	 */
	public function enterAssign_op(Context\Assign_opContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::assign_op()}.
	 * @param $context The parse tree.
	 */
	public function exitAssign_op(Context\Assign_opContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::shortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterShortVarDecl(Context\ShortVarDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::shortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitShortVarDecl(Context\ShortVarDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::emptyStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterEmptyStmt(Context\EmptyStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::emptyStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitEmptyStmt(Context\EmptyStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::labeledStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterLabeledStmt(Context\LabeledStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::labeledStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitLabeledStmt(Context\LabeledStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnStmt(Context\ReturnStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnStmt(Context\ReturnStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::breakStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterBreakStmt(Context\BreakStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::breakStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitBreakStmt(Context\BreakStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::continueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterContinueStmt(Context\ContinueStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::continueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitContinueStmt(Context\ContinueStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::gotoStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterGotoStmt(Context\GotoStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::gotoStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitGotoStmt(Context\GotoStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::fallthroughStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterFallthroughStmt(Context\FallthroughStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::fallthroughStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitFallthroughStmt(Context\FallthroughStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::deferStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDeferStmt(Context\DeferStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::deferStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDeferStmt(Context\DeferStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStmt(Context\IfStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStmt(Context\IfStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitchStmt(Context\SwitchStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitchStmt(Context\SwitchStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::exprSwitchStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterExprSwitchStmt(Context\ExprSwitchStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::exprSwitchStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitExprSwitchStmt(Context\ExprSwitchStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::exprCaseClause()}.
	 * @param $context The parse tree.
	 */
	public function enterExprCaseClause(Context\ExprCaseClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::exprCaseClause()}.
	 * @param $context The parse tree.
	 */
	public function exitExprCaseClause(Context\ExprCaseClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::exprSwitchCase()}.
	 * @param $context The parse tree.
	 */
	public function enterExprSwitchCase(Context\ExprSwitchCaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::exprSwitchCase()}.
	 * @param $context The parse tree.
	 */
	public function exitExprSwitchCase(Context\ExprSwitchCaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeSwitchStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeSwitchStmt(Context\TypeSwitchStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeSwitchStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeSwitchStmt(Context\TypeSwitchStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeSwitchGuard()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeSwitchGuard(Context\TypeSwitchGuardContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeSwitchGuard()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeSwitchGuard(Context\TypeSwitchGuardContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeCaseClause()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeCaseClause(Context\TypeCaseClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeCaseClause()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeCaseClause(Context\TypeCaseClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeSwitchCase()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeSwitchCase(Context\TypeSwitchCaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeSwitchCase()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeSwitchCase(Context\TypeSwitchCaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeList()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeList(Context\TypeListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeList()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeList(Context\TypeListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::selectStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectStmt(Context\SelectStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::selectStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectStmt(Context\SelectStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::commClause()}.
	 * @param $context The parse tree.
	 */
	public function enterCommClause(Context\CommClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::commClause()}.
	 * @param $context The parse tree.
	 */
	public function exitCommClause(Context\CommClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::commCase()}.
	 * @param $context The parse tree.
	 */
	public function enterCommCase(Context\CommCaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::commCase()}.
	 * @param $context The parse tree.
	 */
	public function exitCommCase(Context\CommCaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::recvStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterRecvStmt(Context\RecvStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::recvStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitRecvStmt(Context\RecvStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForStmt(Context\ForStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForStmt(Context\ForStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::forClause()}.
	 * @param $context The parse tree.
	 */
	public function enterForClause(Context\ForClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::forClause()}.
	 * @param $context The parse tree.
	 */
	public function exitForClause(Context\ForClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::rangeClause()}.
	 * @param $context The parse tree.
	 */
	public function enterRangeClause(Context\RangeClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::rangeClause()}.
	 * @param $context The parse tree.
	 */
	public function exitRangeClause(Context\RangeClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::goStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterGoStmt(Context\GoStmtContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::goStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitGoStmt(Context\GoStmtContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::type_()}.
	 * @param $context The parse tree.
	 */
	public function enterType_(Context\Type_Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::type_()}.
	 * @param $context The parse tree.
	 */
	public function exitType_(Context\Type_Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeName()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeName(Context\TypeNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeName()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeName(Context\TypeNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeLit()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeLit(Context\TypeLitContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeLit()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeLit(Context\TypeLitContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::arrayType()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayType(Context\ArrayTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::arrayType()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayType(Context\ArrayTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::arrayLength()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayLength(Context\ArrayLengthContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::arrayLength()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayLength(Context\ArrayLengthContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::elementType()}.
	 * @param $context The parse tree.
	 */
	public function enterElementType(Context\ElementTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::elementType()}.
	 * @param $context The parse tree.
	 */
	public function exitElementType(Context\ElementTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::pointerType()}.
	 * @param $context The parse tree.
	 */
	public function enterPointerType(Context\PointerTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::pointerType()}.
	 * @param $context The parse tree.
	 */
	public function exitPointerType(Context\PointerTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::interfaceType()}.
	 * @param $context The parse tree.
	 */
	public function enterInterfaceType(Context\InterfaceTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::interfaceType()}.
	 * @param $context The parse tree.
	 */
	public function exitInterfaceType(Context\InterfaceTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::sliceType()}.
	 * @param $context The parse tree.
	 */
	public function enterSliceType(Context\SliceTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::sliceType()}.
	 * @param $context The parse tree.
	 */
	public function exitSliceType(Context\SliceTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::mapType()}.
	 * @param $context The parse tree.
	 */
	public function enterMapType(Context\MapTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::mapType()}.
	 * @param $context The parse tree.
	 */
	public function exitMapType(Context\MapTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::channelType()}.
	 * @param $context The parse tree.
	 */
	public function enterChannelType(Context\ChannelTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::channelType()}.
	 * @param $context The parse tree.
	 */
	public function exitChannelType(Context\ChannelTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::methodSpec()}.
	 * @param $context The parse tree.
	 */
	public function enterMethodSpec(Context\MethodSpecContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::methodSpec()}.
	 * @param $context The parse tree.
	 */
	public function exitMethodSpec(Context\MethodSpecContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::functionType()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionType(Context\FunctionTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::functionType()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionType(Context\FunctionTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::signature()}.
	 * @param $context The parse tree.
	 */
	public function enterSignature(Context\SignatureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::signature()}.
	 * @param $context The parse tree.
	 */
	public function exitSignature(Context\SignatureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::result()}.
	 * @param $context The parse tree.
	 */
	public function enterResult(Context\ResultContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::result()}.
	 * @param $context The parse tree.
	 */
	public function exitResult(Context\ResultContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::parameters()}.
	 * @param $context The parse tree.
	 */
	public function enterParameters(Context\ParametersContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::parameters()}.
	 * @param $context The parse tree.
	 */
	public function exitParameters(Context\ParametersContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::parameterDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterParameterDecl(Context\ParameterDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::parameterDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitParameterDecl(Context\ParameterDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::primaryExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimaryExpr(Context\PrimaryExprContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::primaryExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimaryExpr(Context\PrimaryExprContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::unaryExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryExpr(Context\UnaryExprContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::unaryExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryExpr(Context\UnaryExprContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::conversion()}.
	 * @param $context The parse tree.
	 */
	public function enterConversion(Context\ConversionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::conversion()}.
	 * @param $context The parse tree.
	 */
	public function exitConversion(Context\ConversionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::operand()}.
	 * @param $context The parse tree.
	 */
	public function enterOperand(Context\OperandContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::operand()}.
	 * @param $context The parse tree.
	 */
	public function exitOperand(Context\OperandContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::basicLit()}.
	 * @param $context The parse tree.
	 */
	public function enterBasicLit(Context\BasicLitContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::basicLit()}.
	 * @param $context The parse tree.
	 */
	public function exitBasicLit(Context\BasicLitContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::integer()}.
	 * @param $context The parse tree.
	 */
	public function enterInteger(Context\IntegerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::integer()}.
	 * @param $context The parse tree.
	 */
	public function exitInteger(Context\IntegerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::operandName()}.
	 * @param $context The parse tree.
	 */
	public function enterOperandName(Context\OperandNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::operandName()}.
	 * @param $context The parse tree.
	 */
	public function exitOperandName(Context\OperandNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::qualifiedIdent()}.
	 * @param $context The parse tree.
	 */
	public function enterQualifiedIdent(Context\QualifiedIdentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::qualifiedIdent()}.
	 * @param $context The parse tree.
	 */
	public function exitQualifiedIdent(Context\QualifiedIdentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::compositeLit()}.
	 * @param $context The parse tree.
	 */
	public function enterCompositeLit(Context\CompositeLitContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::compositeLit()}.
	 * @param $context The parse tree.
	 */
	public function exitCompositeLit(Context\CompositeLitContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::literalType()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteralType(Context\LiteralTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::literalType()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteralType(Context\LiteralTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::literalValue()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteralValue(Context\LiteralValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::literalValue()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteralValue(Context\LiteralValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::elementList()}.
	 * @param $context The parse tree.
	 */
	public function enterElementList(Context\ElementListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::elementList()}.
	 * @param $context The parse tree.
	 */
	public function exitElementList(Context\ElementListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::keyedElement()}.
	 * @param $context The parse tree.
	 */
	public function enterKeyedElement(Context\KeyedElementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::keyedElement()}.
	 * @param $context The parse tree.
	 */
	public function exitKeyedElement(Context\KeyedElementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::key()}.
	 * @param $context The parse tree.
	 */
	public function enterKey(Context\KeyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::key()}.
	 * @param $context The parse tree.
	 */
	public function exitKey(Context\KeyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::element()}.
	 * @param $context The parse tree.
	 */
	public function enterElement(Context\ElementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::element()}.
	 * @param $context The parse tree.
	 */
	public function exitElement(Context\ElementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::structType()}.
	 * @param $context The parse tree.
	 */
	public function enterStructType(Context\StructTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::structType()}.
	 * @param $context The parse tree.
	 */
	public function exitStructType(Context\StructTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::fieldDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterFieldDecl(Context\FieldDeclContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::fieldDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitFieldDecl(Context\FieldDeclContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::string_()}.
	 * @param $context The parse tree.
	 */
	public function enterString_(Context\String_Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::string_()}.
	 * @param $context The parse tree.
	 */
	public function exitString_(Context\String_Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::embeddedField()}.
	 * @param $context The parse tree.
	 */
	public function enterEmbeddedField(Context\EmbeddedFieldContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::embeddedField()}.
	 * @param $context The parse tree.
	 */
	public function exitEmbeddedField(Context\EmbeddedFieldContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::functionLit()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionLit(Context\FunctionLitContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::functionLit()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionLit(Context\FunctionLitContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::index()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex(Context\IndexContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::index()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex(Context\IndexContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::slice_()}.
	 * @param $context The parse tree.
	 */
	public function enterSlice_(Context\Slice_Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::slice_()}.
	 * @param $context The parse tree.
	 */
	public function exitSlice_(Context\Slice_Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::typeAssertion()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeAssertion(Context\TypeAssertionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::typeAssertion()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeAssertion(Context\TypeAssertionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::arguments()}.
	 * @param $context The parse tree.
	 */
	public function enterArguments(Context\ArgumentsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::arguments()}.
	 * @param $context The parse tree.
	 */
	public function exitArguments(Context\ArgumentsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::methodExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterMethodExpr(Context\MethodExprContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::methodExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitMethodExpr(Context\MethodExprContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::receiverType()}.
	 * @param $context The parse tree.
	 */
	public function enterReceiverType(Context\ReceiverTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::receiverType()}.
	 * @param $context The parse tree.
	 */
	public function exitReceiverType(Context\ReceiverTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see GoParser::eos()}.
	 * @param $context The parse tree.
	 */
	public function enterEos(Context\EosContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see GoParser::eos()}.
	 * @param $context The parse tree.
	 */
	public function exitEos(Context\EosContext $context) : void;
}