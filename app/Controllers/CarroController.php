<?php
// CarroController.php

class CarroController {
    private $carroModel;

    public function __construct() {
        // Inicializa o modelo de carro
        $this->carroModel = new CarroModel();
    }

    public function adicionarCarro($modelo, $cor, $ano_fabricacao, $equipe) {
        // Adiciona um novo carro
        $this->carroModel->adicionarCarro($modelo, $cor, $ano_fabricacao, $equipe);
    }

    public function listarCarros() {
        // Lista os carros
        return $this->carroModel->listarCarros();
    }

    public function excluirCarro($indice) {
        // Exclui um carro
        $this->carroModel->excluirCarro($indice);
    }

    public function atualizarCarro($indice, $novosDados) {
        // Atualiza um carro
        $this->carroModel->atualizarCarro($indice, $novosDados);
    }
}
?>