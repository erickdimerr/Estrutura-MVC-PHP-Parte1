<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/model/Database.php';

class EstudanteModel {
   
    private int $idade;
    private string $nome;
    private $database;

    //getters e setters

    public function __construct()
    {
        $this->database = new Database();
    }

    public function listarModel(): array
    {
        $dadosArray = $this->database->executeSelect("SELECT id, nome, idade FROM estudantes");

        return $dadosArray;
    }

    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO estudantes (nome, idade) values('$nome', '$idade')";
        $this->database->insert($sql);
    }
}