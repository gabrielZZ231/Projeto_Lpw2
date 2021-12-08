@extends('tamplate.tamplate')
@section('conteudo')
<div class="index">

    <!-- Serviços!-->  
  <h2 id = "textinho">Resumos e exercícios de <br>Matemática</h2>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class = "serv-img"> 
          <img class= "img" src="assets/livrosEmpilhados.png" alt="img assuntos"  onclick="segundo_ano()">
            <h3>Conteúdo</h3>   
            <p>Recomendados, mas não <br>de nossa autoria.</p>
            </div>
      </div>
      
      <div class="item">
        <div class = "serv-img"> 
          <img class = "img"  src="assets/exerciciosMat.png" alt="Imagem de Exercícios" onclick="segundo_ano()">
          <h3>Conteúdo</h3>   
              <p>Recomendados, mas não <br>de nossa autoria.</p>
          </div>
      </div>

      <div class="item">
        <div class = "serv-img"> 
          <img class = "img"  src="assets/log.png" alt="Imagem de Exercícios" onclick="segundo_ano()" >
          <h3>Conteúdo</h3>   
              <p>Recomendados, mas não <br>de nossa autoria.</p>
          </div>
      </div>

      <div class="item">
        <div class = "serv-img" > 
          <img class = "img"  src="assets/geoAna.png" alt="Imagem de Exercícios" onclick="segundo_ano()">
          <h3>Conteúdo</h3>   
              <p>Recomendados, mas não <br>de nossa autoria.</p>
          </div>
      </div>

       <div class="item">
        <div class = "serv-img"> 
          <img class = "img"  src="assets/trigonometria.png" alt="Imagem de Exercícios" onclick="segundo_ano()">
          <h3>Conteúdo</h3>   
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
</div>
        <footer class="bg-dark text-light fixed-bottom">
        <div class="text-center" style="background-color: #333; padding: 1px 20px;" >
        <h3>Sobre</h3>
        <br>
        <p>Site com explicações para ajudar os estudantes do Ensino Médio<br> com os assuntos mais difíceis de Matemática.</h3>          
          <div class="fa-3x" >
            <h3>Desenvolvedores</h3>
            <span class="fas fa-spin fa-fw fa fa-instagram"></span>
            <span class="fas fa-spin fa-fw fa fa-instagram"></span>
            <span class="fas fa-spin fa-fw fa fa-instagram"></span>
          </div>
          <span class="nome-instagramg">Gabriel Aquino</span>
          <span class="nome-instagrame">Emille Correia</span>
          <span class="nome-instagramj">João Araújo</span>
        </div>
        </footer>

</div>
<script>

function primeiro_ano(){
window.location = "{{asset('/primeiro_ano')}}";
}

function segundo_ano(){
window.location = "{{asset('/primeiro_ano')}}";
}



</script>

@endsection