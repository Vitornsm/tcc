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
          
            <img src="img/salaapm.jpg"  class="d-block w-100" alt="qualidade de ensino"/>
            <div class="carousel-caption d-md-block">
              <div class="texto"> APM </div>
                  </figure>

<div class="alinhar">
<h1>Associação de Pais e Mestres</h1>
<p>A APM é uma entidade jurídica de direito privado, criada com a finalidade de colaborar para o aperfeiçoamento do processo educacional, para a assistência ao escolar e para a integração escola-comunidade. Atualmente, sua principal função é atuar, em conjunto com o Conselho de Escola, na gestão da unidade escolar, participando das decisões relativas à organização e funcionamento escolar nos aspectos administrativos, pedagógicos e financeiros.

<h1>Existe algum regulamento para a APM?</h1>
<p>Através do Decreto n.º 12.983, de 15 de dezembro de 1978, alterado pelo Decreto n.º 48,408, de 06 de Janeiro de 2004, foi estabelecido o Estatuto Padrão das Associações de Pais e Mestres, e este é o instrumento que dispõe sobre as finalidades, atribuições e deveres para seu funcionamento como instituição. Para obter a lei, consulte o site: www.imesp.com.br</p>

<h1>Quando e como deverá ser constituída a APM?</h1>
<p>O mandato da Diretoria da APM é de um ano, devendo o Diretor da Escola, ao final do mesmo, convocar a equipe escolar (vice-diretor, coordenador pedagógico, pessoal administrativo e professores), pais dos alunos e os alunos maiores de 18 (dezoito) anos, para a Assembléia Geral que será presidida pelo mesmo. Compete à Assembléia Geral eleger o Conselho Deliberativo e o Conselho Fiscal. Cabe ao Conselho Deliberativo eleger os membros da Diretoria Executiva e divulgar os nomes dos escolhidos a todos os associados.</p>

<h1>Qual a finalidade da APM?</h1>
<p>A APM tem por finalidade colaborar no aprimoramento do processo educacional, na assistência ao escolar e na integração família / escola / comunidade. Os objetivos da APM são de natureza social e educativa, sem caráter político, racial ou religioso e sem finalidades lucrativas.</p>

<h1>Quem administra a APM?</h1>
<p>A APM é administrada pelos seguintes órgãos: Assembléia Geral – constituída por todos os associados. Conselho Deliberativo – constituído de, no mínimo, 11 (onze) membros, sendo o Diretor da Escola o seu presidente nato, e os demais componentes distribuídos na seguinte proporção: 30% dos membros serão professores, 40% dos membros serão pais de alunos, 20% dos membros serão alunos maiores de 18 (dezoito) anos, 10% dos membros serão sócios admitidos Diretoria Executiva – constituída por: Diretor Executivo, Vice-diretor Executivo, Secretário, Diretor Financeiro, Vice-diretor Financeiro, Diretor Cultural, Diretor de Esportes, Diretor Social, Diretor de Patrimônio. Obs. O Diretor Financeiro deverá ser, obrigatoriamente, pai ou mãe de aluno. Conselho Fiscal – será constituído de 3 (três) elementos, sendo 2 (dois) pais de alunos e 1 (um) representante do quadro administrativo ou docente da Escola.</p>

<h1>Qual a função do Diretor de Escola na APM?</h1>
<p>O Diretor de Escola é o presidente nato do Conselho Deliberativo da APM, devendo acompanhar todas as reuniões, sem direito a voto.</p>

<h1>O Diretor de Escola pode participar das reuniões?</h1>
<p>Conforme o disposto no Art. 37 do Estatuto Padrão da Associação de Pais e Mestres: ” O Diretor da Escola poderá participar das reuniões da Diretoria Executiva da APM, intervindo nos debates, prestando orientação ou esclarecimento ou fazendo registrar em atas seus pontos de vista, mas sem direito a voto.</p>

<h1>A APM deve ter Plano de Trabalho?</h1>
<p>Sim. A APM deve elaborar o seu Plano Anual de Trabalho, do qual devem constar as atividades de assistência ao escolar, a programação de atividades culturais e de lazer, a previsão de recursos para conservação e manutenção do prédio, dos equipamentos e das instalações, a aplicação dos recursos financeiros. O Plano Anual de Trabalho é parte integrante do Plano Escolar e deverá ser elaborado pela diretoria executiva da Associação de Pais e Mestres, com a participação do Conselho Fiscal e aprovação do Conselho Deliberativo.</p>

<h1>O pagamento de taxa de APM é obrigatório?</h1>
<p>A contribuição financeira para a APM é sempre facultativa. No início de cada ano letivo e após o encerramento do período de matrículas, serão fixadas a forma e a época para a campanha de arrecadação das contribuições dos sócios.</p>
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