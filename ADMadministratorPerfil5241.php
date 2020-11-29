<?php
        
        include "conexao.php";
        
        if(empty($_SESSION['adm']))
        {
          echo"";
        }
        else
        {
            $usuariofiltrado = $_SESSION['filtro'];

            $queryadmfoto="SELECT * FROM login  WHERE USUARIO LIKE '$usuariofiltrado' ";

            $excutequeryadm = mysqli_query($conn, $queryadmfoto);

            $row_adm = mysqli_fetch_assoc($excutequeryadm);

            $IMGadm = $row_adm['IMG_ADM'];

              ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMINISTRADOR</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a class="dropdown-item" style="color: #F00" href="PGIsertAdministratorLivros5642.php">Inserir Livros</a></li>
                    <li><a class="dropdown-item" style="color: #F00" href="PGIsertAdministratorJornais5642.php">Inserir Jornais</a></li>
                    <li><a class="dropdown-item" style="color: #F00" href="PGIsertAdministratorMidias5642.php">Inserir Mídias</a></li>
                    <li><a class="dropdown-item" style="color: #F00" href="PGIsertAdministratorRevistas5642.php">Inserir Revistas</a></li>
                    <li><a class="dropdown-item" style="color: #F00" href="PGIsertAdministratorNoticia5642.php">Inserir Notícias</a></li>
                </li>
                </ul>
            </li>
           </ul>

            

            <?php
            

            $Botaosir=filter_input(INPUT_POST, 'btnsair', FILTER_SANITIZE_STRING);

            if($Botaosir == "Sair") 
            {
              echo ('<meta http-equiv="refresh"content=0;"index.php">');
            }

            
            echo '<center><a href="index.php" style="text-decoration:none;"><img src ="PerfilADM/' . $IMGadm . '" width="30%" height="30%" style=" border-radius: 50%; margin-left: 1.5%;">';
            echo '<h6 style="color: #fff ;font-family: Arial Black;margin-left: 1.5%;">' . $row_adm['NOME_ADM'] . '</h6></a></center>';       
            }
          ?>