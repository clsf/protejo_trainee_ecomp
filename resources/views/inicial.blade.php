<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="{{ asset('images/ecompjr.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
                <div  style="text-align: right;">
                <li >
                    <a class="nav-link" href="/">Sair</a>
                </li>
                </div>
            </ul>
        </div>
    </nav>


    <header>
        <h1 class="mt-5" style="text-align : center; font-weight: bold">Diretrizes Estratégicas da EcompJr</h1>

    </header>


    <div class="container mt-5 mb-5">
        <div class="row row-cols-1 row-cols-md-3 g4">
            <div class="col">

                <div class="card">
                    <img class="card-img-top " src="{{asset('images/missao.jpg')}}" alt="imagem referenciando missao">
                    <div class="card-body">
                        <h5 class="card-title">MISSÃO
                        </h5>
                        <p class="card-text">Através da vivência empresarial e trabalho em equipe, formar profissionais inovadores, comprometidos e capazes de vencer desafios.</p>
                    </div>

                </div>
                </a>
            </div>

            <div class="col">

                <div class="card">
                    <img class="card-img-top " src="{{asset('images/vision.jpg')}}" alt="imagem referente a visao da empresa">
                    <div class="card-body">
                        <h5 class="card-title">VISÃO
                        </h5>
                        <p class="card-text">Ser uma empresa que realiza projetos de impacto, mais conectada ao movimento empresa júnior e com grande reconhecimento dentro e fora da universidade.</p>

                    </div>

                </div>
                </a>
            </div>

            <div class="col">

                <div class="card">
                    <img class="card-img-top " src="{{asset('images/valores.jpg')}}" alt="imagem referente aos valores da empresa">
                    <div class="card-body">
                        <h5 class="card-title">VALORES
                        </h5>
                        <p class="card-text">Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr. baseia-se nos seguintes valores: Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, Evolução com os erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia.</p>


                    </div>

                </div>
                </a>
            </div>

        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>