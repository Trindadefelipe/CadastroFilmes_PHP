<?php
require_once __DIR__ . "/../models/Filmes.php";

class ExclusaoController
{
    public function excluir($id)
    {
        $filme = new Filmes();
        return $filme->excluir($id);
    }
}