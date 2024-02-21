<?php
// PistaController.php

class PistaController {
    private $pistaModel;

    public function __construct() {
        // Inicializa o modelo de pista
        $this->pistaModel = new PistaModel();
    }

    public function adicionarPista($cidade, $distancia, $pais, $idioma) {
        // Adiciona uma nova pista
        $this->pistaModel->adicionarPista($cidade, $distancia, $pais, $idioma);
    }

    public function listarPistas() {
        // Lista as pistas
        return $this->pistaModel->listarPistas();
    }

    public function excluirPista($indice) {
        // Exclui uma pista
        $this->pistaModel->excluirPista($indice);
    }

    public function atualizarPista($indice, $novosDados) {
        // Atualiza uma pista
        $this->pistaModel->atualizarPista($indice, $novosDados);
    }
}
?>
