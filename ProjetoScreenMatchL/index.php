<?php 

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";


echo "Bem-vindo(a)s a ScreenMatch\n";

// estanciando um filme
$filme = new Filme(
    'As branquelas',
    2007,
    Genero::Ação,
    160,
);


$filme->avalia(5.5);
$filme->avalia(6.3);
$filme->avalia(5);
$filme->avalia(8);


// var_dump($filme);

echo "O filme é: " . $filme->nome . "\nA média do filme é: " . $filme->media() . "\n";


echo "O genero do filme é: " . $filme->genero->name . "\n";

$serie1 = new Serie(
    'Lost',
    2007,
    Genero::Drama,
    10,
    20,
    45
);

echo "A seria é: " . $serie1->nome . "\n";

$serie1->avalia(7);
$serie1->avalia(8);
$serie1->avalia(5);
$serie1->avalia(4.5);

echo "A média de nota da serie é " . $serie1->media() . "\n";
