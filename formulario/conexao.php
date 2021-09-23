<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bancodedados";
$conect = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Criar a conexao

if(!$conect){
      die("falha de conexão: " . mysqli_connect_error());
  }
  echo "<h1>conexão concluida</h1>";

?>

