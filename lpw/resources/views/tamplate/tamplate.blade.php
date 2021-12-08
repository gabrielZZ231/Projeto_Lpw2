<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <meta charset="UTF-8">    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Estudante-IFPE</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}" />
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="assets/logo-ifpe.png" alt="..." height="55">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{asset('/')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Assuntos
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{asset('/primeiro_ano')}}">1° Logaritmo e Função Logarítmica</a></li>
                <li><a class="dropdown-item" href="{{asset('/segundo_ano')}}">2° Trigonometria na circunferência e Números complexos</a></li>
                <li><a class="dropdown-item" href="{{asset('/terceiro_ano')}}">3° Análise Combinatória e Probabilidade</a></li>
                <li><a class="dropdown-item" href="{{asset('/quarto_ano')}}">4° Geometria Espacial</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
     @yield('conteudo') 
 </body>
 <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script>
  $(function () {
    $('#navbarDropdown').dropdown();
  }); 
</script>
</html>

