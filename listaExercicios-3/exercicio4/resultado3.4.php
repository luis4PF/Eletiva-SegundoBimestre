<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>EXERCICIO 2</title>
</head>
<br>

<body class="container">
  <h1>EXERCICIO 2</h1>
  <?php

  function soma($valor)
  {
    $valor1 = 1;
    $valor2 = 2;
    $valor3 = 3;
    $valor4 = 4;
    $valor5 = 5;
    $valor6 = 6;
    $valor7 = 7;
    $valor8 = 8;
    $valor9 = 9;
    $valor11 = 11;
    $total = 0;

    $nãoPermitido = true;
    foreach($valor as $val)
    

    if($val == $valor11)
      echo "não permitido";

    if($val % $valor1 == 0)
      $total += $valor1;
    
    if($val % $valor2 == 0)
      $total += $valor2;

    if($val % $valor3 == 0)
      $total += $valor3;
    
    if($val % $valor4 == 0)
      $total += $valor4;
    
    if($val % $valor5 == 0)
      $total += $valor5;
    
    if($val % $valor6 == 0)
      $total += $valor6;

    if($val % $valor7 == 0)
      $total += $valor7;

    if($val % $valor8 == 0)
      $total += $valor8;

    if($val % $valor9 == 0)
      $total += $valor9;

    echo "$total";
  }


  for ($i = 1; $i <= 1; $i++) {
    $vetor[$i] = $_POST["valor$i"];
  }
  soma($vetor);
  ?>




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