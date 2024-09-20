<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOB APPLICATION | ENTRAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
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

    <h1 style="margin-top: 50px; text-align: center;">FAÇA O LOGIN!</h1>
    <form action="{{route('logar.store')}}" method="post">
        @csrf
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="user">
                            <label for="usuario">Usuário</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me">Lembrar-me
                            </label>
                        </div>
                        <a class="w-100 btn btn-lg btn-primary" href="./" type="submit">Voltar</a>
                        <hr>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </form>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="./" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="sobre" class="nav-link px-2 text-muted">Sobre</a></li>
            </ul>
            <p class="text-center text-muted">&reg; 2022 JOB APPLICATION, Inc</p>
        </footer>
    </div>

    <body>

</html>