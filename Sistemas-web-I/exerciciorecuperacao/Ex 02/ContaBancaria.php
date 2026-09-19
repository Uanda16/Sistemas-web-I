<?php

class ContaBancaria{
    private $titular;
    private $saldo = 0;

    public function getTitular(){
        return $this -> $titular;
    }
    public function setTitular($titular){
        $this -> titular = $titular;
    }

     public function getSaldo(){
        return $this -> saldo;
    }
    public function setSaldo($saldo){
        $this -> saldo = $saldo;
    }

    public function depositar($valor){
        return $this -> saldo += $valor;
    }

    public function consultarSaldo(){
        return $this -> saldo;
    }

   public function sacar($valor) {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente\n";
        }
    }
}

