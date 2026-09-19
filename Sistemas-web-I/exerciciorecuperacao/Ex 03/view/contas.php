<!--
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contas Bancárias</title>
</head>

    <body>

        <h1>Lista de Contas Bancárias</h1>

        <table border="1">
            <tr>
                <th>Titular</th>
                <th>Saldo</th>
            </tr>

            <?php
            
            foreach ($contas as $conta) {
                echo "<tr>";
                   
                    echo "<td>" . $conta->getTitular() . "</td>";
                    $saldoFormatado = number_format($conta->getSaldo(), 2, ',', '.');
                    echo "<td>R$ " . $saldoFormatado . "</td>";

                echo "</tr>";
            }

            ?>
            
        </table>

    </body>
</html>
-->

<?php
/** @var ContaModel[] $contas */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contas Bancárias</title>
</head>

<body>

    <h1>Lista de Contas Bancárias</h1>

    <table border="1">
        <tr>
            <th>Titular</th>
            <th>Saldo</th>
        </tr>

        <?php if (isset($contas) && is_array($contas)): ?>
        <?php foreach ($contas as $conta): ?>

            <tr>
                <td>
                    <?= $conta->getTitular(); ?>
                </td>

                <td>
                    R$ <?= number_format($conta->getSaldo(), 2, ',', '.'); ?>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>