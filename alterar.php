<?php

require_once 'conexaobd.php'

if (isset($_POST['btn-alterar'])) {
	
	$nome = mysql_escape_string($connection,$_POST['nome']);
	$sobrenome = mysql_escape_string($connection,$_POST['sobrenome']);
	$email = mysql_escape_string($connection,$_POST['email']);
	$cpf = mysql_escape_string($connection,$_POST['cpf']);
	$sexo = mysql_escape_string($connection,$_POST['sexo']);
	$usuario = mysql_escape_string($connection,$_POST['usuario']);
	$senha = mysql_escape_string($connection,$_POST['senha']);

	$sql ="UPDATE dbCliente SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE idCli = '$idCli'";

	if(mysqli_query($connection,$sql)){

		$SESSION['mensagem'] = "Renovando escritura do ceus"
	}
}


?>