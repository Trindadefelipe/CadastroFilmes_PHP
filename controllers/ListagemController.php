<?php
require_once __DIR__ . "/../models/Filmes.php";

class ListagemController {
    public function listagem() : array{
        $filmes = new Filmes();
        return $filmes->listar();
    }
}