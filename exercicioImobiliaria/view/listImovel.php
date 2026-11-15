<h1 class="mt-4">Imóveis</h1>
<hr>
<div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Foto</th>
                <th><a href="index.php?action=cadImovel" class="btn-solid theme-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $imoveis = call_user_func(array('ImovelController', 'listar'));
            if (isset($imoveis) && !empty($imoveis)) {
                foreach ($imoveis as $imovel) {
                    ?>
                    <tr>
                        <td><?php echo $imovel->getDescricao(); ?></td>
                        <td><?php echo $imovel->getTipo(); ?></td>
                        <td>R$ <?php echo number_format($imovel->getValor(), 2, ',', '.'); ?></td>
                        <td><?php echo $imovel->getFoto(); ?></td>
                        <td>
                            <a href="index.php?action=editarImovel&id=<?php echo $imovel->getId(); ?>" class="btn-solid theme-primary btn-sm">Editar</a>
                            <a href="index.php?action=excluirImovel&id=<?php echo $imovel->getId(); ?>" class="btn-solid theme-danger btn-sm">Excluir</a>
                        </td>

                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
