<?php
require_once __DIR__."/controllers/CadastroController.php";

$acao = $_GET["acao"] ?? "formulario";

if($acao === "cadastrar"){
    $controller = new CadastroController();
    $resultado = $controller->cadastrar();
    require_once __DIR__."/views/mensagem.php";
}else{
    require_once __DIR__."/views/form.php";
}
?>