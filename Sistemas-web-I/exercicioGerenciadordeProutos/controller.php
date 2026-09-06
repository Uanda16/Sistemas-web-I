<?php

require_once 'Produto.php';

$op1 = new Produto();

$op1-> setProd($_POST['prod']);
$op1-> setprecoUni($_POST['precoUni']);
$op1-> setqtnd($_POST['qtnd']);
$op1-> setdesc($_POST['desc']);
$op1-> setEstoque($_POST['estoque']);

require_once 'resultado.php';

?>