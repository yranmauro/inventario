<?php
include 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc(); //obtem os dados do registro
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atualizar produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Atualizar produtos</h2>
    <!-- Formulário para atualizar a pessoa -->
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  <!-- Campo oculto com o ID -->
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $row['nome']; ?>" required>  <!-- Campo para o nome -->
        </div>
        <div class="form-group">
            <label for="descricao">descricao</label>
            <input type="text" name="descricao" class="form-control" id="descricao" value="<?php echo $row['descricao']; ?>" required>  <!-- Campo para o sobrenome -->
        </div>
        <div class="form-group">
            <label for="quantidade">quantidade</label>
            <input type="text" name="quantidade" class="form-control" id="quantidade" value="<?php echo $row['quantidade']; ?>" required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="preco">preco</label>
            <input type="text" name="preco" class="form-control" id="preco" value="<?php echo $row['preco']; ?>" required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="categoria">categoria</label>
            <input type="text" name="categoria" class="form-control" id="categoria" value="<?php echo $row['categoria']; ?>" required>  <!-- Campo para o telefone -->
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>  <!-- Botão para enviar o formulário -->
    </form>
</div>
</body>
</html>