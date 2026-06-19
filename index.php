<?php
require_once __DIR__."/controllers/CadastroController.php";
require_once __DIR__."/controllers/ListagemController.php";
require_once __DIR__."/controllers/EdicaoController.php";
require_once __DIR__."/controllers/ExclusaoController.php";

$acao = $_GET["acao"] ?? "formulario";

if($acao === "cadastrar"){
    $controller = new CadastroController();
    $resultado = $controller->cadastrar();
    require_once __DIR__."/views/mensagem.php";
}else if($acao === "listar"){
    $controller = new ListagemController();
    $filmes = $controller->listagem();
    require_once __DIR__."/views/listar.php";
}else if($acao === "editar"){
    $controller = new EdicaoController();
    $id = $_GET["id"] ?? "";
    $filme = $controller->buscar($id);
    require_once __DIR__."/views/editar.php";
}else if($acao === "atualizar"){
    $controller = new EdicaoController();
    $resultado = $controller->edicao();
    require_once __DIR__."/views/mensagem.php";
}else if($acao === "excluir"){
    $controller = new ExclusaoController();
    $id = $_GET["id"] ?? "";
    $controller->excluir($id);
    header("Location: index.php?acao=listar&msg=excluido");
    exit;
}else{
    require_once __DIR__."/views/form.php";
}
?>