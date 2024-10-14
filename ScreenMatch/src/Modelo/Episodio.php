<?php 

namespace ScreenMatch\Modelo;

use ScreenMatch\Modelo\Avaliavel;
use ScreenMatch\Modelo\ComAvaliacao;

class Episodio implements Avaliavel{
// Usando a trait
use ComAvaliacao;

    public function __construct(
        public readonly Serie $serie,
        public readonly string $nome,
        public readonly int $numeroEp,
    )
    {}
}

?>