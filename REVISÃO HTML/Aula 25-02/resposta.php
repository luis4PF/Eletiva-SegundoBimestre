<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body class="container">

  <h1>Cálculos</h1>

  <?php
  $valor1 = $_POST['valor1'];
  $valor2 = $_POST['valor2'];
  echo "valor1 é: $valor1 e valor2 é: $valor2";
  echo "<br>/";
  echo "Soma: " . ($valor1 + $valor2);
  echo "Subtração: " . ($valor1 - $valor2);
  echo "Multiplicação: " . ($valor1 * $valor2);
  echo "<br>";
  if ($valor2 != 0)
    echo "Divisão: " . ($valor1 / $valor2);
  else
    echo "Não é possível realizar a divisão por zero";

  $resultado = $valor1 % 2 == 0 ? "Valor 1 é par!" : "valor 1 é impar";
  echo $resultado; // outra possibilidade de "if"

  $i = 10;
  echo "valor de i: " . (3 * $i++);

  echo "<br>";

  echo "valor de i: " . (++$i);

  for ($i = 0; $i < 10; $i++)
    echo "valor de i: $i";

  echo "---------------- <br>";

  ?>

  <!-- alt shift f alinhar o codigo -->
  <!-- valor1 = "0" valor2 = 0 - if valor1 == valor2 = true // if if valor1 === valor2 false porque um é string e o outro é inteiro -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>