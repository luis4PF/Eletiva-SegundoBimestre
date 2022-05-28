<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CLIENTES</title>
</head>
<br>

<body class="container">
    <?php require_once "barra_navegacao.php"; ?>
    <div>
        <h1>CLIENTES</h1>
        <?php
            if(isset($resposta)){
                if($resposta){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    REGISTRO INSERIDO COM SUCESSO
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ERRO AO INSERIR O REGISTRO
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
            }
        ?>        
        </div>     

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <th scope="row"><?=$linha['id'] ?></th>
                    <td><?=$linha['nome'] ?></td>
                    <td><?=$linha['email'] ?></td>
                    <td><a href="/cliente/alterar/<?=$linha['id'] ?>"
                    class="btn btn-warning"> ALTERAR</a>
                        <a class="btn btn-danger"> EXCLUIR</a>
                    </td>
                </tr>
                <tr>
                <?php } ?>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>

    </div>


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