<?php

class Operacao {
    // Atributos (Propriedades Privadas)
    private $num1;
    private $num2;

    // //Métodos ACESSORES = GET -> PEGAR; SET -> EDITAR
    public function getNum1() 
    {
    return $this->num1;
    }

    public function getNum2() 
    {
    return $this->num2;
    }

    public function setNum1(float $num1)
    {
    $this->num1 = $num1;
    }

    public function setNum2(float $num2)
    {
    $this->num2 = $num2;
    }

    // Método (Ação) para somar
    public function somar() {
        return $this->num1 + $this->num2;
    }

    // Método (Ação) para subtrair
    public function subtrair() {
        return $this->num1 - $this->num2;
    }

    // Método (Ação) para multiplicar
    public function multiplicar() {
        return $this->num1 * $this->num2;
    }

    // Método (Ação) para dividir
    public function dividir() {
        return $this->num1 / $this->num2;
    }

    // Método (Ação) para exponenciar
    public function exponenciar() {
        return $this->num1 ** $this->num2;
    }
}
?>