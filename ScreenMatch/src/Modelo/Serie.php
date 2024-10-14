<?php 

namespace ScreenMatch\Modelo;


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
    // #[Override]
    public function duracaoMinutos(): int
    {
        return $this->temporadas * $this->QTDTemporadas * $this->minutosPorEp;
    }
    

}