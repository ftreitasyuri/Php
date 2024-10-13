<?php 

$caminhoArquivo = __DIR__ . '/filme.json';
$conteudoFilme = file_get_contents($caminhoArquivo);

$filme = json_decode($conteudoFilme, true);

var_dump($filme);
