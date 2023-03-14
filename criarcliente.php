<?php 

    session_start();

    require_once 'conexaobd.php';

    if(isset($_POST['btn-cadastrar'])) {
        $nome = mysqli_escape_string($conection,$_POST['nome']);
        $sobrenome = mysqli_escape_string($conection,$_POST['sobrenome']);
        $email = mysqli_escape_string($conection,$_POST['email']);
        $cpf = mysqli_escape_string($conection,$_POST['cpf']);
        $sexo = mysqli_escape_string($conection,$_POST['sexo']);
        $usuario = mysqli_escape_string($conection,$_POST['usuario']);
        $senha = mysqli_escape_string($conection,$_POST['senha']);

        $sql = "INSERT INTO tbCliente(nome,sobrenome,email,cpf,sexo,usuario,senha)VALUES('$nome','$sobrenome','$email','$cpf','$sexo','$usuario','$senha')";

        if(mysqli_query($conection,$sql)){

            $_SESSION['mensagem'] = "Cadastro com Sucesso.";

        }

        else{

            $_SESSION['mensagem'] = "Erro ao cadastro";

        }
    }

?>