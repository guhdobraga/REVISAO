<?php// PilotoController.php

require_once '.../Models/PilotoModel.php';

class PilotoController {
    public function listar() {
        $pilotos = PilotoModel::listarPilotos();
        // Chama a visualização para exibir a lista de Pilotos
        include 'view/piloto/index.php';
    }

    public function adicionar($novaPiloto) {
        PilotoModel::adicionarPiloto($novaPiloto);
        // Redireciona para a página de listagem de Pilotos após adicionar
        header('Location: /piloto/listar');
    }

    public function excluir($id) {
        PilotoModel::excluirPiloto($id);
        // Redireciona para a página de listagem de Pilotos após excluir
        header('Location: /piloto/listar');
    }

    public function atualizar($id, $novosDados) {
        PilotoModel::atualizarPiloto($id, $novosDados);
        // Redireciona para a página de listagem de Pilotos após atualizar
        header('Location: /piloto/listar');
    }
}
