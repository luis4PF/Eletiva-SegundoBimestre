<?php 

namespace Aluno\Luis4pf\Controller;

class ExercicioController
{
    public static function exibir(){
        require_once("../src/View/exercicio1.php");
    }

    public static function exibirResultado()
    {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $troco = $valor1 - $valor2;
        require_once("../src/View/exercicio1.php");
    }
}