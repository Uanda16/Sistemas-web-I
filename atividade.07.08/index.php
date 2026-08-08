<?php

require_once 'Operacao.php';

//Instanciação de um novo objeto
$minhaCalculadora = new Operacao();

//Utilizar o método Set no objeto criado
$minhaCalculadora -> setValor1(4.0);
$minhaCalculadora -> setValor2(2.0);

//Chamar todos os 5 métodos e exibir 
echo "<p>DADOS -> Primeiro valor digitado: {$minhaCalculadora->getValor1()} | Segundo valor digitado: {$minhaCalculadora->getValor2()}</p>";

echo "<p>A soma de " . $minhaCalculadora->getValor1() . " com " . $minhaCalculadora->getValor2() . " é de: " . $minhaCalculadora->somar() . "</p><br>";
echo "<p>A subtração de " . $minhaCalculadora->getValor1() . " com " . $minhaCalculadora->getValor2() . " é de: " . $minhaCalculadora->subtrair() . "</p><br>";
echo "<p>A multiplicação de " . $minhaCalculadora->getValor1() . " com " . $minhaCalculadora->getValor2() . " é de: " . $minhaCalculadora->multiplicar() . "</p><br>";
echo "<p>A divisão de " . $minhaCalculadora->getValor1() . " com " . $minhaCalculadora->getValor2() . " é de: " . $minhaCalculadora->dividir() . "</p><br>";
echo "<p>A exponenciação de " . $minhaCalculadora->getValor1() . " com " . $minhaCalculadora->getValor2() . " é de: " . $minhaCalculadora->exponenciar() . "</p><br>";

?>