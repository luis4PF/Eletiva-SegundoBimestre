<?php 

namespace Aluno\Luis4pf\Controller;

class ExercicioController
{
    public static function exibir2(){
        require_once("../src/View/exercicio2.php");
    }

    public static function exibirResultado2()
    {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $final = $valor1 / $valor2;
        require_once("../src/View/exercicio2.php");
    }

    
}