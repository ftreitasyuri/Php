<?php 

class Titulo{

    private array $notas;

    // Contrutor
    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
        public readonly int $duracao = 0,
    )
    {
        $this->notas = [];
    }
    // Fim construtor
    public function avalia(float $nota): void{
        $this->notas[] = $nota;

    }
    

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $qtdNotas = count($this->notas);
        
        return $somaNotas / $qtdNotas;
    }

}