<?php// CarroController.php


// CarroController.php

require_once 'C:\xampp\htdocs\revisão-array\app\Models\CarroModel.php';

class CarroController {
    public function listar() {
        $carroModel = new CarroModel();
        $carros = $carroModel->listarCarros();
        include '.../Views/carro/index.php';
    }

    public function adicionar($novaCarro) {
        CarroModel::adicionarCarro($novaCarro);
        header('Location: /Carro/listar');
    }

    public function excluir($indice) {
        CarroModel::excluirCarro($indice);
        header('Location: /Carro/listar');
    }

    public function atualizar($indice, $novosDados) {
        CarroModel::atualizarCarro($indice, $novosDados);
        header('Location: /Carro/listar');
    }
}
