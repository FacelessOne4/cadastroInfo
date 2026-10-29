<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
 
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
 
        <h1>Cadastrar Produto</h1>
 
        <form action="salvar.php" method="POST">
 
            <label for="nome">Nome do Produto:</label>
            <input
                type="text"
                id="nome"
                name="nome"
                required
            >
            <br><br>
 
            <label for="categoria">Categoria:</label>
            <input
                type="text"
                id="categoria"
                name="categoria"
                required
            >
            <br><br>
 
            <label for="preco">Preço:</label>
            <input
                type="text"
                id="preco"
                name="preco"
                required
            >
            <br><br>
 
            <button type="submit">Cadastrar Produto</button>
 
        </form>
        <p>
            <a href="listar.php">Ver produtos cadastradas</a>
        </p>
 
    </div>
 
</body>
</html>