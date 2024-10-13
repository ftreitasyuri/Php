<?php 

class Serie extends Titulo{

    // Contrutor
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $QTDTemporadas,
        public readonly int $minutosPorEp
    )
    
    {
        parent::__construct($nome, $anoLancamento, $genero);
    }


}