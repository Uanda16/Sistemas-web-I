<?php

class ContaModel
{
    private $titular;
    private $saldo = 0;

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
}
