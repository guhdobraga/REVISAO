<?php// EquipeController.php

require_once '.../Models/EquipeModel.php';


class EquipeController {
    public function listar() {
        $equipes = EquipeModel::listarEquipes();
        // Chama a visualização para exibir a lista de Equipes
        include 'view/equipe/index.php';
    }

    public function adicionar($novaEquipe) {
        EquipeModel::adicionarEquipe($novaEquipe);
        // Redireciona para a página de listagem de Equipes após adicionar
        header('Location: /equipe/listar');
    }

    public function excluir($id) {
        EquipeModel::excluirEquipe($id);
        // Redireciona para a página de listagem de Equipes após excluir
        header('Location: /equipe/listar');
    }

    public function atualizar($id, $novosDados) {
        EquipeModel::atualizarEquipe($id, $novosDados);
        // Redireciona para a página de listagem de Equipes após atualizar
        header('Location: /equipe/listar');
    }
}
