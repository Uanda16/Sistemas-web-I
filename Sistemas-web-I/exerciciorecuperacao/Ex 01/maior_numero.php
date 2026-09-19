<?php

$n1 = 3;
$n2 = 2;
$n3 = 1;

if ($n1 > $n2 && $n1 > $n3){
    echo "O primeiro número digitado é maior";
}elseif($n2 > $n1 && $n2 > $n3){
    echo "O segundo número digitado é o maior";
}elseif($n3 > $n1 && $n3 > $n2){
    echo "O terceiro número digitado é o maior";
}
