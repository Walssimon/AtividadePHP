<?php
include_once 'inicio.html';
include_once 'php_action/conexaobd.php';
?>

<div> 
    <h3> Nome: </h3>
    <input type="text" name="nome" id="nome">
    <label for="nome">Nome</label> 
</div> 

<div> 
    <h3> Sobrenome: </h3>
    <input type="text" name="sobrenome" id="sobrenome">
    <label for="sobrenome">Sobrenome</label> 
</div> 

<div> 
    <h3> E-mail: </h3>
    <input type="text" name="email" id="email">
    <label for="email">Email</label> 
</div> 

<div> 
    <h3> CPF: </h3>
    <input type="text" name="cpf" id="cpf">
    <label for="cpf">CPF</label> 
</div> 

<div> 
    <h3> Sexo: </h3>
    <input type="text" name="sexo" id="sexo">
    <label for="sexo">Sexo</label> 
</div> 

<div> 
    <h3> Usuario: </h3>
    <input type="text" name="usuario" id="usuario">
    <label for="usuario">Usuario</label> 
</div> 

<div> 
    <h3> Senha: </h3>
    <input type="password" name="senha" id="senha">
    <label for="senha">Senha</label> 
</div> 

<button type="submit" name="btn-cadastrar">Cadastrar</button>

