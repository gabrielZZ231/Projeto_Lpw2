@extends('tamplate.tamplate')
@section('conteudo')
<div class="index">


  <!-- Banner!-->
      
                   
           

  <h2 id = "textinho">Resumos e exercícios de <br> Logarítimo</h2>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class = "serv-img"> 
          <a href="https://www.todamateria.com.br/logaritmo/ "><img class= "img" src="assets/log.png" alt="img assuntos"  ></a>
            <h3>Resumos de Logarítimo</h3>   
            <p>Recomendados, mas não <br>de nossa autoria.</p>
            </div>
      </div>
      
      <div class="item">
        <div class = "serv-img"> 
         <a href="https://wordwall.net/play/26213/431/589"><img class = "img"  src="//az779572.vo.msecnd.net/screens-200/2a606574f441483b84f514291d5d3955" alt="Imagem de Exercícios" > </a>
          <h3>Exercícios Logarítimo e Função</h3>   
              <p>Recomendados, mas não <br>de nossa autoria.</p>
          </div>
      </div>

      <div class="item">
        <div class = "serv-img"> 
         <a href="https://www.todamateria.com.br/funcao-logaritmica/"><img class = "img"  src="assets/funçãolog.png" alt="Imagem de Exercícios" > </a>
          <h3>Resumo Função logarítmica</h3>   
              <p>Recomendados, mas não <br>de nossa autoria.</p>
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