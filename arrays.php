<?php

// Array de pistas
$pistas = array(
    array("id" => "1", "cidade" => "Paraguaçu Paulista", "distancia" => "1000KM", "pais" => "Brasil", "idioma" => ""),
    array("id" => "2", "cidade" => "Monaco", "distancia" => "3.337KM", "pais" => "Mônaco", "idioma" => ""),
    array("id" => "3", "cidade" => "Interlagos", "distancia" => "4.309KM", "pais" => "Brasil", "idioma" => ""),
    array("id" => "4", "cidade" => "Silverstone", "distancia" => "5.891KM", "pais" => "Reino Unido", "idioma" => ""),
    array("id" => "5", "cidade" => "Spa-Francorchamps", "distancia" => "7.004KM", "pais" => "Bélgica", "idioma" => ""),
    array("id" => "6", "cidade" => "Suzuka", "distancia" => "5.807KM", "pais" => "Japão", "idioma" => ""),
);

// Array de pilotos
$pilotos = array(
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

// Array de carros
$carros = array(
    array("modelo" => "Mercedes W13", "cor" => "Prata", "ano_fabricacao" => 2023, "equipe" => "Mercedes"),
    array("modelo" => "Red Bull RBPT", "cor" => "Vermelho", "ano_fabricacao" => 2023, "equipe" => "Red Bull"),
    array("modelo" => "Ferrari SF23", "cor" => "Vermelho", "ano_fabricacao" => 2023, "equipe" => "Ferrari"),
    array("modelo" => "McLaren MCL36", "cor" => "Laranja", "ano_fabricacao" => 2023, "equipe" => "McLaren"),
    array("modelo" => "Alpine A522", "cor" => "Azul", "ano_fabricacao" => 2023, "equipe" => "Alpine"),
);

// Array de equipes
$equipes = array(
    array("lider" => "Toto Wolff", "nome" => "Mercedes", "pais" => "Reino Unido", "patrocinadores" => "Petronas, INEOS", "pilotos" => array("Lewis Hamilton", "Valtteri Bottas")),
    array("lider" => "Christian Horner", "nome" => "Red Bull Racing", "pais" => "Reino Unido", "patrocinadores" => "Red Bull, Honda", "pilotos" => array("Max Verstappen", "Sergio Perez")),
    array("lider" => "Mattia Binotto", "nome" => "Scuderia Ferrari", "pais" => "Itália", "patrocinadores" => "Mission Winnow, UPS", "pilotos" => array("Charles Leclerc", "Carlos Sainz")),
    array("lider" => "Andreas Seidl", "nome" => "McLaren Racing", "pais" => "Reino Unido", "patrocinadores" => "McLaren, British American Tobacco", "pilotos" => array("Lando Norris", "Daniel Ricciardo")),
    array("lider" => "Laurent Rossi", "nome" => "Alpine F1 Team", "pais" => "França", "patrocinadores" => "Alpine, BWT", "pilotos" => array("Fernando Alonso", "Esteban Ocon")),
);

// Array de corrida
$corrida = array(
    "pista" => $pistas[0],
    "data" => "2024-06-15",
    "pilotos" => $pilotos,
    "carros" => $carros,
    "equipes" => $equipes
);

?>
