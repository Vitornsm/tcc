<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  
  	<link rel ="stylesheet" type="text/css" href="css/estilos.css">
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
<div class="teamplate">
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
                    <li class="dropdown-item"><a style="color: #F00">Histórico</a></li>
                    <li class="dropdown-item"><a href="#" style="color: #F00">Patrono</a></li>   
                    <li class="dropdown-item"><a href="apm.html" style="color: #F00">APM</a></li>
                    <li class="dropdown-item"><a href="diretor.html" style="color: #F00" >Diretoria</a></li>
                    <li class="dropdown-item" href="#"><a style="color: #F00">Colaboradores</a></li>
                    <li class="dropdown-item" href="#"><a style="color: #F00">Infraestrutura</a></li>
                    <li class="dropdown-item" ><a href="conselho.html" style="color: #F00">Conselho Escolar</a></li>
                     <li class="dropdown-item"><a href="missao.html" style="color: #F00">Missão</a></li>

                    <li class="dropdown-item dropdown"> 

                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Principios</a>

                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">

                            <li class="dropdown-item"><a href="missao.html" target="_blank">Missão</a></li>
                            <li class="dropdown-item"><a href="visao.html">Visão</a></li>
                            <li class="dropdown-item"><a href="valores.html">Valores</a></li>


                          </ul>
                    </li>
                </ul>
            </li>




            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CURSOS</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown2">
                  
                       <li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ensino Médio Integrado Técnico</a>
                              <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                 <li class="dropdown-item" href="#visao.html"><a href="visao.html">Curso1</a></li>
                                 <li class="dropdown-item" href="#"><a>Curso2</a></li>
                                 <li class="dropdown-item" href="#"><a>Curso3</a></li>
                            </ul>

                               <li class="dropdown-item dropdown">
                                 <a class="dropdown-toggle" id="dropdown3-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ensino Técnico</a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdown3-1">
                                     <li class="dropdown-item" href="#"><a>Curso1</a></li>
                                     <li class="dropdown-item" href="#"><a>Curso2</a></li>
                                     <li class="dropdown-item" href="#"><a>Curso3</a></li>
                                   </ul>
                                 

                                    <li class="dropdown-item dropdown">
                                 <a class="dropdown-toggle" id="dropdown4-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ensino Médio</a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdown4-1">
                                 <li class="dropdown-item" href="#"><a>Curso1</a></li>
                                 <li class="dropdown-item" href="#"><a>Curso2</a></li>
                                 <li class="dropdown-item" href="#"><a>Curso3</a></li>
                                 </ul>
                               </li>
                             </li>
                           </li>
                        </ul>
                            

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALUNOS</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item" href="missao.html"><a href="missao.html">Calendario Escolar</a></li>
                    <li class="dropdown-item" href="#"><a>Cursos Extra Curricular</a></li>   
                    <li class="dropdown-item" href="#"><a>Manual do Aluno</a></li>
                    <li class="dropdown-item" href="#"><a>Horário de Aulas</a></li>
                    <li class="dropdown-item" href="#"><a>Regimento Escolar</a></li>
                    <li class="dropdown-item dropdown">


                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Downloads</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Modelo TCC </a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Formulario Vale Transporte</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                    <li class="dropdown-item" href="#"><a>EMTU A</a></li>
                                    <li class="dropdown-item" href="#"><a>Bilhete Único</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>


                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SECRETARIA</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a href="secretariacontato.html" class="dropdown-item">Solicitação Documentação</a></li>   
                </ul>
            </li>



              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BIBLIOTECA</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a href="livros.php" class="dropdown-item">Livros</a></li>
                    <li><a href="jornais.php" class="dropdown-item">Jornais</a></li>
                    <li><a href="midias.php" class="dropdown-item">Mídias</a></li>
                    <li><a href="revistas.php" class="dropdown-item">Revistas</a></li>
                    <li class="dropdown-item" href="#"><a>Leitura para Vestibular</a></li>   
                      <li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TCC</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Normas ABNT</a></li>
                            <li class="dropdown-item" href="#"><a>Dicas TCC</a></li>
                            <li class="dropdown-item" href="#"><a>O que é plagio</a></li>
                            <li class="dropdown-item" href="#"><a>Modelo TCC</a></li>

                        </ul>
                    </li>
                </ul>
            </li>



                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EVENTOS / NOTICIAS</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item" href="#"><a>Histórico</a></li>
                    <li class="dropdown-item" href="#"><a>Patrono</a></li>   
                    <li class="dropdown-item" href="#"><a>APM</a></li>
                    <li class="dropdown-item dropdown">


                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Principios</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Missão</a></li>
                            <li class="dropdown-item" href="#"><a>Visão</a></li>
                            <li class="dropdown-item" href="#"><a>Valores</a></li>
                            <li class="dropdown-item dropdown">

                        </ul>
                    </li>
                </ul>
            </li>


                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONTATO</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a class="dropdown-item" href="ContatoSuport.html">Contato</a></li>
                </li>
                  </ul>
            </li>
      </ul>

      

        <!-- Pesquisa do site-->
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>




    </div>
</div>

  </header>

    <main>
    <div class="container-fluid">
      <!-- Carrocel  -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">

        <!-- indicador do carrocel -->
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
          <a href="#">
            <div class="carousel-item active">
              <?php

                $query = "";

              ?>
              <img src="img/banner4.jpg" class="d-block w-100" alt="qualidade de ensino">
              <div class="carousel-caption d-md-block">
            </div>
          </a>
        </div>

          <a href="#">
          <div class="carousel-item">
            <img src="img/banner5.png" class="d-block w-100" alt="fazer curso tecnico">
            <div class="carousel-caption d-md-block">
            </div>
          </a>
          </div>

          <a href="#">
          <div class="carousel-item">
            <img src="img/banner6.jpg" class="d-block w-100" alt="Estudar na ETLG">
            <div class="carousel-caption d-md-block">
            </div>
            </a>
          </div>
        </div>



        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>




      <!-- Sobre a ETLG -->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Escola Técnica Laurindo Guimarães</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/lab1.jpg" alt="ETGL">
              </div>
              <div class="col-md-6">
                <h3 class="about-title"> But I must explain to you how all this mistaken idea </h3>
                <p>Of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth</p>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                <p>Lorem ipsum dolor sit amet, :</p>
                <ul id="about-list">
                  <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet 1I</li>
                  <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet 2</li>
                  <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet 3</li>
                  <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet 4</li>
                  <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet 5</li>
                </ul>
              </div>
            </div>
          </div>
      </div>

      <!-- Cursos -->
      <div id="cusr-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h3 class="main-curso">Cursos</h3>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-microchip"></i>
              <h4>Eletronica</h4>
              <p>ULorem ipsum dolor sit amet</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-file-code"></i>
              <h4>Informática</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-sitemap"></i>
              <h4>Administação</h4>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fab fa-google"></i>
              <h4>Desenvolvimento </h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-shipping-fast"></i>
              <h4>Logistica</h4>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-atom"></i>
              <h4>Quimica</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Dados Escola-->
     <div id="data-area">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleA"></div>
              <p>Alunos formados</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleB"></div>
              <p>Conseguiram emprego até 6 meses</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleC"></div>
              <p>Indicariam a ETLG</p>
            </div>  
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleD"></div>
              <p>Aprovados em Vestibulares de Universidades Federais</p>
            </div>
          </div>
        </div>
      </div> 
      

      <!-- Novidades -->
      <div id="apply-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 apply-box" id="novidade-img"></div>
            <div class="col-md-6 apply-box" id="pattern-img">
              <h4>Concurso de Bolsas..</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <p>Clique no botão abaixo e confira os detalhes.</p>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo .</p>
              
              <a href="#" class="main-btn" id="apply-btn">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>


      <!--Nossos Cursos-->
      <div id="cursos-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Nossos Cursos</h3>
            </div>
            <div class="col-md-12" id="filter-btn-box">
              <button class="main-btn filter-btn active" id="all-btn">Todos</button>
              <button class="main-btn filter-btn" id="adm-btn">Administração</button>
              <button class="main-btn filter-btn" id="ifo-btn">informatica</button>
              <button class="main-btn filter-btn" id="elr-btn">Eletro</button>
            </div>
            <div class="col-md-4 project-box ifo">
              <img src="img/proj1.jpg" class="img-fluid" alt="Projeto 1">
            </div>
            <div class="col-md-4 project-box ifo">
              <img src="img/proj2.jpg" class="img-fluid" alt="Projeto 2">
            </div>
            <div class="col-md-4 project-box elr">
              <img src="img/proj3.jpg" class="img-fluid" alt="Projeto 3">
            </div>
            <div class="col-md-4 project-box elr">
              <img src="img/proj4.jpg" class="img-fluid" alt="Projeto 4">
            </div>
            <div class="col-md-4 project-box adm">
              <img src="img/proj5.jpg" class="img-fluid" alt="Projeto 5">
            </div>
            <div class="col-md-4 project-box adm">
              <img src="img/proj6.jpg" class="img-fluid" alt="Projeto 6">
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter -->
      <div id="news-area">
        <div class="container">
          <div class="col-md-12">
            <h3 class="main-title">Atento as nossas novidades</h3>
          </div>
          <p>Receba novidades sobre concurso , cursos , cadastre seu e-mail</p>
          <form action="">
            <input type="text" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
            <input type="submit" id="news-btn" value="Inscrever">
          </form>
        </div>
      </div>
      <!-- Contato1-->
      <div id="call-area">
        <div class="container">
            <div class="row">
              <p>Ficou com duvidas , contate-nos</p>
              <button class="-btn" id="call-btn">Clique</button>
            </div>
          </div>
      </div>
    </div>
  </main>
  <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Nos contate </h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Fone:</span> (11)99999-9999</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> contato@etlg.edu.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Localização:</span> Rua Lorem Ipsum - 9999</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
            <p>Desenvolvido por <a href="tcc.html" target="_blank">Mindplex</a> &copy; 2020</p>
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
