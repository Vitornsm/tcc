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
              <div class="texto"> Infraestrutura </div>
                  </figure>

              </div>

              
<!-- Time -->
      <div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Infraestrutura ETLG</h3>

               <p>ETLG oferece aos alunos uma infraestrutura que conta com 6 laboratórios de informática com equipamentos modernos e softwares atualizados, projetor de multimídia (data show) em todas as salas (inclusive laboratórios) e rede Wi-Fi.

Além disso, existem 10 laboratórios específicos para o curso de Tecnologia em Automação Industrial, dentre eles: Células de Manufatura para simular processos industriais (incluindo Robôs), Plantas Industriais para controle de variáveis de processo e ensaios de sensores, Eletrônica Analógica e Digital, Hidráulica e Pneumática, Sistemas de Eletrônica de Potência, bem como Acionamento de Motores Elétricos. </p>
<p>Além de 2 laboratórios de ensaios quimicos , para aulas práticas dos curso de quimíca. </p>
<p> Salas com lousa digital e datashow , wifi , para dinamismo nas aulas , seja ela técnica ou acadêmica normal, fortalecendo a fixação da materia pelos alunos.</p>

<p>A biblioteca possui mais de 4000 volumes. além de comodidades como : lanchonete, gráfica/bazar, refeitório e estacionamento.</p>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/labTI.jpg" class="card-img-top" alt="laboratórios TI">
                <div class="card-body">
                  <h5 class="card-title">Lab. 1</h5>
                  <p class="card-text">Laboratório TI</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/lab1.jpg" class="card-img-top" alt="Laboratório TI">
                <div class="card-body">
                  <h5 class="card-title">Lab. 2</h5>
                  <p class="card-text">Laboratório TI</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/lab2.jpg" class="card-img-top" alt="laboratórios TI">
                <div class="card-body">
                  <h5 class="card-title">Lab. 3</h5>
                  <p class="card-text">Laboratório TI</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/LanEle.jpg" class="card-img-top" alt="Laboratório  Eletrônica">
                <div class="card-body">
                  <h5 class="card-title">Lab. 4</h5>
                  <p class="card-text">Laboratório Eletrônica</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <img src="img/quimica1.jpg" class="card-img-top" alt="Laboratório Quimica">
                <div class="card-body">
                  <h5 class="card-title">Lab. 5</h5>
                  <p class="card-text">Laboratório Quimica</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/cantina.jpg" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title">Cantina</h5>
                  <p class="card-text">Cantina</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/sala.jpg" class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title">Sala </h5>
                  <p class="card-text">Sala de aula</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/mec.jpg" class="card-img-top" alt="Imagem de Perfil 4">
                <div class="card-body">
                  <h5 class="card-title">Lab 6</h5>
                  <p class="card-text">Laboratório Hidráulico</p>
                </div>
              </div>
            </div>


            <div class="col-md-4">
              <div class="card">
                <img src="img/mec1.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                <div class="card-body">
                  <h5 class="card-title">lab 7</h5>
                  <p class="card-text">Laboratório Mecânica</p>
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