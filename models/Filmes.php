<?php
require_once __DIR__ . "/../config/Database.php";

class Filmes
{
    private int $id;
    private string $nome;
    private string $tema;
    private int $duracao;
    private PDO $conexao;

    public function __construct(string $nome = "", string $tema = "", int $duracao = 0)
    {
        $this->nome = $nome;
        $this->tema = $tema;
        $this->duracao = $duracao;
        $database = new Database();
        $this->conexao = $database->conectar();
    }

    public function salvar()
    {
        $sql = "INSERT INTO filmes (nome, tema, duracao)
                VALUES (:nome, :tema, :duracao)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":tema", $this->tema);
        $stmt->bindParam(":duracao", $this->duracao);
        return $stmt->execute();
    }

    public function listar(): array{
        $sql = "SELECT id, nome, tema, duracao
                FROM filmes ORDER BY id DESC";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}