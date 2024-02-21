<?php
// PilotoModel.php

class PilotoModel {
    private $pilotos;

    public function __construct() {
        // Inicializa o array de pilotos
        $this->pilotos = array(
            array("nome" => "Lewis Hamilton", "idade" => 37, "peso" => 70, "pais" => "Reino Unido", "equipe" => "Mercedes"),
            array("nome" => "Max Verstappen", "idade" => 24, "peso" => 67, "pais" => "Países Baixos", "equipe" => "Red Bull"),
            array("nome" => "Charles Leclerc", "idade" => 24, "peso" => 68, "pais" => "Mônaco", "equipe" => "Ferrari"),
            array("nome" => "Valtteri Bottas", "idade" => 32, "peso" => 76, "pais" => "Finlândia", "equipe" => "Mercedes"),
            array("nome" => "Lando Norris", "idade" => 22, "peso" => 68, "pais" => "Reino Unido", "equipe" => "McLaren"),
            array("nome" => "Carlos Sainz", "idade" => 27, "peso" => 70, "pais" => "Espanha", "equipe" => "Ferrari"),
            array("nome" => "Daniel Ricciardo", "idade" => 32, "peso" => 71, "pais" => "Austrália", "equipe" => "McLaren"),
            array("nome" => "Fernando Alonso", "idade" => 40, "peso" => 68, "pais" => "Espanha", "equipe" => "Alpine"),
            array("nome" => "Sergio Perez", "idade" => 32, "peso" => 64, "pais" => "México", "equipe" => "Red Bull"),
            array("nome" => "Esteban Ocon", "idade" => 25, "peso" => 66, "pais" => "França", "equipe" => "Alpine"),
        );
    }

    public function adicionarPiloto($nome, $idade, $peso, $pais, $equipe) {
        // Adiciona um novo piloto ao array
        $this->pilotos[] = array("nome" => $nome, "idade" => $idade, "peso" => $peso, "pais" => $pais, "equipe" => $equipe);
    }

    public function listarPilotos() {
        return $this->pilotos;
    }

    public function excluirPiloto($indice) {
        // Remove o piloto com o índice especificado do array
        unset($this->pilotos[$indice]);
    }

    public function atualizarPiloto($indice, $novosDados) {
        // Atualiza os dados do piloto com o índice especificado
        $this->pilotos[$indice] = $novosDados;
    }
}
?>
