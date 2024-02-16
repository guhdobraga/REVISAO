<?php
// carroModel.php

// CarroModel.php

class CarroModel {
    private static $carros = array(
        array("modelo" => "Mercedes W13", "cor" => "Prata", "ano_fabricacao" => 2023, "equipe" => "Mercedes"),
        array("modelo" => "Red Bull RBPT", "cor" => "Vermelho", "ano_fabricacao" => 2023, "equipe" => "Red Bull"),
        array("modelo" => "Ferrari SF23", "cor" => "Vermelho", "ano_fabricacao" => 2023, "equipe" => "Ferrari"),
        array("modelo" => "McLaren MCL36", "cor" => "Laranja", "ano_fabricacao" => 2023, "equipe" => "McLaren"),
        array("modelo" => "Alpine A522", "cor" => "Azul", "ano_fabricacao" => 2023, "equipe" => "Alpine"),
    );

    public static function listarCarros() {
        return self::$carros;
    }

    public static function adicionarCarro($novaCarro) {
        self::$carros[] = $novaCarro;
    }

    public static function excluirCarro($indice) {
        unset(self::$carros[$indice]);
        self::$carros = array_values(self::$carros);
    }

    public static function atualizarCarro($indice, $novosDados) {
        self::$carros[$indice] = array_merge(self::$carros[$indice], $novosDados);
    }
}

