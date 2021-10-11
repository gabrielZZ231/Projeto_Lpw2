<!DOCTYPE html>
<html lang="en">
@yield('conteudo')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudante-IFPE</title>
    <style>
        
        .titulo{
            margin:2% 2% 0 ;
            background-color: blue;
            border-radius: 150px;
        }
        #nome-titulo{
            color:white;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navegacao{
            width: auto ;
            height: 50px;
            padding-top: 10px;
            padding-left:25px; 
            background: linear-gradient(0, #120c56, #000000); 
            border-radius: 30px;
        } 
        .assuntos{
            font-size: 16px;
            padding-right: 10px;
            text-decoration: none;
        }
        a:hover{
            color: white;
        }

    </style>
</head>
<body>
    <div class="titulo">
        <h1 id="nome-titulo">
            Onde você aprende Matemática 
        </h1>
    </div>
    <div class="navegacao">
        <a class="assuntos" href="">
        1°  Logaritmo e Funçõe Logarítmica 
        </a>

        <a class="assuntos" href="#">
        2° Trigonometria na circunferência e Números complexos
        </a>
        <a class="assuntos" href="#">
            3° Análise Combinatória e Probabilidade 
        </a>
        <a class="assuntos" href="#">
            4° Geometria analitica, Limites e Derivadas.
        </a>
    </div>
 </body>
</html>