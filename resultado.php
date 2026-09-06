<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <h2>Resultados</h2>


    <form action="controller.php" method="post">
    
        <label for="total">Valor Total s/ desconto: </label>
        <input type="text" id="total" name="total" readonly required 
         value="<?php echo number_format($op1->calcularValorTotal(), 2, ',', '.'); ?>">
        <br>
        <br>
        <label for="desc.">Valor Total c/ desconto: </label>
        <input type="text" id="desc." name="desc." readonly required 
         value="<?php echo number_format(($op1->calcularValorTotal() - $op1->aplicarDesconto()), 2, ',', '.'); ?>">

    </form>
<br>
<br>
    <?php
    if ($op1->EstoqueBaixo() == true) {
        echo "<strong><i>⚠ ALERTA: O estoque deste produto está baixo!👀</i></strong>";
    }
    ?>

</body>
</html>

