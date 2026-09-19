<?php
$soma = 0;
$i = 1;
while ($i <= 50) {
    if ($i % 2 == 0) {
        $soma += $i;
    }
    $i++;
}
echo "O valor total da soma dos números pares é: " . $soma;
?>