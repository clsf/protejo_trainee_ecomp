<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcompJr</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="{{ asset('images/ecompjr.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>
    <form action="/logando" method="POST" style="text-align : center; font-weight: bold">
        @csrf
        <div class="col-sm-3 my-1 mx-auto mt-5">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <label for="login">Login</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Seu Login">

        </div>
        <div class="col-sm-3 my-1 mx-auto">
            <label for="senha">Senha</label>
            <input type="text" class="form-control" name="senha" id="senha" placeholder="Senha">
        </div>
        <div class="mt-5">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>

    </form>

    <div class="mt-5" style="text-align : center; font-weight: bold">
        <a href="/cadastrarUsuario"><button type="submit" class="btn btn-primary">Cadastrar</button></a>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>