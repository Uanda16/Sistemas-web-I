<?php

require_once 'ContaBancaria.php';


$conta1 = new ContaBancaria();

echo "Conta 1 - Saldo inicial: " . $conta1->saldo;
$conta1->depositar(100);
echo "Conta 1 - Saldo após depósito: " . $conta1->saldo;
$conta1->sacar(40);
echo "Conta 1 - Saldo após primeiro saque: " . $conta1->saldo;
$conta1->sacar(80);
echo "Conta 1 - Saldo final: " . $conta1->saldo;


$conta2 = new ContaBancaria();

echo "Conta 2 - Saldo inicial: " . $conta2->saldo;
$conta2->depositar(50);
echo "Conta 2 - Saldo após depósito: " . $conta2->saldo;
$conta2->sacar(30); 
echo "Conta 2 - Saldo após primeiro saque: " . $conta2->saldo;
$conta2->sacar(40);
echo "Conta 2 - Saldo final: " . $conta2->saldo;

?>