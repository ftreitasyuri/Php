<<?php

    
    require __DIR__ . "/src/Modelo/TiposContas.php";
    require __DIR__ . "/src/Modelo/Conta.php";
    require __DIR__ . "/src/Modelo/Titular.php";
    require __DIR__ . "/src/Modelo/ContaCorrente.php";
// Logar

echo "**********************************\n";
echo "****ATENÇÃO SÓ DIGITE NÚMEROS*****\n";
echo "Digite o seu código:\n";
$codigo = (int) fgets(STDIN);
echo "Digite os 5 ultimos numeros do seu CPF:\n";
$cinco = (int) fgets(STDIN);
echo "**********************************\n";

// $nome = "Maria Isabel";

$titular1 = new Titular(
    $codigo,
    $cinco,    
);

// 1 verificação
$validaAg = $titular1->validaUsu($codigo);
// 2 verificação
$validaCo = $titular1->validaCo($cinco);
// 3 verificação
$verifacaDados = $titular1->verificaDados($validaAg, $validaCo);

var_dump($verifacaDados);
// Fim Logar
echo "***********************************************************************************\n";

$DimInicial = 1500;

    $conta1 = new ContaCorrente(
        'Mario Kard',
        $cinco,
        1002,
        $DimInicial,
        TiposContas::Poupança,
    );

    $recebe = $conta1->cobrarTaxa();

    do {

        echo "Hello " . $conta1->titular . "\n";
        echo "O seu saldo atual é de: " . $conta1->saldo . "\n";

        // Validação taxação:
        if ($recebe === true) {
            $valorTaxa = (float) 3.4;
            echo "A conta Corrente possue uma taxa de saque de: " . $valorTaxa . "%\n";
        } else {
            echo "Essa conta não possui taxa de saque\n!";
        }
                

        echo "**********************************\n";
        echo "Digite o número de uma operação:\n";
        echo "1 para ver Saldo\n";
        echo "2 para Sacar\n";
        echo "3 para Depositar\n";
        echo "4 para Sair\n";
        echo "Digite a opção que deseja realizar:\n";
        $operacao = (int) fgets(STDIN);

        if ($operacao == 1) {
            echo "O seu saldo é: $conta1->saldo";
        } elseif ($operacao == 2) {

            echo "Digite o valor do saque: \n";
            $saque = (int) fgets(STDIN);

            $saldoAtual = $conta1->sacar($conta1->saldo, $saque);

            if ($saldoAtual < 0) {
                echo "O seu saldo é menor do que o valor de saque.\n";
            } else {
                if ($recebe === true) {
                    $saldoCorrigido = $saldoAtual * $recebe / 100;
                    $saldoAtual = $saldoAtual - +$saldoCorrigido;
                    echo "O saque foi realizado, o seu saldo agora é: $saldoAtual \n";
                } else {
                    echo "O saque foi realizado, o seu saldo agora é: $saldoAtual \n";
                }
            }
        }
        elseif($operacao == 3){
            echo "Digite o valor do Deposito: \n";
            $deposito = (int) fgets(STDIN);

            if ($deposito < 0) {
                echo "Valores menores do que 0, não podem ser depositados.\n";
            } else {
                $saldoAtual = $conta1->depositar($conta1->saldo, $deposito);    
                echo "O deposito foi realizado, \no seu saldo agora é: $saldoAtual \n";
            }            

        }elseif($operacao == 4){
            echo "***************BYE****************\n";
            echo "Atendimento encerrado. \nMuito obrigado, volte sempre!\n";
            echo "**********************************\n";
            break;
            // var_dump($recebe);
        }else{
            echo "Essa operação não existe\n";
        }

        echo "**********************************\n";

        // var_dump($conta1);

        // echo "O valor da taxa é " . $conta1->cobrarTaxa() . "\n";
    } while (true);
    ?>