<?php

// video aula de apoio: https://youtu.be/Lkkp16pfn8I?si=DtyZgHzaOtvdqbR3

class Operacao {
    // Atributos (Propriedades Privadas)
    private $valor1;
    private $valor2;

    // //Métodos ACESSORES = GET -> PEGAR; SET -> EDITAR
    public function getValor1() 
    {
    return $this->valor1;
    }

    public function getValor2() 
    {
    return $this->valor2;
    }

    public function setValor1(float $valor1)
    {
    $this->valor1 = $valor1;
    }

    public function setValor2(float $valor2)
    {
    $this->valor2 = $valor2;
    }

    // Método (Ação) para somar
    public function somar() {
        return $this->valor1 + $this->valor2;
    }

    // Método (Ação) para subtrair
    public function subtrair() {
        return $this->valor1 - $this->valor2;
    }

    // Método (Ação) para multiplicar
    public function multiplicar() {
        return $this->valor1 * $this->valor2;
    }

    // Método (Ação) para dividir
    public function dividir() {
        return $this->valor1 / $this->valor2;
    }

    // Método (Ação) para exponenciar
    public function exponenciar() {
        return $this->valor1 ** $this->valor2;
    }
}
?>