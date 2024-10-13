<?php 

enum TiposContas{
    case Corrente;
    case Investimentos;
    case Poupanca;
    case Universtario;

    public function verifica(): bool {
        return $this ===  self::Corrente || $this === self::Investimentos;
    }

}

class ProprisConta{
    public function __construct(
        public readonly int $saldo,
        public readonly string $titular,
        public readonly TiposContas $tipo,
    )
    {
        
    }
}


echo "Bem vindo(a), ";

$conta1 = new ProprisConta(
    1890,
    "Jussara Lasvesgas ",
    TiposContas::Corrente,
);
// var_dump($conta1)
echo $conta1->titular . "\nO saldo da sua conta é: " . $conta1->saldo . "\nE sua conta é do tipo " . $conta1->tipo->name . "\n";

if ($conta1->tipo->verifica()){
    echo "Essa conta possui tarifas de 3.6%/AA";
}else{
    echo "Essa conta não possui tarifas";
}




?>