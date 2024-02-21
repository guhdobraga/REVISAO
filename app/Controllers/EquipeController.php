<?php
// EquipesController.php

class EquipesController {
    private $equipesModel;

    public function __construct() {
        // Inicializa o modelo de equipes
        $this->equipesModel = new EquipesModel();
    }

    public function adicionarEquipe($lider, $nome, $pais, $patrocinadores, $pilotos) {
        // Adiciona uma nova equipe
        $this->equipesModel->adicionarEquipe($lider, $nome, $pais, $patrocinadores, $pilotos);
    }

    public function listarEquipes() {
        // Lista as equipes
        return $this->equipesModel->listarEquipes();
    }

    public function excluirEquipe($indice) {
        // Exclui uma equipe
        $this->equipesModel->excluirEquipe($indice);
    }

    public function atualizarEquipe($indice, $novosDados) {
        // Atualiza uma equipe
        $this->equipesModel->atualizarEquipe($indice, $novosDados);
    }
}
?>
