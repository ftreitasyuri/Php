<?php 

    if (isset($_GET['nome'])){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $endereco = $_GET['endereco'];
    }else{
        $nome = "Padrão";
        $idade = "Padrão";
        $endereco = "Padrão";
    }

?>

<h1>Seja bem vindo <br> </h1>
<h2><?= $nome ?> vi que tem <?= $idade?> anos e que mora em <?= $endereco?></h2>
