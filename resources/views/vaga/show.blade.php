<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOB APPLICATION | VISUALIZAR DADOS CURRÍCULO</title>

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

    <div class="row">
        <div class="col-lg12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align: center;">Visualizar Página</h2>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <table class="table table-bordered" style="text-align: left;">
                    <tr>
                        <th>
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nome:</strong>
                                        {{ $vaga->nome }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Sobrenome:</strong>
                                        {{ $vaga->sobrenome }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Address:</strong>
                                        {{ $vaga->address }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Address2:</strong>
                                        {{ $vaga->address2 }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>City:</strong>
                                        {{ $vaga->city }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>State:</strong>
                                        {{ $vaga->state }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Postal:</strong>
                                        {{ $vaga->postal }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>País:</strong>
                                        {{ $vaga->selecione1 }}
                                    </div>
                                </div>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="col">

                <table class="table table-bordered" style="text-align: left;">
                    <tr>
                        <th>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {{ $vaga->email }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Area Code:</strong>
                                    {{ $vaga->areacode }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Phone:</strong>
                                    {{ $vaga->phone }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Função:</strong>
                                    {{ $vaga->selecione2 }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Month:</strong>
                                    {{ $vaga->number1 }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Day:</strong>
                                    {{ $vaga->number2 }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Year:</strong>
                                    {{ $vaga->data }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Arquivo:</strong>
                                    {{-- PARA VISUALIZAR A IMAGEM E O NOME DO ARQUIVO --}}
                                    {{-- <img src="/arquivo/{{ $vaga->arquivo }}" width="500px"> --}}
                                    <a href="/arquivo/{{ $vaga->arquivo }}">
                                    {{ $vaga->arquivo }}
                                </div>
                            </div>
                        </th>
                    </tr>
                </table>

            </div>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 10px">
        <a class="btn btn-primary" href="{{ route('vaga.index') }}">Voltar</a>
    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="./" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="sobre" class="nav-link px-2 text-muted">Sobre</a></li>
            </ul>
            <p class="text-center text-muted">&reg; 2022 JOB APPLICATION, Inc</p>
        </footer>
    </div>
    </div>
</body>

</html>
