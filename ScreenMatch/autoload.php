<?php 

spl_autoload_register(function (string $className){

    // var_dump($className);
    
    $caminho = str_replace('ScreenMatch', 'src', $className . '.php');

    // var_dump($caminho);

    
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
    // var_dump($caminho);
    
    $caminhoCompleto = __DIR__. DIRECTORY_SEPARATOR . $caminho;

    if(file_exists($caminhoCompleto)){
        require_once $caminhoCompleto;
    }  
    
    
    // var_dump($caminhoTeste);
    // exit();
});


?>