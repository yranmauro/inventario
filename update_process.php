<?php
include 'config.php';  // Inclui a configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];           // Obtém o valor do campo ID
    $nome = $_POST["nome"];       // Obtém o valor do campo nome
    $descricao = $_POST["descricao"]; // Obtém o valor do campo descricao
    $quantidade = $_POST["quantidade"];   // Obtém o valor do campo quantidade
    $preco = $_POST["preco"]; 
    $categoria = $_POST["categoria"];


    // Atualiza os dados na tabela pessoas
    $sql = "UPDATE produtos SET nome='$nome', descricao='$descricao', quantidade='$quantidade', preco='$preco', categoria='$categoria' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;  // Exibe um erro se a atualização falhar
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
?>