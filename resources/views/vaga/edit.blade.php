<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOB APPLICATION | EDITAR CURRÍCULOS</title>

    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="antialiased">
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
    <form action="{{ route('vaga.update', $vaga->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg12 margin-tb">
                <div class="pull-left">
                    <h2 style="text-align: center; margin-top: 10px">Editar Página</h2>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 20px">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-titulo" class="form-label">Nome:</label>
                    <input type="text" id="campo-titulo" name="nome" class="form-control" placeholder="Nome" value="{{$vaga->nome}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-descricao" class="form-label">Sobrenome:</label>
                    <input type="text" id="campo-descricao" name="sobrenome" class="form-control" placeholder="Sobrenome" value="{{$vaga->sobrenome}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-status" class="form-label">Address:</label>
                    <input type="text" id="campo-status" name="address" class="form-control" placeholder="Address" value="{{$vaga->address}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-titulo" class="form-label">Address2:</label>
                    <input type="text" id="campo-titulo" name="address2" class="form-control" placeholder="Adrress2" value="{{$vaga->address2}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-descricao" class="form-label">City:</label>
                    <input type="text" id="campo-descricao" name="city" class="form-control" placeholder="City" value="{{$vaga->city}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-status" class="form-label">State:</label>
                    <input type="text" id="campo-status" name="state" class="form-control" placeholder="State" value="{{$vaga->state}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-titulo" class="form-label">Postal:</label>
                    <input type="text" id="campo-titulo" name="postal" class="form-control" placeholder="Postal" value="{{$vaga->postal}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-descricao" class="form-label">País:</label>
                    <input type="text" id="campo-descricao" name="selecione1" class="form-control" value="{{$vaga->selecione1}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-status" class="form-label">Email:</label>
                    <input type="text" id="campo-status" name="email" class="form-control" placeholder="Email" value="{{$vaga->email}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-titulo" class="form-label">Area Code:</label>
                    <input type="text" id="campo-titulo" name="areacode" class="form-control" placeholder="areacode" value="{{$vaga->areacode}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-descricao" class="form-label">Phone:</label>
                    <input type="text" id="campo-descricao" name="phone" class="form-control" placeholder="Phone" value="{{$vaga->phone}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-status" class="form-label">Função:</label>
                    <input type="text" id="campo-status" name="selecione2" class="form-control" placeholder="Função" value="{{$vaga->selecione2}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-descricao" class="form-label">Month:</label>
                    <input type="text" id="campo-descricao" name="number1" class="form-control" placeholder="Month" value="{{$vaga->number1}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-status" class="form-label">Day:</label>
                    <input type="text" id="campo-status" name="number2" class="form-control" placeholder="Day" value="{{$vaga->number2}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-status" class="form-label">Year:</label>
                    <input type="text" id="campo-status" name="data" class="form-control" placeholder="Year" value="{{$vaga->data}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-status" class="form-label">Arquivo:</label>
                    <input type="file" id="campo-status" name="arquivo" class="form-control" value="{{$vaga->arquivo}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 10px">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-primary" href="{{route('vaga.index')}}">Voltar</a>
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

</body>
<html>