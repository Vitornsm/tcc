<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bd_biblioteca";

try
{
	ini_set('default_charset','UTF-8');

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	$conn->query("SET NAMES utf8");

}
catch(Exception $erro)
{
	echo "Erro  na conexao" . $erro;
}