<?php 

class Filme extends Titulo{
    
    // Contrutor
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
    )
    {
        parent::__construct($nome, $anoLancamento, $genero); 
    }
    
}