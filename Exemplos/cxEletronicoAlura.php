<?php

$saldo = 1_000;
$titularConta = "Maria Isabel";

echo "******************\n";
echo "Titular Conta: $titularConta\n";
echo "Saldo atual: $saldo\n";
echo "******************\n";

// Looping uma vez que já foi logado
do {
    
    echo "Escolha uma opção\n";
    echo "***********************\n";
    echo "1 - Verificar saldo\n";
    echo "2 - Sacar\n";
    echo "3 - Depositar\n";
    echo "4 - Sair\n";
    echo "***********************\n";
    $opcao = trim(fgets(STDIN));

// Operações Caixa Eletronico
    switch ($opcao) {
        case 1:
            echo "Titular Conta: $titularConta\n";

            // echo "******************\n";
            echo "Saldo atual: $saldo\n";

            echo "******************\n";
            break;
        case 2:
            echo "Digite o valor que gostaria de sacar:\n";
            echo "******************\n";

            $sacar = (float) fgets(STDIN);

            if ($sacar > $saldo) {
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $sacar;
            }
            break;
        case 3:
            echo "Digite o valor a ser depositado: \n";
            $deposito = (float) fgets(STDIN);
            $saldo += $deposito;
            echo "Deposito efetuado com sucesso, para verificar o saldo, volte ao menu inicial";
            break;
        default:
            echo "Opção Inválida\n";
            echo "******************\n";
            break;
    }
} while ($opcao != 4);

echo "Programa encerrado, volte sempre $titularConta";