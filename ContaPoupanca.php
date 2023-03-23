<?php 
class ContaPoupanca extends Conta{
var $aniversario;

function __construct($agencia, $codigo, $dataDeInscricao, $titular, $senha, $saldo, $cancelada,$aniversario)
{
 parent:: __construct($agencia, $codigo, $dataDeInscricao, $titular, $senha, $saldo, $cancelada,$aniversario);
 $this -> aniversario = $aniversario;   
}

function Retirar($quantia){

    if ($this ->saldo >= $quantia)
    {
        parent:: retirar($quantia);
        
    }
    else {
        echo "<br>Retirada não permitida ...";
         return false;
    }
    return true;
}
}

?>