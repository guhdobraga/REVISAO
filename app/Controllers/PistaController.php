<?php// PistaController.php

require_once '.../Models/PistaModel.php';

class PistaController {
    public function listar() {
        $pistas = PistaModel::listarPistas();
        // Chama a visualização para exibir a lista de pistas
        include 'view/pista/index.php';
    }

    public function adicionar($novaPista) {
        PistaModel::adicionarPista($novaPista);
        // Redireciona para a página de listagem de pistas após adicionar
        header('Location: /pista/listar');
    }

    public function excluir($id) {
        PistaModel::excluirPista($id);
        // Redireciona para a página de listagem de pistas após excluir
        header('Location: /pista/listar');
    }

    public function atualizar($id, $novosDados) {
        PistaModel::atualizarPista($id, $novosDados);
        // Redireciona para a página de listagem de pistas após atualizar
        header('Location: /pista/listar');
    }
}
