<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $categoria = $_POST["categoria"];

    // inserindo na tabela
    $sql = "INSERT INTO produtos (nome, descricao, quantidade, preco, categoria) VALUES ('$nome', '$descricao','$quantidade', '$preco', '$categoria')";

    if($conn->query($sql) === true){
        header("Location: index.php"); //redireciona para a o index se der tudo certo
        exit();
    }else{
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
?>