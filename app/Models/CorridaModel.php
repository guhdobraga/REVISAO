<?php
// CorridaModel.php

// Inclui os controllers ou models relevantes que contêm os arrays necessários
include_once 'C:\xampp\htdocs\revisão-array\app\Models\PistaModel.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Models\PilotoModel.php';
include_once 'C:\xampp\htdocs\revisão-array\app\Models\EquipeModel.php';



class CorridaModel {
    private $corridas;

    public function __construct() {
        // Cria instâncias dos controllers ou models necessários
        $pistaModel = new PistaModel();
        $pilotoModel = new PilotoModel();
        $equipesModel = new EquipesModel();

        // Obtém os dados dos models
        $pistas = $pistaModel->listarPistas();
        $pilotos = $pilotoModel->listarPilotos();
        $equipes = $equipesModel->listarEquipes();

        // Inicializa o array de corridas
        $this->corridas = array();

        // Se houver pistas, pilotos e equipes, cria uma corrida de exempl
    }

    public function adicionarCorrida($pista, $data, $pilotos, $carros, $equipe) {
        // Adiciona um novo corrida ao array
        $this->corridas[] = array("pista" => $pista, "data" => $data, "pilotos" => $pilotos, "carros" => $carros, "equipe" => $equipe);
    }

    public function listarCorridas() {
        return $this->corridas;
    }

    public function excluirCorrida($indice) {
        // Remove o corrida com o índice especificado do array
        unset($this->corridas[$indice]);
    }

    public function atualizarCorrida($indice, $novosDados) {
        // Atualiza os dados do corrida com o índice especificado
        $this->corridas[$indice] = $novosDados;
    }
}

?>
