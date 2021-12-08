@extends('tamplate.tamplate')
@section('conteudo')
<div class="index">


  <!-- Banner!-->
      
                   
           

    <!-- Serviços!-->  
    <h2 id = "textinho">Resumos e exercícios de N.<br> Complexos e <br> Círculo Trigonométrico </h2>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class = "serv-img"> 
        <a href="https://www.todamateria.com.br/numeros-complexos/"><img class = "img"  src="assets/NumerosComplexos.png" alt="Imagem de Exercícios"  ></a>
          <h3>Resumos N. <br> Complexos</h3>   
              <p>Recomendados, mas não <br>de nossa autoria.</p>
            </div>
      </div>
      
      <div class="item">
        <div class = "serv-img"> 
          <a ><img class = "img"  src="//az779572.vo.msecnd.net/screens-200/b648fd0c236a4d268b2daaec123d7f24"  alt="Imagem de Exercícios" ></a>
          <h3>Exercícios N. <br> Complexos</h3>   
              <p>Recomendados, mas não <br>de nossa autoria.</p>
          </div>
      </div>
    <div class="item">
      <div class = "serv-img"> 
        <a href="https://www.todamateria.com.br/circulo-trigonometrico/ "><img class= "img" src="assets/circulo.jpg" alt="img assuntos"  ></a>
          <h3>Resumos de Círculo Trigonométrico</h3>   
          <p>Recomendados, mas não <br>de nossa autoria.</p>
      </div>
    </div>
    <div class="item">
      <div class = "serv-img"> 
        <a href="https://wordwall.net/play/26265/102/803"><img class= "img" src="//az779572.vo.msecnd.net/screens-200/6f0790f5fbbe4c3caac60568ab69c55d"  alt="img assuntos"  ></a>
          <h3>Exercícios de Círculo Trigonométrico</h3>   
          <p>Recomendados, mas não <br>de nossa autoria.</p>
      </div>
    </div>
    </div>
  <a class="left carousel-control" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
    <footer class="bg-dark text-light fixed-bottom">
      <div class="text-center" style="background-color: #333; padding: 1px 20px;" >
      <h3>Sobre</h3>
      <br>
      <p>Site com explicações para ajudar os estudantes do Ensino Médio<br> com os assuntos mais difíceis de Matemática.</h3>
        <h3>Desenvolvedores</h3>
        <div class="fa-3x" >
          <img class="instag" src="assets/instagram.png" onclick="gabriel()" >
          <img class="instae" src="assets/instagram.png" onclick="emille()">
          <img class="instaj" src="assets/instagram.png" onclick="joão()">
        </div>
        <span class="nome-instagramg">Gabriel Aquino</span>
        <span class="nome-instagrame">Emille Correia</span>
        <span class="nome-instagramj">João Araújo</span>
      </div>
      </footer>

</div>
<script>
  function gabriel(){
    window.location = "{{asset('https://www.instagram.com/_gabriell.siilva_/')}}";
    }

  function emille(){
    window.location = "{{asset('https://www.instagram.com/_emillevictoria/')}}";
    }
  function joão(){
    window.location = "{{asset('https://www.instagram.com/joaog_2004/')}}";
    }





</script>

@endsection