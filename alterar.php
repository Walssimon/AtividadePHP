<?php

session_start();

require_once 'conexaobd.php';
		
if (isset($_POST['btn-alterar'])) {
	
	$nome = mysqli_escape_string($connection,$_POST['nome']);
	$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
	$email = mysqli_escape_string($connection,$_POST['email']);
	$cpf = mysqli_escape_string($connection,$_POST['cpf']);
	$sexo = mysqli_escape_string($connection,$_POST['sexo']);
	$usuario = mysqli_escape_string($connection,$_POST['usuario']);
	$senha = mysqli_escape_string($connection,$_POST['senha']);

	$sql ="UPDATE dbCliente SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE idCli = '$idCli'";

	if(mysqli_query($connection,$sql)){

		$SESSION['mensagem'] = "Renovando escritura do ceus";

		header('cadastro.php');
	}
	else{
		$_SESSION['mensagem'] = "Você esta desviado";
	}
}


?>