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
                    <li><a class="dropdown-item" href="noticias.php">Notícias</a></li>
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

  <form enctype="multipart/form-data" method="POST" action="" class="texto">
    <center>
      <br><br><br><br><br>
      <h1>Notícias</h1>
      <br>

    </center>

    <?php

      $query = "SELECT * ,date_format(HORA_NOTICIA,'%d / %m / %Y    ') as HORA_NOTICIA FROM `noticia` ORDER BY `noticia`.`NUMERO`  DESC";

      $queryexecute = mysqli_query($conn, $query);


      while ($row_noticia = mysqli_fetch_assoc($queryexecute))
      { 
        $IMGNT = $row_noticia['IMG_NOTICIA'];

        echo '<center><table width="70%" height="30%" style="box-shadow: 1px 1px 5px #7E7E7E;border-radius: 5px;">';
        echo '<tr><td><center><h2>'. $row_noticia['TITULO'] . '</h2></center></td></tr>';
        echo '<tr><td style="padding-left: 100px">' . $row_noticia['AUTOR'] .'<td><tr>';
        echo '<tr><td><center style="color: #4f4f4f;font-size: 13px">' . $row_noticia['HORA_NOTICIA'] . '<br>';
        echo'<img src="IMGnoticias/' . $IMGNT . '" width="80%" height="80%"><br>';
        echo '<div style="color: #6f6f6f;font-size: 13px"">' . $row_noticia['FONTE_IMG'] . '</div></center></td></tr>';
        echo '<tr><td><center><h5>'. $row_noticia['TEXTO'] . '</h5></center></td></tr>';

        echo'</table></center><br><br> ';
      }

    ?> 
  </form>
</booy>
</html>