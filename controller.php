<?php

require_once 'Model.php';

$op1 = new Aluno();

$op1->setNome($_POST['nome']);
$op1->setNota1($_POST['nota1']);
$op1->setNota2($_POST['nota2']);
$op1->setNota3($_POST['nota3']);
$op1->setFaltas($_POST['faltas']);

echo "<h3>Desempenho do Aluno: " . $op1->getNome() . "</h3>";
echo "<p>Média: " . number_format($op1->calcularMedia(), 1) . "</p>";
echo "<p>Presença: " . number_format($op1->calcularPresenca(), 1) . "%</p>";
echo "<p>Situação: "; 
$op1->mostrarResultado(); 
echo "</p>";

?>