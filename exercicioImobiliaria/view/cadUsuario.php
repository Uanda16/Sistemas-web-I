<div class="container">
    <form name="cadUsuario" id="cadUsuario" action="" method="post">
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Usuários</span>
            </div>
            <div class="card-body">
                <input type="hidden" name="id" id="id" value="<?php echo isset($usuario) ? $usuario->getId() : ''; ?>" />

                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Login:</label>
                    <input type="text" class="form-control col-sm-8" name="login" id="login" 
                           value="<?php echo isset($usuario) ? $usuario->getLogin() : '' ?>" />
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Senha:</label>
                    <input type="password" class="form-control col-sm-8" name="senha1" id="senha1" 
                           value="<?php echo isset($usuario) ? $usuario->getSenha() : '' ?>" />
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Confirmação:</label>
                    <input type="password" class="form-control col-sm-8" name="senha2" id="senha2" 
                           value="<?php echo isset($usuario) ? $usuario->getSenha() : '' ?>" />
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Permissão:</label>
                    <select class="form-control col-sm-8" name="permissao" id="permissao">
                        <option value="0"></option>
                        <option value="A" <?php echo isset($usuario) && $usuario->getPermissao() == 'A' ? 'selected' : '' ?>>Administrador</option>
                        <option value="C" <?php echo isset($usuario) && $usuario->getPermissao() == 'C' ? 'selected' : '' ?>>Comum</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn-solid theme-success" name="btnSalvar" id="btnSalvar" value="Enviar" />
            </div>
        </div>
    </form>
</div>

<?php
if (isset($_POST['btnSalvar'])) {
    call_user_func(array('UsuarioController', 'salvar'));
    header('Location: index.php?action=listar');
}
?>
