<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOB APPLICATION | CRIAR CURRÍCULO</title>

    <link href="css/app.css" rel="stylesheet" type="text/css">
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
    <br />
    <div class="container">
        <h1 style="text-align: center;">Please fill out the form below to apply for a position with us!</h1>
        <form action="{{route('vaga.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 style=" margin-top: 50px;">Full Name</h2>
            <br />
            <br />
            <label>First Name</label>
            <input name="nome" type="text">
            <br />
            <br />

            <label>Last Name</label>
            <input name="sobrenome" type="text">
            <br />
            <br />

            <h2>Current Address</h2>
            <br />
            <br />

            <label>Street Address</label>
            <input name="address" type="text">
            <br />
            <br />

            <label>Street Address Line 2</label>
            <input name="address2" type="text">
            <br />
            <br />

            <label>City</label>
            <input name="city" type="text">
            <br />
            <br />

            <label>State</label>
            <input name="state" type="text">
            <br>
            <br />

            <label>Postal</label>
            <input name="postal" type="text">
            <br />
            <br />

            <label>Contry</label>
            <select name="selecione1">
                <option value="">Escolha</option>
                <option value="brasil">Brasil</option>
                <option value="usa">Usa</option>
                <option value="portugal">Portugal</option>
                <option value="france">France</option>
            </select>
            <br>
            <br />

            <label>Email Address</label>
            <input type="email" name="email">
            <br />
            <br />

            <label>Phone Number</label>
            <label>Area Code</label>
            <input type="number" name="areacode">
            <br />
            <br />

            <label>Phone Number</label>
            <input type="text" name="phone">
            <br />
            <br />

            <label>Applying for position</label>
            <select name="selecione2">
                <option value="">Escolha</option>
                <option value="php">Programador PHP</option>
                <option value="python">Programador Python</option>
                <option value="js">Programador JS</option>
            </select>
            <br>
            <br />

            <label>Start Date</label>
            <label>Month</label>
            <input name="number1" type="number1">

            <label>Day</label>
            <input name="number2" type="number2">

            <label>Year</label>
            <input name="data" type="d_number">
            <br>

            <br />

            <label>Upload</label>
            <input name="arquivo" type="file">
            <br>
            <br>

            <a href="./" class="btn btn-lg btn-primary" type="submit">Voltar</a>
            <button class="btn btn-lg btn-primary" type="submit">Próximo</button>

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

<html>