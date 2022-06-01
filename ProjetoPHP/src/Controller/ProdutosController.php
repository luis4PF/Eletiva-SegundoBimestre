<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPhp\Model\Entity\PRodutos;

class ProdutosController{

    //private ClientesDAO $dao;

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ProdutosDAO();
        $resultado = $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_produto.php";
    }

    public static function abrirListaProdutos(){
        $dao = new PRodutosDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_produtos.php";
    }

    public static function inserirProduto(){
        $produto = new Produtos();
        $produto->setId($_POST['id']);
        $produto->setDescricao($_POST['descricao']);
        $produto->setValor($_POST['valor']);
        $produto->setNome($_POST['nome']);
        $dao = new ProdutosDAO();
        if ($dao->inserir($produto)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ProdutosController::abrirListaProdutos();
    }

    public static function editarProduto($params){
        $produto = new Produtos();
        $produto->setId($_POST['id']);
        $produto->setDescricao($_POST['descricao']);
        $produto->setValor($_POST['valor']);
        $produto->setNome($_POST['nome']);
        $produto->setId($params[1]);
        $dao = new ProdutosDAO();
        if ($dao->alterar($produto)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ProdutosController::abrirListaProdutos();
    }

    public static function excluirProduto($params){
        $dao = new ProdutosDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ProdutosController::abrirListaProdutos();
    }

}