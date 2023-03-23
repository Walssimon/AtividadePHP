<?php
include_once 'Pessoa.php';
include_once 'Conta.php';

$carlos= new Pessoa;
$carlos->codigo = 10;
$carlos->nome = "Carlos da Silva";
$carlos->altura = 1.85;
$carlos->idade = 25;
$carlos->nascimento = '10/04/1976';
$carlos->escolaridade = "Ensino Médio";


echo "Matriculando o objeto $carlos ->Nome : <br>";
echo "{$carlos->nome} é formado em: {$carlos -> escolaridade} <br>";
echo "{$carlos->nome} possui {$carlos -> idade} <br>";

$carlos->envelhecer(1);

echo "{$carlos->nome} possui {$carlos->idade} anos <br>";
$Conta_carlos = new Conta;
$Conta_carlos -> agencia = 6677;
$Conta_carlos -> codigo = "CC.12 35. 56";
$Conta_carlos -> dataDeInscricao = "10/07/02";
$Conta_carlos -> titular = $carlos;
$Conta_carlos -> senha = 9876;
$Conta_carlos -> saldo = 567.89;
$Conta_carlos -> cancelada = false;
echo"<br>";
echo"Manipoulando a conta de: {$conta_carlos->Titular->Nome}<br>";

echo"O saldo atual é R\$ {$conta_carlos->obterSaldo()}<br>";
$conta_carlos->Depositar(20);
echo"O saldo atual é R\$ {$conta_carlos->obterSaldo()}<br>";
$conta_carlos->Retirar(10);
echo"O saldo atual é R\$ {$conta_carlos->obterSaldo()}<br>";
?>