<?php

namespace Aluno\Luis4pf\Controller;

use LDAP\Result;

class ExercicioController
{
    public static function exibir()
    {
        require_once("../src/View/exercicio3.php");
    }

    public static function exibirResultado()
    {
        $valor1 = $_POST["valor1"];
        if ($valor1 > 10)
            $result = "O VALOR INFORMADO É MAIOR QUE 10";
        elseif ($valor1 == 10)
            $result = "O VALOR INFORMADO É IGUAL A 10";
        else
            $result = "O VALOR INFORMADO É MENOR QUE 10";
        require_once("../src/View/exercicio3.php");
    }
}
