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

<body class="container">
    <br>
    <h1>EXERCÍCIO 2</h1>
    <b> DESCUBRA A SOMA DOS DIVISORES </b>
    <form method="post" action="resultado3.4.php" class="row">
        <?php
        for ($i = 1; $i <= 1; $i++) {

        ?>

            <div class="col-3 mt-3">
                <label for="valor<?= $i ?>" class="label-control">
                    <!-- "for="valor1<?= $i ?>" significa <?php echo $i; ?> -->
                    INFORME O <?=$i?>º NÚMERO:
                </label>
                <input type="text" step="any" name="valor<?= $i ?>" placeholder="1, 2, 3..." 
                    id="valor<?= $i ?>" class="form-control" />

            </div>

        <?php
        }
        ?>
        <div class="row">
            <div class="col mt-3">
                <button type="submit" class="btn btn-danger">
                    RESULTADO
                </button>
            </div>
        </div>
        <br> <br>
    </form>


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