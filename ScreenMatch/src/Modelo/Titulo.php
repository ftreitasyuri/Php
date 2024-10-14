<?php 

namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel{

    
    use ComAvaliacao;
    // Contrutor
    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
        public readonly int $duracao = 0,
    )
    {}
    // Fim construtor



    abstract public function duracaoMinutos(): int;
        
 }