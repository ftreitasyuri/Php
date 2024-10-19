<?php 

$host = "localhost";
$db = 'agenda';
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    // Erro de conexão
    $error = $e->getMessage();
    echo "Erro: $error";
}


?>