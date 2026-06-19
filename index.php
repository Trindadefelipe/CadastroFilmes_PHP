<?php
require_once __DIR__."/controllers/CadastroController.php";
require_once __DIR__."/controllers/ListagemController.php";

$acao = $_GET["acao"] ?? "formulario";

if($acao === "cadastrar"){
    $controller = new CadastroController();
    $resultado = $controller->cadastrar();
    require_once __DIR__."/views/mensagem.php";
}else if($acao === "listar"){
    $controller = new ListagemController();
    $filmes = $controller->listagem();
    require_once __DIR__."/views/listar.php";
}else{
    require_once __DIR__."/views/form.php";
}
?>