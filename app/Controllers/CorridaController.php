<?php
// CorridaController.php

class CorridaController {
    private $corridaModel;

    public function __construct() {
        // Inicializa o modelo de corrida
        $this->corridaModel = new CorridaModel();
    }

    public function adicionarCorrida($pista, $data, $pilotos, $carros, $equipe) {
        // Adiciona um novo corrida
        $this->corridaModel->adicionarCorrida($pista, $data, $pilotos, $carros, $equipe);
    }

    public function listarCorridas() {
        // Lista os corridas
        return $this->corridaModel->listarCorridas();
    }

    public function excluirCorrida($indice) {
        // Exclui um corrida
        $this->corridaModel->excluirCorrida($indice);
    }

    public function atualizarCorrida($indice, $novosDados) {
        // Atualiza um corrida
        $this->corridaModel->atualizarCorrida($indice, $novosDados);
    }
}
?>