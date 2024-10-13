<?php

class Filme
{
    public function __construct(
        public readonly string $titulo,
    ){
        $this->titulo;
    }
    // …
}

$filme = new Filme(
    'Vingadores: Guerra Infinita'
);
// $filme->titulo = 'Vingadores: Guerra Infinita';

echo $filme->titulo;