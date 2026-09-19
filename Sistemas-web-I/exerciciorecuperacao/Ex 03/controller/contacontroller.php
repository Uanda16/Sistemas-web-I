<?php

require_once "../model/ContaModel.php";

$contas = [];

$contas[] = new ContaModel("Pietro", 1500);
$contas[] = new ContaModel("Maria", 2500);
$contas[] = new ContaModel("Uanda", 3200);

require_once "../view/contas.php";