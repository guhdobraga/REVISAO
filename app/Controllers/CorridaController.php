<?php// CorridaController.php

require_once '.../Models/CorridaModel.php';

class CorridaController {
    public function listar() {
        $corridas = CorridaModel::listarCorridas();
        // Chama a visualização para exibir a lista de Corridas
        include 'view/corrida/index.php';
    }

    public function adicionar($novaCorrida) {
        CorridaModel::adicionarCorrida($novaCorrida);
        // Redireciona para a página de listagem de Corridas após adicionar
        header('Location: /Corrida/listar');
    }

    public function excluir($id) {
        CorridaModel::excluirCorrida($id);
        // Redireciona para a página de listagem de Corridas após excluir
        header('Location: /Corrida/listar');
    }

    public function atualizar($id, $novosDados) {
        CorridaModel::atualizarCorrida($id, $novosDados);
        // Redireciona para a página de listagem de Corridas após atualizar
        header('Location: /Corrida/listar');
    }
}
