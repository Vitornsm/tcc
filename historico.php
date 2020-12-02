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
                    <li class="dropdown-item" href="missao.html"><a href="docm%20PDF/calendario%20escolar.pdf" style="color: #F00">Calendario Escolar</a></li>
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
    
    


      <section class="header-site">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
          
              <h1 class="lead text-center"> Nossa história </h1><br><br><br>
                <p class="lead text-center">Tudo começou por um sonho de Laurindo Guimarães que acreditava que o desenvolvimento de um país vem da educação .</p>

                
            </div>



           </div>
          
       </div>

      </section>

      <section class="content-site" >  
        <div class="container">
          <div class="row">
            <div class="col-xs-12">

              <h1 class="text-center">  Concretizando Sonhos</h1>  <br><br><br>

              
              <p class="text-justify"> Nascida dos ideais de um grande homem, Laurindo Guimarães, de transforma um sonho em realidade , a Escola Técnica Laurindo Guimarães , em  São Carlos foi criada 30 de janeiro de 1965, onde conseguiu parcerias imporantes ,  do municipio de São Carlos , e empresas da região que necessitada de grande numero de mão de obra , técnica , decidiu-se a construção de uma escola técnica de referencia na região ., e assim se fez  a criação, instalação e funcionamento de uma escola de ensino técnico-industrial.
              Citando, e forma resumida, as responsabilidades assumidas pelas partes nesse Convênio, coube à preifetura a doação de terrenos necessários à construção da escola (cerca de 162000 m2), e as empresas ajudariam na modernização industrial da escola necessárias ao bom funcionamento dos cursos mantidos pela escola. As atividades didáticas foram iniciadas em março de 1970 com o curso Técnico Industrial de Construção de Máquinas e Motores ."</p>
              <p class="text-justify" >
                  Já a partir de 1968 o próprio Bank of London South America, através da Companhia City, implantou em São Carlos , um sofisticado trabalho de implantação de infraestrutura urbana, com logradouros públicos projetados, rede de água e esgotos, energia elétrica, espaço para praças e terrenos amplos terraplanados.  As vendas dos terrenos começaram em 1970.    </p>
                  <p class="text-justify">
                  Os primeiros cursos para os homens foram Eletrotécnica, Fundição e Motorista; para as mulheres ("visava dar à moça uma profissão com a qual possa ganhar a vida e, ao mesmo tempo, para que se torne no futuro uma boa dona de casa.") Economia Doméstica, Puericultura e Arte Culinária.  </p>

            </div>
            

          </div>
         
      <section class="fmg-site">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
          
             <!-- <h1 class="lead text-center">HOJE  </h1>
                <p class="lead text-center">Uma das mais modernas instituição de ensino , técnico da região carregando qualidade de ensino e tradição. </p>

                <p class="text-center"> Modernidade e Qualidade em educação  </p>-->
            </div>



           </div>
            
          
        </div>
      </section


      <section class="footer-site">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
             <h1 class="txt-fim"> HOJE </h1>
              <p class="text-justify">
                  Uma das mais modernas instituição de ensino , técnico da região carregando qualidade de ensino e tradição.
                  Prédios modernos , equipados com instrumentos de ponta. O Colégio Técnico Laurindo Guimarães contando com uma infraestrutura moderna e os melhores profissionais para valorizar ainda mais seu aprendizado. 
                Aulas dinâmicas com recursos áudio visuais e práticas em sintonia com o mercado.
              Graças ao empenho e dedicação da equipe, e principalmente dos alunos que sempre confiaram em nosso trabalho   </p>
              
            </div>
          </div>
        </div>


      </section>



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