<?php
require_once __DIR__ . "/../config/Database.php";

class Filmes
{
    private int $id;
    private string $nome;
    private string $tema;
    private int $duracao;
    private string $classificacao;
    private PDO $conexao;

    public function __construct(string $nome = "", string $tema = "", int $duracao = 0, string $classificacao = "")
    {
        $this->nome = $nome;
        $this->tema = $tema;
        $this->duracao = $duracao;
        $this->classificacao = $classificacao;
        $database = new Database();
        $this->conexao = $database->conectar();
    }

    public function salvar()
    {
        $sql = "INSERT INTO filmes (nome, tema, duracao, classificacao)
                VALUES (:nome, :tema, :duracao, :classificacao)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":tema", $this->tema);
        $stmt->bindParam(":duracao", $this->duracao);
        $stmt->bindParam(":classificacao", $this->classificacao);
        return $stmt->execute();
    }

    public function listar(): array
    {
        $sql = "SELECT id, nome, tema, duracao, classificacao
                FROM filmes ORDER BY id DESC";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM filmes WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id)
    {
        $sql = "UPDATE filmes SET nome = :nome, tema = :tema, duracao = :duracao, classificacao = :classificacao WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":tema", $this->tema);
        $stmt->bindParam(":duracao", $this->duracao);
        $stmt->bindParam(":classificacao", $this->classificacao);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}