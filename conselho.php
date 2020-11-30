<?php
session_start();
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA_Compatible" content="ie=edge">
  <title>Escola Técnica Laurindo Guimarães</title>

  <!-- Fonte usada no site-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

  <!-- Estilos CSS e Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">


  <!-- Scripts (jQuery do Boostrap) -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Font Awesome fornece icones para o html -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>



  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>

  <!-- Parallax  efeito de parallax de imagens-->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
<link rel="sortcut icon" href="img/etlg.ico" type="image/x-icon" />;


</head>
<body>


  <header> <!-- Criação do Cabeçalho do site -->

     <!---  Menu -->

<div class="container" id="nav-container"> 
     
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">  
        <a class="navbar-brand" href="index.php">
          <img id="logo" src="img/etlg2.jpeg" alt="ETLG"> 
        </a>

        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
            </li>

           

           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">A ESCOLA</a>



                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item"><a href="historico.php" style="color: #F00">Histórico</a></li>
                    <li class="dropdown-item"><a href="patrono.php" style="color: #F00">Patrono</a></li>   
                    <li class="dropdown-item"><a href="apm.php" style="color: #F00">APM</a></li>
                    <li class="dropdown-item"><a href="diretor.php" style="color: #F00" >Diretoria</a></li>
                    <li class="dropdown-item"><a  href="colaboradores.php" style="color: #F00">Colaboradores</a></li>
                    <li class="dropdown-item" ><a href="infraestrutura.php" style="color: #F00">Infraestrutura</a></li>
                    <li class="dropdown-item" ><a href="conselho.php" style="color: #F00">Conselho Escolar</a></li>
                     <li class="dropdown-item"><a href="missao.php" style="color: #F00">Missão</a></li>
                            <li class="dropdown-item"><a href="visao.php" style="color: #F00">Visão</a></li>
                            <li class="dropdown-item"><a href="valores.php" style="color: #F00">Valores</a></li>


                    <li class="dropdown-item dropdown"> 

                 
                    </li>
                </ul>
            </li>




            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CURSOS</a>

                <ul class="dropdown-menu" aria-labelledby="dropdown2">
                  <li class="dropdown-item"><a href="tecnicocomitante.php" style="color: #F00">Ensino Médio Integrado Técnico</a></li>
                    <li class="dropdown-item"><a href="Tecnico.php" style="color: #F00">Ensino Técnico</a></li>   
                    <li class="dropdown-item"><a href="ensinomedio.php" style="color: #F00">Ensino Médio</a></li>
                       <li class="dropdown-item dropdown">
                              
                           </li>
                        </ul>
                            

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALUNOS</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item" href="missao.html"><a href="missao.html" style="color: #F00">Calendario Escolar</a></li>
                    <li class="dropdown-item" ><a href="curso.php" style="color: #F00">Cursos Extra Curricular</a></li>   
                    <li class="dropdown-item" ><a href="manualaluno.php" style="color: #F00">Manual do Aluno</a></li>
                    <li class="dropdown-item" ><a href="horarioaulas.php" style="color: #F00">Horário de Aulas</a></li>
                    <li class="dropdown-item dropdown">
                    </li>
                </ul>
            </li>


                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SECRETARIA</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a href="secretariacontato.php" class="dropdown-item" style="color: #F00">Solicitação Documentação</a></li>   
                </ul>
            </li>



              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BIBLIOTECA</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a href="livros.php" style="color: #F00" class="dropdown-item">Livros</a></li>
                    <li><a href="jornais.php" style="color: #F00" class="dropdown-item">Jornais</a></li>
                    <li><a href="midias.php" class="dropdown-item" style="color: #F00">Mídias</a></li>
                    <li><a href="revistas.php" class="dropdown-item" style="color: #F00">Revistas</a></li>
                    </ul>
            </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EVENTOS / NOTICIAS</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a class="dropdown-item" href="noticias.php" style="color: #F00">Notícias</a></li>
                </ul>
            </li>


                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONTATO</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a class="dropdown-item" href="ContatoSuport.php" style="color: #F00">Contato</a></li>
                </li>
                  </ul>
            </li>
     
            <?php
              include "ADMadministratorPerfil5241.php";
            ?>       
    </div>
</div>

  </header>



  <main>
    
     <!-- imagem legenda -->
      
      <figure class="legenda">
          
            <img src="img/diretoria.jpg"  class="d-block w-100" alt="qualidade de ensino"/>
            <div class="carousel-caption d-md-block">
              <div class="texto"> Conselho Escolar </div>
                  </figure>

   <div class="row mb-5">
        <div class="col-md-12">  
          <div class="card">
             
            <div class="card-body">
              <h4 class="card-title">CONSELHO DE ESCOLA</h4>
              <h6 class="card-subtitle mb-2 text-muted">Gestão administrativa </h6>

               <pre> Conselho de Escola é um colegiado, de natureza deliberativa e consultiva, constitui por representantes de pais, professores, alunos e funcionários.

 

Artigo 10 - O Conselho de Escola, integrado por representantes da comunidade escolar e da comunidade extraescolar, cuja composição será:

I - pela comunidade escolar:

a) Diretor, presidente nato;

b) um representante das diretorias de serviços e relações institucionais;

c) um representante dos professores;

d) um representante dos servidores técnico e administrativos;

e) um representante dos pais de alunos;

f) um representante dos alunos;

g) um representante das instituições auxiliares.

II - pela comunidade extraescolar:

a) representante de órgão de classe;

b) representante dos empresários, vinculado a um dos cursos;

c) aluno egresso atuante em sua área de formação técnica;

d) representante do poder público municipal;

e) representante de instituição de ensino, vinculada a um dos cursos;

f) representantes de demais segmentos de interesse da escola.

§ 1º- A composição da comunidade extraescolar será de, no mínimo, quatro membros e, no máximo, de sete membros.

§ 2º - Os representantes mencionados no inciso I, alíneas de “b” a “g”, serão escolhidos pelos seus pares, e os mencionados no inciso II serão convidados pela Direção da Escola.

§ 3º - Os representantes cumprirão mandato de um ano, permitidas reconduções.

Artigo 11 - O Conselho de Escola terá as seguintes atribuições:

I - deliberar sobre:

a) o projeto político-pedagógico da escola;

b) as alternativas de solução para os problemas acadêmicos e pedagógicos;

c) as prioridades para aplicação de recursos.

II – estabelecer diretrizes e propor ações de integração da escola  com a comunidade;

III - propor a implantação ou extinção de cursos oferecidos pela escola, de acordo com as demandas locais e regionais e outros indicadores;

IV - aprovar o Plano Plurianual de Gestão e o Plano Escolar;

V - apreciar os relatórios anuais da escola, analisando seu desempenho diante das diretrizes e metas estabelecidas.

§ 1º - O Conselho de Escola poderá ser convocado pela Direção para manifestar-se sobre outros temas de interesse da comunidade escolar.

§ 2º - O Conselho de Escola reunir-se-á, ordinariamente, no mínimo, duas vezes a cada semestre e,  extraordinariamente, quando convocado pelo seu presidente ou de seus membros.

§ 3º - As reuniões do Conselho de Escola deverão contar com a presença mínima da maioria simples de seus membros.

§ 4º - Nas decisões a serem tomadas por maioria simples, todos os membros terão direito a voto, cabendo ao diretor o voto de desempate.</pre>

                

            </div>
          </div>
        </div>


        
   </div>

      
      

      
  </main>
 <!-- Rodapé -->
  <footer>
    
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">

   <p><span class="contact-tile"></span><i class="fas fa-route"></i> &nbsp; R. José Bonifácio, 428 -São Carlos - SP &nbsp; &nbsp;&nbsp; &nbsp;  <i class="fas fa-phone"></i> &nbsp;(16) 94442-3496 &nbsp;&nbsp;&nbsp; &nbsp;<i class="fas fa-envelope-open-text">&nbsp;</i>laurindoguimaraestec@gmail.com</p><br> 


            <p>Desenvolvido por <a href="#" target="_blank">Mindplex</a> &copy; 2020</p>






            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts do projeto -->
  <script src="js/scripts.js"></script>
</body>
</html>