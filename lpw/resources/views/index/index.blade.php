@extends('tamplate.tamplate')
@section('conteudo')
<div class="index">
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

</div>

@endsection