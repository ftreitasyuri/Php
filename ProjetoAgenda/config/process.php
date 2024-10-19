<?php
// Arquivo para fazer todo o trabalho com obanco
session_start();

include_once('connection.php');
include_once('url.php');

$data = $_POST;

// Modificações no banco
if (!empty($data)) {
    // print_r($data);
    // exit;
    // Criar contato
    if($data["type"] === "create"){
        $name = $data["name"];
        $phone = $data["phone"];
        $obs = $data["observations"];

        $query = "INSERT INTO contacts (Name, Phone, Observations) VALUE (:name, :phone, :obs)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":obs", $obs);

        try{
            $stmt->execute();
            $_SESSION['msg'] = "Contato criado com sucesso";
        } catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error";
        }


        

    }
    elseif($data['type'] === "edit"){
        $name = $data["name"];
        $phone = $data["phone"];
        $obs = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts 
                  SET Name = :name, Phone = :phone, Observations = :obs 
                  WHERE Id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":obs", $obs);
        $stmt->bindParam(":id", $id);
        
        try{
            $stmt->execute();
            $_SESSION['msg'] = "Edição Realizada";
        } catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    }
    elseif($data["type"] === "delete"){
        $id = $data['id'];

        $query = "DELETE FROM contacts WHERE Id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);
        try{
            $stmt->execute();
            $_SESSION['msg'] = "Contato excluido com sucesso";
        } catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }


// Redirecionando
header("Location:" . "../index.php");
// Seleção de dados
}else {
    $id;

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if (!empty($id)) {

        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();
    } else {
        // Retorna todos os contatos
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}


// Fechar conexão

$conn = null;