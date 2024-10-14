<?php 

require 'autoload.php';


use ScreenMatch\Modelo\{
    Filme, Serie, Episodio, Genero
};

use ScreenMatch\Calculos\{
    ConversorNota, CalcMaratona
};

echo "Bem-vindo(a)s a ScreenMatch\n";

// estanciando um filme
$filme = new Filme(
    'As branquelas',
    2007,
    Genero::Ação,
    160,
);


$filme->avalia(8.9);
$filme->avalia(4.5);
$filme->avalia(9);
$filme->avalia(5.9);

$conversorFilme = new ConversorNota();
$filmeConvertido = $conversorFilme->convert($filme);


// var_dump($filme);

echo "O filme é: " . $filme->nome . "\nCom " . $filmeConvertido . " estrelas\n";


echo "O genero do filme é: " . $filme->genero->name . "\n";

$serie1 = new Serie(
    'Lost',
    2007,
    Genero::Drama,
    10,
    20,
    45
);

$epserie1 = new Episodio(
    $serie1, "Ep piloto", 1
);

echo "A seria é: " . $serie1->nome . " Episodio: " . $epserie1->nome . "\n";

$serie1->avalia(7);
$serie1->avalia(8);
$serie1->avalia(5);
$serie1->avalia(4.5);

echo "A média de nota da serie é " . $serie1->media() . "\n";

$calculadora = new calcMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie1); 

$duracao = $calculadora->duracao();

echo "Para maratonar esses dois serão necessários $duracao minutos \n";

// Verifica quantas estrelas a serie1 possui
$conversor = new ConversorNota();
echo $conversor->convert($serie1);