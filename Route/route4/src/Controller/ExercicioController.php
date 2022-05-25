<?php

namespace Aluno\Luis4pf\Controller;

class ExercicioController
{
    public static function exibir()
    {
        require_once("../src/View/exercicio4.php");
    }

    public static function exibirResultado()
    {
        $valor1 = $_POST["valor1"];
        if ($valor1 > 0)
            $result = "O VALOR É POSITIVO";
        else if ($valor1 == 0)
            $result = "O VALOR É IGUAL A ZERO";
        else
            $result = "O VALOR É NEGATIVO";
        require_once("../src/View/exercicio4.php");
    }
}
