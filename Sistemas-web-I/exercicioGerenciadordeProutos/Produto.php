<?php

class Produto {

    private $prod;
    private $precoUni;
    private $qtnd;
    private $desc;

    public function getProd()
    {
        return $this ->prod;
    }
    public function getPrecoUni()
    {
        return $this ->precoUni;
    }
    public function getQtnd()
    {
        return $this ->qtnd;
    }
    public function getDesc()
    {
        return $this ->desc;
    }
    public function getEstoque()
    {
        return $this ->estoque;
    }


    public function setProd($prod)
    {
        $this->prod = $prod;
    }
    public function setPrecoUni($precoUni)
    {
        $this ->precoUni = $precoUni;
    }
    public function setQtnd($qtnd)
    {
        $this ->qtnd = $qtnd;
    }
    public function setDesc($desc)
    {
        $this ->desc = $desc;
    }
    public function setEstoque($estoque)
    {
        $this ->estoque = $estoque;
    }


    public function calcularValorTotal() {
        return $this->qtnd * $this->precoUni;
    }

    public function aplicarDesconto() {
        return ($this->calcularValorTotal() * $this-> desc) / 100;
    }

    public function EstoqueBaixo() {
        if ($this->estoque < 5) {
            return true;
        } else {
            return false;
        }
    }

}