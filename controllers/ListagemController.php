<?php
require_once __DIR__ . "/../models/Filmes.php";

class ListarController {
    public function listagem(): array {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return [
                "sucesso" => false,
                "mensagem" => "Requisição inválida."
            ];
        }

        try {
        

        } catch (PDOException $erro) {

        }
    }
}