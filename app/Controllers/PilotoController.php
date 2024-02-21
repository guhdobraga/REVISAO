<?php
// PilotoController.php

class PilotoController {
    private $pilotoModel;

    public function __construct() {
        // Inicializa o modelo de piloto
        $this->pilotoModel = new PilotoModel();
    }

    public function adicionarPiloto($nome, $idade, $peso, $pais, $equipe) {
        // Adiciona um novo piloto
        $this->pilotoModel->adicionarPiloto($nome, $idade, $peso, $pais, $equipe);
    }

    public function listarPilotos() {
        // Lista os pilotos
        return $this->pilotoModel->listarPilotos();
    }

    public function excluirPiloto($indice) {
        // Exclui um piloto
        $this->pilotoModel->excluirPiloto($indice);
    }

    public function atualizarPiloto($indice, $novosDados) {
        // Atualiza um piloto
        $this->pilotoModel->atualizarPiloto($indice, $novosDados);
    }
}
?>
