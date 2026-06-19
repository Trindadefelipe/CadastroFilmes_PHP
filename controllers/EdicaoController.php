<?php
require_once __DIR__ . "/../models/Filmes.php";

class EdicaoController
{
    public function edicao(): array
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return [
                "sucesso" => false,
                "mensagem" => "Requisição inválida."
            ];
        }

        $id = trim($_POST["id"] ?? "");
        $nome = trim($_POST["nome"] ?? "");
        $tema = trim($_POST["tema"] ?? "");
        $duracao = trim($_POST["duracao"] ?? "");
        $classificacao = trim($_POST["classificacao"] ?? "");

        if (empty($id) || empty($nome) || empty($tema) || empty($duracao) || empty($classificacao)) {
            return [
                "sucesso" => false,
                "mensagem" => "Todos os campos devem ser preenchidos."
            ];
        }

        try {
            $filmes = new Filmes($nome, $tema, $duracao, $classificacao);
            $filmes->atualizar($id);

            return [
                "sucesso" => true,
                "mensagem" => "Filme atualizado com sucesso!"
            ];
        } catch (PDOException $erro) {
            return [
                "sucesso" => false,
                "mensagem" => "Erro ao atualizar filme. {$erro->getMessage()}"
            ];
        }
    }
    public function buscar($id)
    {
        $filme = new Filmes();
        return $filme->buscarPorId($id);
    }
}