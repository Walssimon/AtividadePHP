<?php
    class Conta
    {
        var $agencia;
        var $codigo;
        var $dataDeInscricao;
        var $titular;
        var $senha;
        var $saldo;
        var $cancelada;

    function retirar($quantia){
        if ($quantia > 0){
            $this -> saldo -= $quantia;

        }
    }

    function depositar($quantia){
        if($quantia > 0){
            $this -> saldo += $quantia;

        }
    }
    function obterSaldo(){
        return $this -> saldo;
    }

    function __construct( $agencia, $codigo, $dataDeInscricao, $titular, $senha, $saldo, $cancelada)
    {
        $this -> agencia = $agencia;
        $this -> codigo = $codigo;
        $this -> dataDeInscricao= $dataDeInscricao;
        $this ->titular = $titular;
        $this ->senha = $senha;
        $this ->saldo = $saldo;
        $this ->cancelada = $cancelada;
        
        $this ->depositar ($saldo);
        $this ->cancelada = false; 
    }
    function __destruct()
    {
        echo "<br> Objeto Conta {$this -> codigo} de {$this -> titular -> nome} Finalizada ... <br>";      
    }
}
    
?>