<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel ="stylesheet" type="text/css" href="css/estilos2.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA_Compatible" content="ie=edge">
  <title>ADM</title>

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



</head>
<body>


  <header> <!-- Criação do Cabeçalho do site -->

     <!---  Menu -->

<div class="container" id="nav-container"> 
     
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">  
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="img/etlg2.jpeg" alt="ETLG"> 
        </a>

        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">HOME<span class="sr-only">(current)</span></a>
            </li>

           

           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">A ESCOLA</a>



                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item"><a>Histórico</a></li>
                    <li class="dropdown-item"><a href="#">Patrono</a></li>   
                    <li class="dropdown-item"><a href="#">APM</a></li>
                    <li class="dropdown-item"><a href="missao.html" target="_blank">Diretoria</a></li>
                    <li class="dropdown-item" href="#"><a>Colaboradores</a></li>
                    <li class="dropdown-item" href="#"><a>Infraestrutura</a></li>
                    <li class="dropdown-item" href="#"><a>Conselho Escolar</a></li>
                     <li class="dropdown-item"><a href="missao.html" target="_blank">Missão</a></li>

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
                    <li class="dropdown-item" href="#"><a>Contato</a></li>
                    <li class="dropdown-item" href="#"><a>Solicitação Documentação</a></li>   
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
                    <li class="dropdown-item" href="#"><a>Contato</a></li>
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
			<br><br><br><br><br>
      <form accept-charset="utf-8" method="POST" class="texto" enctype="multipart/form-data">
      <center>
				<h1>Adicionar a biblioteca</h1>

				<a href="PGIsertAdministratorLivros5642.php" class="butom">Livros</a>
				<a href="PGIsertAdministratorJornais5642.php" class="selecionado">Jornais</a>
				<a href="PGIsertAdministratorMidias5642.php" class="butom">Mídias</a>
				<a href="PGIsertAdministratorRevistas5642.php" class="butom">Revistas</a><br><br>

			</center>

			<div class="espaco_esquerdo">

				<h1>Isserir Jornal</h1>

				<table>
					<tr>
						<td>Nome</td>
						<td><input type="text" name="txtnomejonal" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Assunto</td>
						<td><input type="text" name="txtassuntojornal" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Data</td>
						<td><input type="date" name="txtdata" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Subpasta</td>
						<td><input type="text" name="txtsubpastajornal" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Imagem do Jornal</td>
						<td><input type="file"  name="imgboxjornal" class="txtbox3"></td>
					</tr>
				</table><br>

				<input type="submit" value="Inserir" name="cadastrarjosnal" class="butom">&nbsp &nbsp &nbsp
				<input type="reset" value="Limpar" name="" class="butom">

				<?php

					include "conexao.php";

					$botao= filter_input(INPUT_POST, 'cadastrarjosnal' , FILTER_SANITIZE_STRING);

					$nomejornal= filter_input(INPUT_POST, 'txtnomejonal' , FILTER_SANITIZE_STRING);
					$asuntojornal= filter_input(INPUT_POST, 'txtassuntojornal' , FILTER_SANITIZE_STRING);
					$datajornal= filter_input(INPUT_POST, 'txtdata' , FILTER_SANITIZE_STRING);
					$subpastajornal= filter_input(INPUT_POST, 'txtsubpastajornal' , FILTER_SANITIZE_STRING);
					
					if($botao == "Inserir")
					{
						if($nomejornal && $asuntojornal && $datajornal && $subpastajornal !=null)
						{
							$_UP['pasta'] = 'upload/';	

							if(isset($_FILES['imgboxjornal']));
							{
								$arquivo = $_FILES['imgboxjornal'];
								$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
								$novo_nome = md5(uniqid($arquivo['name'])).".".$extensao;

								move_uploaded_file($_FILES['imgboxjornal']['tmp_name'], $_UP['pasta'].$novo_nome);

								$sql_code ="INSERT INTO `tb_jornais` (`NOME_JORNAL`, `ASSUNTO_JORNAL`, `DATA_JORNAL`, `SUBPASTA_JORNAL`, `IMG_JORNAL`) VALUES ('$nomejornal', '$asuntojornal', '$datajornal', 
								'$subpastajornal', '$novo_nome')";

								if(mysqli_query($conn, $sql_code))
								{
									
									echo "<script>alert('Arquivo enviado com susesso');</script>";
								}
								else
								{
									echo '<h3 style="color: red;">';
									echo 'Dados já cadastrados';
									echo '</h3>';
								}
							}	
						}
						else
						{
							echo '<h3 style="color: red;">';
							echo 'Preencha todos os campos';
							echo '</h3>';
						}
					}

				?>

			</div>
			<div>
				<h1>Delatar Jornal</h1>
				<table>
					<tr>
						<td>Numero</td>
						<td><input type="text" name="txtdeletarjornal" class="txtbox3"></td>
					</tr>
				</table>
				<input type="submit" value="Deletar" name="btndeletarjornal" class="butom">
				<?php

					$botao2 = filter_input(INPUT_POST, 'btndeletarjornal' , FILTER_SANITIZE_STRING);

					$delatarjornal = filter_input(INPUT_POST, 'txtdeletarjornal' , FILTER_SANITIZE_STRING);

					if($botao2 == "Deletar")
					{
						if($delatarjornal != null)
						{
							$sql_code ="DELETE FROM `tb_jornais` WHERE `tb_jornais`.`NUM_JORNAL` = '$delatarjornal'";

								if(mysqli_query($conn, $sql_code))
								{
									
									echo "<script>alert('Arquivo Deletado com susesso');</script>";
								}
								else
								{
									echo '<h3 style="color: red;">';
									echo 'Numero não existe';
									echo '</h3>';
								}
						}
						else
						{
							echo '<h3 style="color: red;">';
							echo 'Preencha o campo';
							echo '</h3>';
						}
					}

				?>
			</div>
		</form>
</body>
</html>