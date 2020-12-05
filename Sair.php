<?php
session_start();
include_once "conexao.php";

  if(empty($_SESSION['adm']))
  {
    echo ('<meta http-equiv="refresh"content=0;"index.php">');
  }
  else
  {
  	if (empty($_SESSION['sair'])) 
  	{
  		echo ('<meta http-equiv="refresh"content=0;"admperfil.php">');
  	}
  	else
  	{
	  	$_SESSION['adm'] = empty($_SESSION['adm']);
	    $_SESSION['frase'] = empty($_SESSION['frase']);
	    $_SESSION['filtro'] = empty($_SESSION['filtro']);
	    $_SESSION['codlogin'] = empty($_SESSION['codlogin']);
	    $_SESSION['sair'] = empty($_SESSION['sair']);
	    echo ('<meta http-equiv="refresh"content=0;"index.php">');   
  	}

  }
?>