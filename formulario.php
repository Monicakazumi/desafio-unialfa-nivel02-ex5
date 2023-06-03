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
            <h1>Formulário</h1>
            <form method="POST" action="recupera-dados.php">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">

                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade" class="form-control">

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
                
                <label for="hobbie">Hobbie</label>
                <input type="text" name="hobbie" id="hobbie" class="form-control">
            <br>
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
            </form>
        </div>
  </body>
</html>