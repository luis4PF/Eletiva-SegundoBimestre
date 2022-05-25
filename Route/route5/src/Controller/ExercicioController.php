<?php

namespace Aluno\Luis4pf\Controller;

class ExercicioController
{
    public static function exibir()
    {
        require_once("../src/View/exercicio5.php");
    }

    public static function exibirResultado()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $valor4 = $_POST['valor4'];

        $media = ($valor1 + $valor2 + $valor3 + $valor4) / 4;

        if ($media >= 7.0)
            $result = "APROVADO!!!!!";
        else
            $result = "REPROVADO F";
        require_once("../src/View/exercicio5.php");
    }
}
