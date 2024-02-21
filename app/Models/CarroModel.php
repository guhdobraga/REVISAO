<?php
// CarroModel.php

class CarroModel {
    private $carros;

    public function __construct() {
        // Inicializa o array de carros
        $this->carros = array(
            array("modelo" => "Mercedes W13", "cor" => "Prata", "ano_fabricacao" => 2023, "equipe" => "Mercedes"),
            array("modelo" => "Red Bull RBPT", "cor" => "Vermelho", "ano_fabricacao" => 2023, "equipe" => "Red Bull"),
            array("modelo" => "Ferrari SF23", "cor" => "Vermelho", "ano_fabricacao" => 2023, "equipe" => "Ferrari"),
            array("modelo" => "McLaren MCL36", "cor" => "Laranja", "ano_fabricacao" => 2023, "equipe" => "McLaren"),
            array("modelo" => "Alpine A522", "cor" => "Azul", "ano_fabricacao" => 2023, "equipe" => "Alpine"),
        );
    }

    public function adicionarCarro($modelo, $cor, $ano_fabricacao, $equipe) {
        // Adiciona um novo carro ao array
        $this->carros[] = array("modelo" => $modelo, "cor" => $cor, "ano_fabricacao" => $ano_fabricacao, "equipe" => $equipe);
    }

    public function listarCarros() {
        return $this->carros;
    }

    public function excluirCarro($indice) {
        // Remove o carro com o índice especificado do array
        unset($this->carros[$indice]);
    }

    public function atualizarCarro($indice, $novosDados) {
        // Atualiza os dados do carro com o índice especificado
        $this->carros[$indice] = $novosDados;
    }
}
?>



