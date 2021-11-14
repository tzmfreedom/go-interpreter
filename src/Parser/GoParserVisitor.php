<?php

/*
 * Generated from GoParser.g4 by ANTLR 4.9
 */

namespace GoInterpreter\Parser;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GoParser}.
 */
interface GoParserVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GoParser::sourceFile()}.
	 *
	 * @param Context\SourceFileContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSourceFile(Context\SourceFileContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::packageClause()}.
	 *
	 * @param Context\PackageClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPackageClause(Context\PackageClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::importDecl()}.
	 *
	 * @param Context\ImportDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitImportDecl(Context\ImportDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::importSpec()}.
	 *
	 * @param Context\ImportSpecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitImportSpec(Context\ImportSpecContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::importPath()}.
	 *
	 * @param Context\ImportPathContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitImportPath(Context\ImportPathContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::declaration()}.
	 *
	 * @param Context\DeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaration(Context\DeclarationContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::constDecl()}.
	 *
	 * @param Context\ConstDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstDecl(Context\ConstDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::constSpec()}.
	 *
	 * @param Context\ConstSpecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstSpec(Context\ConstSpecContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::identifierList()}.
	 *
	 * @param Context\IdentifierListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifierList(Context\IdentifierListContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::expressionList()}.
	 *
	 * @param Context\ExpressionListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpressionList(Context\ExpressionListContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeDecl()}.
	 *
	 * @param Context\TypeDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeDecl(Context\TypeDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeSpec()}.
	 *
	 * @param Context\TypeSpecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeSpec(Context\TypeSpecContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::functionDecl()}.
	 *
	 * @param Context\FunctionDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionDecl(Context\FunctionDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::methodDecl()}.
	 *
	 * @param Context\MethodDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethodDecl(Context\MethodDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::receiver()}.
	 *
	 * @param Context\ReceiverContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReceiver(Context\ReceiverContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::varDecl()}.
	 *
	 * @param Context\VarDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarDecl(Context\VarDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::varSpec()}.
	 *
	 * @param Context\VarSpecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarSpec(Context\VarSpecContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::block()}.
	 *
	 * @param Context\BlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBlock(Context\BlockContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::statementList()}.
	 *
	 * @param Context\StatementListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStatementList(Context\StatementListContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::statement()}.
	 *
	 * @param Context\StatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStatement(Context\StatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::simpleStmt()}.
	 *
	 * @param Context\SimpleStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimpleStmt(Context\SimpleStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::expressionStmt()}.
	 *
	 * @param Context\ExpressionStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpressionStmt(Context\ExpressionStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::sendStmt()}.
	 *
	 * @param Context\SendStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSendStmt(Context\SendStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::incDecStmt()}.
	 *
	 * @param Context\IncDecStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncDecStmt(Context\IncDecStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::assignment()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::assign_op()}.
	 *
	 * @param Context\Assign_opContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssign_op(Context\Assign_opContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::shortVarDecl()}.
	 *
	 * @param Context\ShortVarDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShortVarDecl(Context\ShortVarDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::emptyStmt()}.
	 *
	 * @param Context\EmptyStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEmptyStmt(Context\EmptyStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::labeledStmt()}.
	 *
	 * @param Context\LabeledStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLabeledStmt(Context\LabeledStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::returnStmt()}.
	 *
	 * @param Context\ReturnStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnStmt(Context\ReturnStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::breakStmt()}.
	 *
	 * @param Context\BreakStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBreakStmt(Context\BreakStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::continueStmt()}.
	 *
	 * @param Context\ContinueStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContinueStmt(Context\ContinueStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::gotoStmt()}.
	 *
	 * @param Context\GotoStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGotoStmt(Context\GotoStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::fallthroughStmt()}.
	 *
	 * @param Context\FallthroughStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFallthroughStmt(Context\FallthroughStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::deferStmt()}.
	 *
	 * @param Context\DeferStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeferStmt(Context\DeferStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::ifStmt()}.
	 *
	 * @param Context\IfStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStmt(Context\IfStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::switchStmt()}.
	 *
	 * @param Context\SwitchStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchStmt(Context\SwitchStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::exprSwitchStmt()}.
	 *
	 * @param Context\ExprSwitchStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprSwitchStmt(Context\ExprSwitchStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::exprCaseClause()}.
	 *
	 * @param Context\ExprCaseClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprCaseClause(Context\ExprCaseClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::exprSwitchCase()}.
	 *
	 * @param Context\ExprSwitchCaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprSwitchCase(Context\ExprSwitchCaseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeSwitchStmt()}.
	 *
	 * @param Context\TypeSwitchStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeSwitchStmt(Context\TypeSwitchStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeSwitchGuard()}.
	 *
	 * @param Context\TypeSwitchGuardContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeSwitchGuard(Context\TypeSwitchGuardContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeCaseClause()}.
	 *
	 * @param Context\TypeCaseClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeCaseClause(Context\TypeCaseClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeSwitchCase()}.
	 *
	 * @param Context\TypeSwitchCaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeSwitchCase(Context\TypeSwitchCaseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeList()}.
	 *
	 * @param Context\TypeListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeList(Context\TypeListContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::selectStmt()}.
	 *
	 * @param Context\SelectStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelectStmt(Context\SelectStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::commClause()}.
	 *
	 * @param Context\CommClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCommClause(Context\CommClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::commCase()}.
	 *
	 * @param Context\CommCaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCommCase(Context\CommCaseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::recvStmt()}.
	 *
	 * @param Context\RecvStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecvStmt(Context\RecvStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::forStmt()}.
	 *
	 * @param Context\ForStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForStmt(Context\ForStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::forClause()}.
	 *
	 * @param Context\ForClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForClause(Context\ForClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::rangeClause()}.
	 *
	 * @param Context\RangeClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRangeClause(Context\RangeClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::goStmt()}.
	 *
	 * @param Context\GoStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGoStmt(Context\GoStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::type_()}.
	 *
	 * @param Context\Type_Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_(Context\Type_Context $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeName()}.
	 *
	 * @param Context\TypeNameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeName(Context\TypeNameContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeLit()}.
	 *
	 * @param Context\TypeLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeLit(Context\TypeLitContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::arrayType()}.
	 *
	 * @param Context\ArrayTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayType(Context\ArrayTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::arrayLength()}.
	 *
	 * @param Context\ArrayLengthContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayLength(Context\ArrayLengthContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::elementType()}.
	 *
	 * @param Context\ElementTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElementType(Context\ElementTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::pointerType()}.
	 *
	 * @param Context\PointerTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPointerType(Context\PointerTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::interfaceType()}.
	 *
	 * @param Context\InterfaceTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInterfaceType(Context\InterfaceTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::sliceType()}.
	 *
	 * @param Context\SliceTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSliceType(Context\SliceTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::mapType()}.
	 *
	 * @param Context\MapTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMapType(Context\MapTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::channelType()}.
	 *
	 * @param Context\ChannelTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitChannelType(Context\ChannelTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::methodSpec()}.
	 *
	 * @param Context\MethodSpecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethodSpec(Context\MethodSpecContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::functionType()}.
	 *
	 * @param Context\FunctionTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionType(Context\FunctionTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::signature()}.
	 *
	 * @param Context\SignatureContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSignature(Context\SignatureContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::result()}.
	 *
	 * @param Context\ResultContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitResult(Context\ResultContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::parameters()}.
	 *
	 * @param Context\ParametersContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameters(Context\ParametersContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::parameterDecl()}.
	 *
	 * @param Context\ParameterDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameterDecl(Context\ParameterDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::expression()}.
	 *
	 * @param Context\ExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression(Context\ExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::primaryExpr()}.
	 *
	 * @param Context\PrimaryExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrimaryExpr(Context\PrimaryExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::unaryExpr()}.
	 *
	 * @param Context\UnaryExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnaryExpr(Context\UnaryExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::conversion()}.
	 *
	 * @param Context\ConversionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConversion(Context\ConversionContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::operand()}.
	 *
	 * @param Context\OperandContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOperand(Context\OperandContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::literal()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::basicLit()}.
	 *
	 * @param Context\BasicLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBasicLit(Context\BasicLitContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::integer()}.
	 *
	 * @param Context\IntegerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInteger(Context\IntegerContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::operandName()}.
	 *
	 * @param Context\OperandNameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOperandName(Context\OperandNameContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::qualifiedIdent()}.
	 *
	 * @param Context\QualifiedIdentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitQualifiedIdent(Context\QualifiedIdentContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::compositeLit()}.
	 *
	 * @param Context\CompositeLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompositeLit(Context\CompositeLitContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::literalType()}.
	 *
	 * @param Context\LiteralTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteralType(Context\LiteralTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::literalValue()}.
	 *
	 * @param Context\LiteralValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteralValue(Context\LiteralValueContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::elementList()}.
	 *
	 * @param Context\ElementListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElementList(Context\ElementListContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::keyedElement()}.
	 *
	 * @param Context\KeyedElementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitKeyedElement(Context\KeyedElementContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::key()}.
	 *
	 * @param Context\KeyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitKey(Context\KeyContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::element()}.
	 *
	 * @param Context\ElementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElement(Context\ElementContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::structType()}.
	 *
	 * @param Context\StructTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStructType(Context\StructTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::fieldDecl()}.
	 *
	 * @param Context\FieldDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFieldDecl(Context\FieldDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::string_()}.
	 *
	 * @param Context\String_Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitString_(Context\String_Context $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::embeddedField()}.
	 *
	 * @param Context\EmbeddedFieldContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEmbeddedField(Context\EmbeddedFieldContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::functionLit()}.
	 *
	 * @param Context\FunctionLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionLit(Context\FunctionLitContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::index()}.
	 *
	 * @param Context\IndexContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex(Context\IndexContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::slice_()}.
	 *
	 * @param Context\Slice_Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSlice_(Context\Slice_Context $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::typeAssertion()}.
	 *
	 * @param Context\TypeAssertionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeAssertion(Context\TypeAssertionContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::arguments()}.
	 *
	 * @param Context\ArgumentsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArguments(Context\ArgumentsContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::methodExpr()}.
	 *
	 * @param Context\MethodExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethodExpr(Context\MethodExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::receiverType()}.
	 *
	 * @param Context\ReceiverTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReceiverType(Context\ReceiverTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GoParser::eos()}.
	 *
	 * @param Context\EosContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEos(Context\EosContext $context);
}