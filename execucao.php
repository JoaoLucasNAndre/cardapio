<?php

    require_once("modelo/Pedido.php");
    require_once("modelo/Prato.php");

    $pratosDisponiveis = [
    new Prato(1, "Camarão à Milanesa", 110.00),
    new Prato(2, "Pizza Margherita", 80.00),
    new Prato(3, "Macarrão à Carbonara", 60.00),
    new Prato(4, "Bife à Parmegiana", 75.00),
    new Prato(5, "Risoto ao Funghi", 70.00)
];
    $total = 0;
    $pedidos = [];
    do {
        echo"\n======MENU======\n";
        echo"(1) Cadastrar\n";
        echo"(2) Cancelar\n";
        echo"(3) Listar\n";
        echo"(4) Total de vendas\n";
        echo"(0) Sair\n";

        $escolha = readline("O que deseja? (1, 2, 3, 4 ou 0)");
        switch ($escolha) {

        case '1':

            $cadastro = new Pedido();
            $cadastro->setNomeCliente(readline("Informe o nome do cliente:"));
            $cadastro->setNomeGarcom(readline("Informe o nome do garçom: "));
            
            

            $opcao = readline ("Informe a sua escolha: ");
            if ($opcao >= 1 && $opcao <= 5) {
                $cadastro->setPrato($pratosDisponiveis[$opcao - 1]);
                array_push($pedidos, $cadastro);
                echo "Pedido cadastrado com sucesso!\n";
            } else {
                echo "Prato inválido!\n";
            }



            array_push($pedidos, $cadastro);
            break;

        case '2':
            $indice = readline("Informe o indice do pedido que deseja excluir: ");
            array_splice($pedidos, $indice, 1);
            break;


        case '3':
               foreach ($pedidos as $p) {
                echo $p;
            }
            break;


        
        case '4':
            $total = 0;
            foreach ($pedidos as $p) {
                $total += $p->getPrato()->getValor();
            }
            echo "Total de vendas: R$ " . $total . "\n";
            break;  


        case '0':

            echo "\nSaindo do programa...!\n";
            break;

        default:
            echo "\nOpção inválida! Tente novamente.\n";
            break;

            }

    }while ($escolha != 0);
