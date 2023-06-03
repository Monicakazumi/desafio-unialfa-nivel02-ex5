<?php

    if($_POST){
        $nome = $_POST["nome"] ?? null;
        $idade = $_POST["idade"] ?? null;
        $email = $_POST["email"] ?? null;
        $hobbie = $_POST["hobbie"] ?? null;

        if(strlen($nome) < 6){
            mensagemErro("Permitido somente acima de 06 letras!");
        }

        if($idade < 18){
            mensagemErro("Permitido somente para maiores de idade!");
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Trabalho</title>
  </head>
  <body>
    <br>
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <h1>Dados</h1>
            <table class="table table-hover">
                <tread>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Hobbie</th>
                    </tr>
                </tread>
                <?php
                    foreach($_POST as $dado=>$dados){
                        ?>
                        <td><?=$dados?></td>
                        <?php
                    }
                ?>
            </table>
        </div>
  </body>
</html>
