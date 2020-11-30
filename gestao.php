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
    
      <!-- Sobre a ETLG -->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
            
               <h3 class="main-title" >Gestão de Pessoas</h3><br>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/gestao1.jpg" alt="ETGL">
              </div>
              <div class="col-md-6">
                <h3 class="about-title"> O quê é? </h3>
                <p>O TÉCNICO EM GESTÃO DE PESSOAS anuncia vagas de emprego, descrevendo as atribuições do cargo a ser preenchido; aplica testes em processos seletivos; realiza cálculos para determinar os valores que serão descontados no salário dos funcionários, como o Imposto de Renda e a contribuição ao INSS, além de porcentagem referente a benefícios, como vale-transporte, plano de saúde etc.; insere informações no sistema para a geração de demonstrativos de pagamentos (holerites ou contracheques); cuida da documentação necessária para aposentadoria, contratação e demissão de profissionais, inclusive preenchendo informações na carteira de trabalho; organiza e arquiva documentos do setor; registra e controla período de férias e afastamento de funcionários; e auxilia no treinamento e capacitação dos empregados.</p><br><br>

                
               

                              
              </div>
              <br><h2 class="about-title">Onde Trabalhar<h2>
                <p>No setor de Recursos Humanos ou na área administrativa de empresas públicas e privadas de qualquer segmento, empresas de treinamento e desenvolvimento e agências de emprego.</p>
               <h2 class="about-title">Pré-Requisitos<h2>
               <p> Para a modalidade Técnico: Possuir Certificado de Conclusão do Ensino Médio ou declaração que está matrículado na 2ª série do ensino Médio.</p>

                <p>Para a modalidade Integrado: Possuir o certificado de conclusão do ensino fundamental nas modalidades: regular ou Educação de Jovens e Adultos – EJA ou Exame Nacional para Certificação de Competências de Jovens e Adultos – ENCCEJA.</p>
            </div>
          </div>
      </div>

      <!-- Cursos -->
      
      
      <!--Nossos Cursos-->
      <div id="cursos-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Nossos Cursos</h3>
            </div>
            <div class="col-md-12" id="filter-btn-box">
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