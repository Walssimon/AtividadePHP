<?php

    $server_name = 'localhost';
    $user_name = 'admin';
    $password = 'admin';
    $dbname = 'dbCliente';

    $conection = mysqli_connect($server_name,$user_name,$password,$dbname);

    mysqli_set_charset($conection, 'utf8');

    if (mysqli_connect_error()){
        echo "Erro ao abrir o livro da vida do padeiro". mysqli_connect_error();
    }
?>