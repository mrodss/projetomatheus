<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOB APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ocorreram erros! <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img class="d-inline-block align-text-top" src="https://www.place-hold.it/72x57&text=Job" alt="" width="30" height="24">
                JOB APPLICATION
            </a>

            <div class="text-end">
                <a href="formulario" type="button" class="btn btn-primary">Cadastrar</a>
                <a href="login" type="button" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </nav>

    <h1 style="text-align: center; margin-top: 30px;">CONCORRA A VAGAS DE EMPREGO!</h1>


    <div class="container text-center">
        <div class=" row" style="margin-left: 425px;">
            <div class="card" style="width: 30rem;">
                <img src="https://www.place-hold.it/72x57&text=Job" class="card-img-top" alt="...">
                <div class="card-body">
                    <strong class="card-text">JOB APPLICATION</strong>
                    <h4>Cadastre seu currículo e tenha a chance de concorrer a vagas de programador. Não perca tempo!!!</h4>
                </div>
            </div>
        </div>

        <div>
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="./" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="sobre" class="nav-link px-2 text-muted">Sobre</a></li>
                </ul>
                <p class="text-center text-muted">&reg; 2022 JOB APPLICATION, Inc</p>
            </footer>
        </div>
</body>

</html>