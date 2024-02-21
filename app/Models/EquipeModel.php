<?php
// EquipesModel.php

class EquipesModel {
    private $equipes;

    public function __construct() {
        // Inicializa o array de equipes com base nos dados fornecidos
        $this->equipes = array(
            array("lider" => "Toto Wolff", "nome" => "Mercedes", "pais" => "Reino Unido", "patrocinadores" => "Petronas, INEOS", "pilotos" => "Valtteri Bottas"),
            array("lider" => "Christian Horner", "nome" => "Red Bull Racing", "pais" => "Reino Unido", "patrocinadores" => "Red Bull, Honda", "pilotos" => "Sergio Perez"),
            array("lider" => "Mattia Binotto", "nome" => "Scuderia Ferrari", "pais" => "Itália", "patrocinadores" => "Mission Winnow, UPS", "pilotos" => "Carlos Sainz"),
            array("lider" => "Andreas Seidl", "nome" => "McLaren Racing", "pais" => "Reino Unido", "patrocinadores" => "McLaren, British American Tobacco", "pilotos" => "Daniel Ricciardo"),
            array("lider" => "Laurent Rossi", "nome" => "Alpine F1 Team", "pais" => "França", "patrocinadores" => "Alpine, BWT", "pilotos" => "Esteban Ocon"),
        );
    }

    public function listarEquipes() {
        return $this->equipes;
    }

    public function adicionarEquipe($lider, $nome, $pais, $patrocinadores, $pilotos) {
        // Adiciona uma nova equipe ao array de equipes
        $this->equipes[] = array("lider" => $lider, "nome" => $nome, "pais" => $pais, "patrocinadores" => $patrocinadores, "pilotos" => $pilotos);
    }

    public function excluirEquipe($indice) {
        // Remove a equipe com o índice especificado do array
        unset($this->equipes[$indice]);
    }

    public function atualizarEquipe($indice, $novosDados) {
        // Atualiza os dados da equipe com o índice especificado
        $this->equipes[$indice] = $novosDados;
    }
}
?>
