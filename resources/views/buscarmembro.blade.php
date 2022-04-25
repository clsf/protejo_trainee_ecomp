<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Membro</title>

    <link rel="shortcut icon" href="{{ asset('images/ecompjr.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/inicial">Home <span class="sr-only">(Página atual)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Membros EcompJr
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/cadastrarMembro">Cadastrar</a>
                        <a class="dropdown-item" href="/buscarMembro">Buscar</a>
                        <a class="dropdown-item" href="/listarMembros">Listar todos</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <form action="/buscarMembro" method="POST">
        @csrf
        <div class="form-group row justify-content-center mt-5" style="text-align : center; font-weight: bold">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Buscar Membro</label>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" name="nome" id="nome" placeholder="Nome do membro">

               

            </div>
             <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    @if($membros != null)
    <div class="form-group row justify-content-center" style="text-align : center">
    <table class="table table-sm table-info table-borderless col-sm-8  mt-5 ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($membros as $membro)
            <tr>

                <td>{{$membro->id}}</td>
                <td>{{$membro->nome}}</td>
                <td>{{$membro->cargo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>