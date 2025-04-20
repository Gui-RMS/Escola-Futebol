<?php
header('Content-Type: text/html; charset=utf-8');
$dbnome = "Unidos";
$conexao= mysqli_connect('localhost','root','') or die("Erro de conexão");
$criadb= mysqli_query($conexao, "CREATE DATABASE if not exists $dbnome  CHARSET utf8 COLLATE utf8_unicode_ci;");
$abre=mysqli_query ($conexao, "USE $dbnome"); 

$table = "CREATE TABLE if not exists $Aluno (
  
		.Nome VARCHAR(50),
  
		for ($Cont = 0; $Cont <= $NumFases; $Cont++){
	
		.Fase VARCHAR(50),
		.Tempo VARCHAR(50)
  
		}
)";
  $tables = [$table];

  $errors = [];
  
mysqli_close($conexao);

?>