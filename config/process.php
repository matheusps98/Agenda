<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

//MODIFICAÇÕES DE DADOS
if(!empty($data)) {

    
    // CRIAÇÃO DE DADOS
    if($data["type"] === "create") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try{

        $stmt->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";
        
        } catch(PDOException $e) {
            //erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

} else if($data["type"] === "edit") {

    $name = $data["name"];
    $phone = $data["phone"];
    $observations = $data["observations"];
    $id = $data["id"];

    $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observations", $observations);
    $stmt->bindParam(":id", $id);


    try{

        $stmt->execute();
        $_SESSION["msg"] = "Contato atualizado com sucesso!";
        
        } catch(PDOException $e) {
            //erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    } else if($data["type"] === "delete") {
        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try{

            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";
            
            } catch(PDOException $e) {
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }
    }

    //redirect para a home
    header("Location:" . $BASE_URL . "../index.php");

    // SELEÇÃO DE DADOS
} else {


// Inicializa variáveis
$id = null;
$contacts = [];

// Se um ID foi passado via GET, busca o contato específico
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];

    $query = "SELECT * FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    $contact = $stmt->fetch(PDO::FETCH_ASSOC); // Busca um único contato
    
} else {
    // Se não há ID, busca todos os contatos
    $query = "SELECT * FROM contacts";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


}

//FECHAR CONEXÃO
$conn = null;
?>
