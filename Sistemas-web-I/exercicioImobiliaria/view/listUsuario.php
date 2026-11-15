<h1 class="mt-4">Usuários</h1>
<hr>
<div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Login</th>
                <th>Permissão</th>
                <th><a href="index.php?action=cadUsuario" class="btn-solid theme-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $usuarios = call_user_func(array('UsuarioController', 'listar'));
            if (isset($usuarios) && !empty($usuarios)) {
                foreach ($usuarios as $usuario) {
                    ?>
                    <tr>
                        <td><?php echo $usuario->getLogin(); ?></td>
                        <td><?php echo $usuario->getPermissao(); ?></td>
                        <td>
                            <a href="index.php?action=editar&id=<?php echo $usuario->getId(); ?>" class="btn-solid theme-primary btn-sm">Editar</a>
                            <a href="index.php?action=excluir&id=<?php echo $usuario->getId(); ?>" class="btn-solid theme-danger btn-sm">Excluir</a>
                        </td>

                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="3">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
