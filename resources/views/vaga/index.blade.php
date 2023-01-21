<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOB APPLICATION | CURRÍCULOS CADASTRADOS</title>

    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="antialiased">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ocorreram erros! <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img class="d-inline-block align-text-top" src="https://www.place-hold.it/72x57&text=Job" alt=""
                    width="30" height="24">
                JOB APPLICATION
            </a>

            <div class="text-end">
                <a href="formulario" type="button" class="btn btn-primary">Cadastrar</a>
                <a href="login" type="button" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </nav>
    <table class="table table-bordered">
        <tr style="width: auto;">
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th width="300px">Ações</th>
        </tr>

        @foreach ($listaVagas as $vaga)
            <tr>
                <td>{{ $vaga->id }}</td>
                <td>{{ $vaga->nome }}</td>
                <td>{{ $vaga->sobrenome }}</td>
                <td>{{ $vaga->email }}</td>
                <td>
                    <a class="btn btn-info" style="color:white"
                        href="{{ route('vaga.show', $vaga->id) }}">Visualizar</a>
                    <a class="btn btn-primary" style="color:white" href="{{ route('vaga.edit', $vaga->id) }}">Editar</a>
                    <form action="{{ route('vaga.destroy', $vaga->id) }}" method="POST"> @csrf @method('DELETE')<button
                            type="submit" style="background-color:red; color:white"
                            class="btn btn-danger">Apagar</button></form>
                </td>
            </tr>
        @endforeach
    </table>


    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="./" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="sobre" class="nav-link px-2 text-muted">Sobre</a></li>
            </ul>
            <p class="text-center text-muted">&reg; 2022 JOB APPLICATION, Inc</p>
        </footer>
    </div>

    <html>
