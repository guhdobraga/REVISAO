<?php
// PistaModel.php

class PistaModel {
    private $pistas;

    public function __construct() {
        // Inicializa o array de pistas
        $this->pistas = array(
            array("id" => "1", "cidade" => "Paraguaçu Paulista", "distancia" => "1000KM", "pais" => "Brasil", "idioma" => ""),
            array("id" => "2", "cidade" => "Monaco", "distancia" => "3.337KM", "pais" => "Mônaco", "idioma" => ""),
            array("id" => "3", "cidade" => "Interlagos", "distancia" => "4.309KM", "pais" => "Brasil", "idioma" => ""),
            array("id" => "4", "cidade" => "Silverstone", "distancia" => "5.891KM", "pais" => "Reino Unido", "idioma" => ""),
            array("id" => "5", "cidade" => "Spa-Francorchamps", "distancia" => "7.004KM", "pais" => "Bélgica", "idioma" => ""),
            array("id" => "6", "cidade" => "Suzuka", "distancia" => "5.807KM", "pais" => "Japão", "idioma" => ""),
        );
    }

    public function adicionarPista($cidade, $distancia, $pais, $idioma) {
        // Adiciona uma nova pista ao array
        $this->pistas[] = array("cidade" => $cidade, "distancia" => $distancia, "pais" => $pais, "idioma" => $idioma);
    }

    public function listarPistas() {
        return $this->pistas;
    }

    public function excluirPista($indice) {
        // Remove a pista com o índice especificado do array
        unset($this->pistas[$indice]);
    }

    public function atualizarPista($indice, $novosDados) {
        // Atualiza os dados da pista com o índice especificado
        $this->pistas[$indice] = $novosDados;
    }
}
?>
