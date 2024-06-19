<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    
    // inserindo na tabela
    $sql = "INSERT INTO categorias (nome, descricao ) VALUES ('$nome', '$descricao')";

    if($conn->query($sql) === true){
        header("Location: index.php"); //redireciona para a o index se der tudo certo
        exit();
    }else{
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
?>