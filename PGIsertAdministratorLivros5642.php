<?php
  session_start();


  if(empty($_SESSION['adm']))
  {
    echo ('<meta http-equiv="refresh"content=0;"index.php">');
  }
  else
  {
   
?>
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

<link rel="sortcut icon" href="img/etlg.ico" type="image/x-icon" />

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
      <br><br><br><br><br><br>
      <form accept-charset="utf-8" method="POST" class="texto" enctype="multipart/form-data">
      <center>
        <h1>Adicionar</h1>

				<a href="PGIsertAdministratorLivros5642.php" class="selecionado">Livros</a>
				<a href="PGIsertAdministratorJornais5642.php" class="butom">Jornais</a>
				<a href="PGIsertAdministratorMidias5642.php" class="butom">Mídias</a>
				<a href="PGIsertAdministratorRevistas5642.php" class="butom">Revistas</a>
        <a href="PGIsertAdministratorNoticia5642.php" class="butom">Notícia</a><br><br>

			</center>

			<div class="espaco_esquerdo" style="display: inline-block">

				<h1>Inserir Livro</h1>

				<table>
					<tr>
						<td>Código</td>
						<td><input type="text" name="txtcodlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Nome</td>
						<td><input type="text" name="txtnomelivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Genero</td>
						<td><input type="text" name="txtgenlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Código Autor</td>
						<td><input type="text" name="txtcodautorlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Autor</td>
						<td><input type="text" name="txtatutorlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Editora</td>
						<td><input type="text" name="txteditorlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Local</td>
						<td><input type="text" name="txtlocallivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Ano</td>
						<td><input type="text" name="txtanolivro" class="txtbox3"></td>
					</tr>

					<tr>
						<td>Imagem do livro</td>
						<td><input type="file"  name="imgboxlivro" class="txtbox3"></td>
					</tr>

				</table><br>

				<input type="submit" value="Inserir" name="cadastrarlivro" class="butom">&nbsp &nbsp &nbsp
				<input type="reset" value="Limpar" name="" class="butom"><br>

				<?php

				  
					include "conexao.php";

					$botao= filter_input(INPUT_POST, 'cadastrarlivro' , FILTER_SANITIZE_STRING);
					

					$codlivro= filter_input(INPUT_POST, 'txtcodlivro',FILTER_SANITIZE_STRING);
					$nomelivro= filter_input(INPUT_POST, 'txtnomelivro',FILTER_SANITIZE_STRING);
					$generolivro= filter_input(INPUT_POST, 'txtgenlivro',FILTER_SANITIZE_STRING);
					$codautorlivro= filter_input(INPUT_POST, 'txtcodautorlivro',FILTER_SANITIZE_STRING);
					$autorlivro= filter_input(INPUT_POST, 'txtatutorlivro',FILTER_SANITIZE_STRING);
					$editoralivro= filter_input(INPUT_POST, 'txteditorlivro',FILTER_SANITIZE_STRING);
					$locallivro= filter_input(INPUT_POST, 'txtlocallivro',FILTER_SANITIZE_STRING);
					$anolivro= filter_input(INPUT_POST, 'txtanolivro',FILTER_SANITIZE_STRING);
					

					if ($botao == "Inserir") 
					{
						if($codlivro && $nomelivro && $generolivro && $codautorlivro && $autorlivro && $editoralivro && $anolivro != null)
						{		
							$_UP['pasta'] = 'upload/';	

							if(isset($_FILES['imgboxlivro']));
							{
								$arquivo = $_FILES['imgboxlivro'];
								$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
								$novo_nome = md5(uniqid($arquivo['name'])).".".$extensao;

							

								$sql_code ="INSERT INTO `tb_livros`(`COD_LIVRO`, `NOME_LIVRO`, `GEN_LIVRO`, `COD_AUTOR_LIVRO`, 
								`NOME_AUTOR_LIVRO`, `EDITORA_LIVRO`, `LOCAL_LIVRO`, `ANO_LIVRO`, `IMG_LIVRO`) VALUES ('$codlivro',
								'$nomelivro','$generolivro','$codautorlivro','$autorlivro','$editoralivro','$locallivro','$anolivro',
								'$novo_nome')";

								if(mysqli_query($conn, $sql_code))
								{
									move_uploaded_file($_FILES['imgboxlivro']['tmp_name'], $_UP['pasta'].$novo_nome);
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
			<div class="empurrar">
				<h1>Deletar Livro</h1>

				<table>
					<tr>
						<td>Código</td>
						<td><input type="text" name="txtdelcodlivro" class="txtbox3"></td>
					</tr>
				</table>

				<input type="submit" value="Deletar" name="deletarlivro" class="butom">&nbsp &nbsp &nbsp<br>

				<?php
					include "conexao.php";
					$botao2= filter_input(INPUT_POST, 'deletarlivro' , FILTER_SANITIZE_STRING);
					$delcodlivro= filter_input(INPUT_POST, 'txtdelcodlivro',FILTER_SANITIZE_STRING);

					
					if ($botao2 =="Deletar") 
					{
						if($delcodlivro != null)
						{
              $sql_consultacod = "SELECT COD_LIVRO FROM tb_livros WHERE COD_LIVRO LIKE '$delcodlivro'";

              $resultado_consultacod = mysqli_query($conn, $sql_consultacod);

              $row_consultacod = mysqli_fetch_assoc($resultado_consultacod);

              $cod_consultado = $row_consultacod['COD_LIVRO'];


              if($cod_consultado != null)
              {
                $sql_consultaimg = "SELECT IMG_LIVRO FROM tb_livros WHERE COD_LIVRO LIKE '$delcodlivro'";

                $resultado_consultaimg = mysqli_query($conn, $sql_consultaimg);

                $row_consultaimg = mysqli_fetch_assoc($resultado_consultaimg);

                $img_cod = $row_consultaimg['IMG_LIVRO'];


  							$sql_code ="DELETE FROM `tb_livros` WHERE `tb_livros`.`COD_LIVRO` = '$delcodlivro'";

  							if(mysqli_query($conn, $sql_code))
								{
									if(file_exists("upload/" . $img_cod))
                  {
                    unlink ("upload/" . $img_cod ) ;
                  }
                  else
                  {
                    echo"";
                  }
									echo "<script>alert('Arquivo Deletado com susesso');</script>";
								}
              }
              else
              {
                echo '<h3 style="color: red;">';
                echo 'Código não existe';
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
        }
				?>
			</div>

		</form>
	</body>
</html>