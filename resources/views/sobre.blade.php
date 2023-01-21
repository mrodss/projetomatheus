<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>JOB APPLICATION | SOBRE</title>
</head>

<body>
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
    <br />
    <br />
    <br />
    <main>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1>Contato</h1>
                    <br>
                    <br>
                    <p>(54) 98765-4321</p>
                </div>
                <div class="col">
                    <h1>Endereço</h1>
                    <br>
                    <br>
                    <p>Av. Das Castanheiras - nº 2217 - SP - SÃO PAULO</p>
                </div>
                <div class="col">
                    <h1>Horários de Atendimento</h1>
                    <p>Segunda à Sexta das 08:00 AM até as 18:00 PM</p>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="./" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="/sobre" class="nav-link px-2 text-muted">Sobre</a></li>
            </ul>
            <p class="text-center text-muted">&reg; 2022 JOB APPLICATION, Inc</p>
        </footer>
    </div>
</body>

<html>
