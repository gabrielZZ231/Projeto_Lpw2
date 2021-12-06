@extends('tamplate.tamplate')
@section('conteudo')
<div class="index">
  <!-- Banner!-->
        <section class = "classe">
                <div class = "foco">
                    <h2 id = "textinho">Resumos e exercícios de <br>Matemática</h2>
                </div>
        </section>

    <!-- Serviços!-->  
    <section class = "srvs">
                <div class = "focoServicos">
                    <h2 >Recursos</h2>
                    <ul>
                        <li class = "serv-img grid-1-3"> <img src="assets/livrosEmpilhados.png" alt="img assuntos">
                                                         <h3>Conteúdo</h3>   
                                                         <p>Recomendados, mas não <br>de nossa autoria.</p>
                        </li>
                        <li class = "serv-img grid-1-3"> <img src="assets/exerciciosMat.png" alt="img exercicios">
                                                         <h3>exercícios</h3>
                                                         <p>Recomendados, mas não <br>de nossa autoria.</p>
                        </li>
                    </ul>
                </div>
        </section>  

        <!-- Assuntos!-->  
    <section class = "ass">
                <div class = "focoAssuntosP">
                    <h2 >Conteúdos</h2>
                    <ul>
                        <li class = "serv-img grid-1-3"> <img src="assets/log.png" alt="img logaritmos">
                                                         <h3>Logarítmo</h3>   
                                                         <div class = "outer">
                                                            <a href="#" class="inner">ACESSE</a>
                                                         </div>
                        </li>
                        <li class = "serv-img grid-1-3"> <img src="assets/NumerosComplexos.png" alt="img n complexos">
                                                         <h3>Númeoros <br>Complexos</h3>
                                                         <div class = "outer">
                                                         <a href="#" class="inner">ACESSE</a>
                                                         </div>
                        </li>
                    </ul>
                </div>
        </section>

        <section class = "assS">
                <div class = "focoAssuntosS">
                    <ul>
                        <li class = "serv-img grid-1-3"> <img src="assets/geoAna.png" alt="img logaritmos">
                                                         <h3>Geometria <br>Analítica
                                                         </h3>   
                                                         <div class = "outerS">
                                                            <a href="#" class="ner">ACESSE</a>
                                                         </div>
                        </li>
                        <li class = "serv-img grid-1-3"> <img src="assets/trigonometria.png" alt="img trigonometria">
                                                         <h3>Trigonometria</h3>
                                                         <div class = "outerS">
                                                         <a href="#" class="ner">ACESSE</a>
                                                         </div>
                        </li>
                    </ul>
                </div>
        </section>

        <footer class="bg-dark text-light fixed-bottom">
        <div class="text-center" style="background-color: #333; padding: 1px 20px;" >
        <h3>Sobre</h3>
        <br>
        <p>Site com explicações para ajudar os estudantes do Ensino Médio<br> com os assuntos mais difíceis de Matemática.</h3>
        </div>
        </footer>

</div>

@endsection