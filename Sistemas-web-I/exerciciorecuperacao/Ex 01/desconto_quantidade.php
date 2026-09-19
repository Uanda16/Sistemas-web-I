<?php

$quantidade = 5;

if ($quantidade >= 10){
    echo "20% de desconto";
}elseif($quantidade = 5 && $quantidade <=9){
    echo "10% de desconto";
} elseif($quantidade < 5){
    echo "Sem desconto!";
}
