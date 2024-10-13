<<?php 

// Classe pai

class Conta{

    
    public function __construct(
        public readonly string $titular,
        public int $numeroconta,
        public int $numeroAgencia,
        public int $saldo,
        public readonly TiposContas $tipoConta,

        
    )
    {
        
    }


    function sacar(int $saldo, int $valorSaque): int {
        $valorSaque <= $saldo;
        return $saldo-= $valorSaque;    
    }   
    
    function depositar(int $saldo, int $deposito): int {
        return $saldo += $deposito;
         
    }
    
}

?>