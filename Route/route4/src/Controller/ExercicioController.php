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
            echo "O valor é positivo";
        else if ($valor1 == 0)
            echo "O valor é igual a 0";
        else
            echo "O valor é negativo";
        require_once("../src/View/exercicio4.php");
    }
}
