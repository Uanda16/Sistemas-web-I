<?php
require_once 'controller/UsuarioController.php';
require_once 'controller/ImovelController.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliária</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar bg-1 border-bottom mb-4">
    <div class="container-fluid px-3 justify-content-between">
        <a class="navbar-brand fw-bold" href="index.php">Imobiliária</a>
        <details class="position-relative">
            <summary class="btn-outline theme-secondary btn-sm" style="list-style: none;">
                ☰ Menu
            </summary>
            <div class="menu show" style="top: 100%; right: 0; left: auto; margin-top: 4px; z-index: 1000;">
                <span class="menu-header">Usuários</span>
                <a class="menu-item" href="index.php?action=cadUsuario">Cadastrar</a>
                <a class="menu-item" href="index.php?action=listar">Listar</a>
                <hr class="menu-divider">
                <span class="menu-header">Imóveis</span>
                <a class="menu-item" href="index.php?action=cadImovel">Cadastrar</a>
                <a class="menu-item" href="index.php?action=listarImovel">Listar</a>
            </div>
        </details>
    </div>
</nav>





<div class="container">
<?php
if (isset($_GET['action'])) {
    // Ações de Usuário
    if ($_GET['action'] == 'cadUsuario') {
        require_once 'view/cadUsuario.php';
    }
    if ($_GET['action'] == 'editar') {
        $usuario = call_user_func(array('UsuarioController', 'editar'), $_GET['id']);
        require_once 'view/cadUsuario.php';
    }
    if ($_GET['action'] == 'listar') {
        require_once 'view/listUsuario.php';
    }
    if ($_GET['action'] == 'excluir') {
        $usuario = call_user_func(array('UsuarioController', 'excluir'), $_GET['id']);
        require_once 'view/listUsuario.php';
    }

    // Ações de Imóvel
    if ($_GET['action'] == 'cadImovel') {
        require_once 'view/cadImovel.php';
    }
    if ($_GET['action'] == 'listarImovel') {
        require_once 'view/listImovel.php';
    }
    if ($_GET['action'] == 'editarImovel') {
        $imovel = call_user_func(array('ImovelController', 'editar'), $_GET['id']);
        require_once 'view/cadImovel.php';
    }
    if ($_GET['action'] == 'excluirImovel') {
        $imovel = call_user_func(array('ImovelController', 'excluir'), $_GET['id']);
        require_once 'view/listImovel.php';
    }
} else {
    require_once 'view/listImovel.php';
}
?>
</div>
</body>
</html>
