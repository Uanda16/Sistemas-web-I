<?php

require_once 'Operacao.php';

$op1 = new Operacao();

$op1-> setNum1($_POST['num1']);
$op1-> setNum2($_POST['num2']);
if($_POST['operacao'] == 1){
    echo $op1 -> somar();
}else if ($_POST['operacao'] == 2){
    echo $op1 -> subtrair();
}else if ($_POST['operacao'] == 3){
    echo $op1 -> multiplicar();
}else if ($_POST['operacao'] == 4){
    echo $op1 -> dividir();
}else if ($_POST['operacao'] == 5){
    echo $op1 -> exponenciar();
}




?>