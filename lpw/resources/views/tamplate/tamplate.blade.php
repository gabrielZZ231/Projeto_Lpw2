<!DOCTYPE html>
<html lang="en">
@yield('conteudo')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <meta charset="UTF-8">    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css'/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js'/>
    <title>Estudante-IFPE</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}" />
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="https://sites.ufpe.br/polotecnologico/wp-content/uploads/sites/76/2021/09/logo-ifpe.png" alt="..." height="55">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Exercícios</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Assuntos
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">1° Logaritmo e Funçõe Logarítmica</a></li>
                <li><a class="dropdown-item" href="#">2° Trigonometria na circunferência e Números complexos</a></li>
                <li><a class="dropdown-item" href="#">3° Análise Combinatória e Probabilidade</a></li>
                <li><a class="dropdown-item" href="#">4° Geometria analitica, Limites e Derivadas.</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
        <!-- Imagem e textninho da parte de cima!-->
        <div class = "foco">
            <h2 id = "textinho">Resumos e exercícios de <br>Matemática</h2>
        </div>
    <form>
        <div class="form-group">
        <label>Aula X</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </form>
        <footer class="bg-dark text-light fixed-bottom">
        <div class="text-center" style="background-color: #333; padding: 1px 20px;" >
        <h3>Sobre</h3>
        <br>
        <p>Site com explicações para ajudar os estudantes do Ensino Médio<br> com os assuntos mais difíceis de Matemática.</h3>
        </div>
        </footer>

       
 </body>
 <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script>
  $(function () {
    $('#navbarDropdown').dropdown();
  }); 
</script>
</html>