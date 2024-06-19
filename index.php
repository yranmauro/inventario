<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Cadastrar produtos</h2>
    <form action="create.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" required>
        </div>
        <div class="form-group">
            <label for="descricao">descricao</label>
            <input type="text" name="descricao" class="form-control" id="descricao" required>
        </div>
        <div class="form-group">
            <label for="quantidade">quantidade</label>
            <input type="text" name="quantidade" class="form-control" id="quantidade" required>
        </div>
        <div class="form-group">
            <label for="preco">preco</label>
            <input type="text" name="preco" class="form-control" id="preco" required>
        </div>
        <div class="form-group">
            <label for="categoria">categoria</label>
            <input type="text" name="categoria" class="form-control" id="categoria" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <h2 class="mt-5">produtos Cadastrados</h2>
    <?php include __DIR__ . '/read.php'; ?>
</div>
</body>
</html>
