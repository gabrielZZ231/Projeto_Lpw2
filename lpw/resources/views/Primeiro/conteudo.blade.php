@extends('tamplate.tamplate')
@section('conteudo')
<div class="index">


  <!-- Banner!-->
      
                   
           

    <!-- Serviços!-->  
  <h2 id = "textinho">Resumos e exercícios de <br>Logarítmo</h2>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class = "serv-img"> 
          <a href="https://www.todamateria.com.br/circulo-trigonometrico/ "><img class= "img" src="assets/livrosEmpilhados.png" alt="img assuntos"  onclick="segundo_ano()"></a>
            <h3>Resumos Logarítmo</h3>   
            <p>Recomendados, mas não <br>de nossa autoria.</p>
            </div>
      </div>
      
      <div class="item">
        <div class = "serv-img"> 
          <img class = "img"  src="assets/exerciciosMat.png" alt="Imagem de Exercícios" onclick="segundo_ano()">
          <h3>Exercícios Logarítimo</h3>   
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
            <img class="instag" src="assets/instagram.jpg" onclick="gabriel()" >
            <img class="instae" src="assets/instagram.jpg" onclick="emille()">
            <img class="instaj" src="assets/instagram.jpg" onclick="joão()">
          </div>
          <span class="nome-instagramg">Gabriel Aquino</span>
          <span class="nome-instagrame">Emille Correia</span>
          <span class="nome-instagramj">João Araújo</span>
        </div>
        </footer>

</div>
<script>

function primeiro_ano(){
window.location = "{{asset('')}}";
}

function segundo_ano(){
window.location = "{{asset('')}}";
}

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