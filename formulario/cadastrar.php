<?php
include('conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["password"];
$nomeusuario = $_POST["nomeusuario"];
$datanascimento = $_POST["data_nascimento"];
$cpf = $_POST["cpf"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];

$cadastrar_usuario = "INSERT INTO usuario (nome ,email ,password ,nome_de_usuario ,data_de_nascimento ,cpf ,cidade ,estado ,endereco) VALUES ('$nome' ,'$email' ,'$senha' ,'$nomeusuario' ,'$datanascimento' ,'$cpf' ,'$cidade' ,'$estado' ,'$endereco')";

if(mysqli_query($conect ,$cadastrar_usuario)){
   echo "<h1>Novo cadastro efetuado</h1>";
}   else{
   echo "error : " . $cadastrar_usuario . "<br>" . mysqli_error($conect);
}
   mysqli_close($conect);

?>
