<<?php 

// Classe pai

class Titular{
    
    
    public array $codigos = [1234, 2569, 1036];
    public array $cincoCPF = [45828, 56897, 23569];
    
    public function __construct(
        public int $cpf,
        public int $codigo,
              
    )
    {
                
    }

    function verificaDados($v1, $v2): bool{
        return $v1 === $v2;
    }

    function validaUsu($ag): bool{
        return in_array($ag, $this->codigos);
    }

    function validaCo($co): bool{
        return in_array($co, $this->cincoCPF);
    }



    
}

?>