<?php
session_start();
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
    <div class="container-fluid">
      <!-- Carrocel  -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">

        <!-- indicador do carrocel -->
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
          <li data-target="#mainSlider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <a href="noticias.php">
            <div class="carousel-item active">
              <img src="img/Abrirnoticia" class="d-block w-100" alt="qualidade de ensino" width="100%" height="100%">
                <div class="carousel-caption d-md-block">
                </div>
              </a>
             </div>
        <?php

          include_once "conexao.php";

          $querybaner = "SELECT * FROM noticia `noticia` ORDER BY `noticia`.`NUMERO`  DESC";

          $queryexecute = mysqli_query($conn, $querybaner);




          while ($row_noticia = mysqli_fetch_assoc($queryexecute))
          { 
            $IMGNT = $row_noticia['IMG_NOTICIA'];
              
            echo '<a href="noticias.php">
                    <div class="carousel-item">
                      <img src="IMGnoticias/' . $IMGNT . '" class="d-block w-100" alt="fazer curso tecnico" width="100%" height="140%">
                      <div class="carousel-caption d-md-block">
                        <h1 style="-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: #fff; text-shadow: 0px 5px 5px #000;">' . $row_noticia['TITULO'] . '</h1>
                      </div>
                    </a>
                    </div>';
          }

        ?>

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
                <h3 class="about-title"> Escola Laurindo Guimarães , porque estudar aqui ? </h3>
                <p>Uma escola são focadas não somente em um ótimo ensino, mas, também, em fazer com que os  alunos se desenvolvam de diversas formas diferentes. </p>
                <p>Dessa forma, estudar na ETLG se torna até mais divertido do que estudar em uma escola convencional. </p>
                <p>A ETLG é feito para quem quer ter um futuro melhor. Sabe aquele desejo de entrar na faculdade dos seus sonhos? Ou aquela empresa em que você sempre quis trabalhar no futuro? Já pensou em morar na sua cidade favorita? E o sonho de viajar o mundo? Pode ser que você nunca tenha parado para pensar na maneira como vai conquistar tudo isso (porque, sim, você é capaz de conseguir), mas o fato é que todas essas metas dependem de um ensino de muita qualidade. Porque fazer : </p>
                <ul id="about-list">
                  <li><i class="fas fa-check"></i> Realizar o ensino médio junto do ensino técnico.</li>
                  <li><i class="fas fa-check"></i> Ingressar rapidamente no mercado de trabalho</li>
                  <li><i class="fas fa-check"></i> Preparação para ingressar na melhores faculdades </li>
                  <li><i class="fas fa-check"></i> Laboratória modernos , focado em aulas práticas</li>
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
              <h4>Eletrônica</h4>
              <p>Estuda a forma de controlar a energia elétrica por meios elétricos</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-file-code"></i>
              <h4>Informática</h4>
              <p> Estudo e o desenvolvimento das tecnologias de informação</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-sitemap"></i>
              <h4>Administação</h4>
              <p>Administrar ou gerir negócios, pessoas ou recursos, com o objetivo de alcançar metas definidas.</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fab fa-google"></i>
              <h4>Gestão de Pessoas</h4>
              <p> Práticas que visa o desenvolvimento do capital humano nas empresas</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-shipping-fast"></i>
              <h4>Logistica</h4>
              <p>Planejamento e execução do eficiente transporte e armazenamento de mercadorias</p>
            </div>
            <div class="col-md-4 curs-box">
              <i class="fas fa-atom"></i>
              <h4>Quimica</h4>
              <p>Estuda a composição, estrutura, propriedades da matéria</p>
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
              <p>A ETLG abriu inscrições para um novo concurso de bolsas de estudo com descontos nas mensalidades que podem chegar a 100%. </p>
              <p> processo seletivo oferece vagas para estudantes que desejam ingressar no Ensino Médio ou Técnico.</p>
              <p>Clique no botão abaixo e confira os detalhes.</p>
              
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
              <button class="main-btn filter-btn" id="all">Todos</button>
              <button class="main-btn filter-btn" id="adm-btn">Administração</button>
              <button class="main-btn filter-btn" id="ifo-btn">Informática</button>
              <button class="main-btn filter-btn" id="elr-btn">Eletrônica</button>
              <button class="main-btn filter-btn" id="qui-btn">Química</button>
              <button class="main-btn filter-btn" id="log-btn">Logistica</button>
              <button class="main-btn filter-btn" id="gp-btn">Gestão Pessoas</button>
            </div>
            <div class="col-md-4 project-box adm">
              <div class="zoom">
                <img src="img/adm.jpg" class="img-fluid" alt="Administração">
              </div>
            </div>
            <div class="col-md-4 project-box ifo">
              <div class="zoom">
                <img src="img/proj2.jpg" class="img-fluid" alt="Informática">
              </div>
            </div>
            <div class="col-md-4 project-box elr">
              <div class="zoom">
                <img src="img/proj3.jpg" class="img-fluid" alt="Eletrônica">
              </div>
            </div>
            <div class="col-md-4 project-box gp">
              <div class="zoom">
                <img src="img/gestao.jpg" class="img-fluid" alt="Gestão">
              </div>
            </div>
            <div class="col-md-4 project-box qui">
              <div class="zoom">
                <img src="img/quimica3.jpg" class="img-fluid" alt="Química">
              </div>
            </div>
            <div class="col-md-4 project-box log">
              <div class="zoom">
                <img src="img/logistica.jpg" class="img-fluid" alt="Logistica">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contato1-->
      <div id="call-area">
        <div class="container">
            <div class="row">
              <p>Ficou com duvidas , contate-nos</p>
              <a href="ContatoSuport.php"><button class="-btn" id="call-btn">Clique</button></a>
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
              <p><span class="contact-tile">Fone:</span> (11)94442-3496</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> laurindoguimaraestec@gmail.com</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Localização:</span> Rua dos Czares - nº1249</p>
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