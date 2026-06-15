<?php
require_once __DIR__ . "/../models/Filmes.php";

class CadastroController {
    public function cadastrar(): array {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return [
                "sucesso" => false,
                "mensagem" => "Requisição inválida."
            ];
        }

        $nome = trim($_POST["nome"] ?? "");
        $tema = trim($_POST["tema"] ?? "");
        $duracao = trim($_POST["duracao"] ?? "");

        if (empty($nome) || empty($tema) || empty($duracao)) {
            return [
                "sucesso" => false,
                "mensagem" => "Todos os campos devem ser preenchidos."
            ];
        }

        try {
            $filmes = new Filmes($nome, $tema, $duracao);
            $filmes->salvar();

            return [
                "sucesso" => true,
                "mensagem" => "Filme cadastrado com sucesso!"
            ];

        } catch (PDOException $erro) {
            return [
                "sucesso" => false,
                "mensagem" => "Erro ao cadastrar filme. {$erro->getMessage()}"
            ];
        }
    }
}