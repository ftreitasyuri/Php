<?php



while (true) {
    $contas = [9458, 1234, 5678];
    $saldo = (float)1899;
    $inicio = 3;

    echo "Aperte enter para seguir ou digite 'sair' para terminar:";
    $input = trim(fgets(STDIN));
    
    if ($input == "sair") {
        echo "Programa encerrado";
        break;
    }

    echo "******************\n";
    echo "Digite seu nome:\n";
    $nome = fgets(STDIN);
    echo "******************\n";
    echo "Digite os 4 numeros da sua conta: ";
    $fourNumbers = (int) fgets(STDIN);
    echo "******************\n";
    // echo count($contas);
    for ($i = 0; $i < count($contas); $i++) {
        // echo "$i\n";
        if ($fourNumbers === $contas[$i]) {
            $logado = true;
            
            if ($logado == true) {
                echo "Logado\n";
                echo "Escolha uma opção\n";
                echo "***********************\n";
                echo "1 - Verificar saldo\n";
                echo "2 - Depoisitar\n";
                echo "3 - Sacar\n";
                echo "4 - Sair\n";
                $opcao = trim(fgets(STDIN));

                if ($opcao == 4){
                    break;
                }
                elseif($opcao == 1){
                    echo "Saldo da conta R$ - $saldo\n";
 
                    $opcao = trim(fgets(STDIN));

                    echo "Escolha uma opção\n";
                    echo "***********************\n";
                    echo "1 - Verificar saldo\n";
                    echo "2 - Depoisitar\n";
                    echo "3 - Sacar\n";
                    echo "4 - Sair\n";
                    
                }
                elseif($opcao == 2){
                    echo "Digite a quantia que será depositada:\n";
                    $deposito = trim(fgets(STDIN));
                    $saldo += $deposito;
                    echo "Saldo altual da sua conta: R$: $saldo\n";
                    // break;
                }
                else{
                    $logado = false;
                    echo "Essa conta não existe";
                    // if ($logado == false) {
                    //     if ($i == count($contas) - 1) {
                    //     echo "Conta não encontrada\n";
                    //     return;
                    //     }
                    // }
                    
                }
            }//fim2if
            // break;
        }//fim1if
        // echo var_dump($i);

    }//fim1for
    
}//fimwhile
