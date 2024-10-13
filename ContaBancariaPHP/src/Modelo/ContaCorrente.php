<<?php 

// sub classe

class ContaCorrente extends Conta{

    

    public function __construct(
        string $titular,
        int $numeroconta,
        int $numeroAgencia,
        int $saldo,
        TiposContas $tipoConta,
        // public float $taxaCorrente = 3.5,
        // public readonly bool $cobraTarifa,
    )
    {
        parent::__construct($titular, $numeroconta, $numeroAgencia, $saldo, $tipoConta);
    }

    public function cobrarTaxa(): bool{
        return $this->tipoConta === TiposContas::Corrente;
    }
    
    
}

?>