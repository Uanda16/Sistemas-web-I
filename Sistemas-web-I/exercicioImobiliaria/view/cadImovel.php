<div class="container">
    <form name="cadImovel" id="cadImovel" action="" method="post">
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Imóveis</span>
            </div>
            <div class="card-body">
                <input type="hidden" name="id" id="id" value="<?php echo isset($imovel) ? $imovel->getId() : ''; ?>" />

                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Descrição:</label>
                    <input type="text" class="form-control col-sm-8" name="descricao" id="descricao" 
                           value="<?php echo isset($imovel) ? $imovel->getDescricao() : '' ?>" />
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Foto:</label>
                    <input type="text" class="form-control col-sm-8" name="foto" id="foto" 
                           value="<?php echo isset($imovel) ? $imovel->getFoto() : '' ?>" />
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Valor:</label>
                    <input type="number" step="0.01" class="form-control col-sm-8" name="valor" id="valor" 
                           value="<?php echo isset($imovel) ? $imovel->getValor() : '' ?>" />
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Tipo:</label>
                    <select class="form-control col-sm-8" name="tipo" id="tipo">
                        <option value="0"></option>
                        <option value="C" <?php echo isset($imovel) && $imovel->getTipo() == 'C' ? 'selected' : '' ?>>Casa</option>
                        <option value="A" <?php echo isset($imovel) && $imovel->getTipo() == 'A' ? 'selected' : '' ?>>Apartamento</option>
                        <option value="T" <?php echo isset($imovel) && $imovel->getTipo() == 'T' ? 'selected' : '' ?>>Terreno</option>
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
    call_user_func(array('ImovelController', 'salvar'));
    header('Location: index.php?action=listarImovel');
}
?>
