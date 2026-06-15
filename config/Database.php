<?php
class Database
{
    private $usuario = "root";
    private $senha = "";
    private $dbname = "cadastro_filmes";
    private $host = "localhost";
    private $porta = 3306;
    private ?PDO $conexao = null;

    public function conectar(): PDO
    {
        if ($this->conexao === null) {
            try {
               $this->conexao = new PDO(
                    "mysql:host=$this->host;port=$this->porta;dbname=$this->dbname;charset=utf8mb4",
                    $this->usuario,
                    $this->senha
                );
            } catch (PDOException $erro) {
                throw $erro;
            }
        }
        return $this->conexao;
    }
}