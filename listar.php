<?php
require_once "conexao.php";
 
$sql = "SELECT id, nome, categoria, preco FROM produtos ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>produtos Cadastradas</h1>
        <p>
            Total de produtos:
            <strong><?=count($produtos)?></strong>
        </p>
        <table>
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>preco</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                    if(count($produtos)>0): ?>
                    <?php foreach($produtos as $pessoa): ?>
                        <tr>
                            <td><?= (int)$pessoa["id"]?></td>
                            <td>
                            <?= htmlspecialchars($pessoa["nome"],
                            ENT_QUOTES,"UTF-8")?>
                            </td>
                            <td>
                            <?= htmlspecialchars($pessoa["categoria"],
                            ENT_QUOTES,"UTF-8")?>
                            </td>
                            <td>
                            <?= htmlspecialchars($pessoa["preco"],
                            ENT_QUOTES,"UTF-8")?>
                            </td>
                            <td>
                                <div class = "acoes">
                                    <a class="btn-editar" href="editar.php?id=<?= (int)$pessoa['id']?>">Editar</a>
                                    <form action="excluir.php" method="POST" onsubmit="return ('Deseja realmente excluir?');">
                                        <button type="submit" class="btn-excluir">
                                            Excluir
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">
                                    Nenhuma pessoa cadastrada
                                </td>
                            </tr>
                        <?php endif; ?>
            </tbody>
        </table>
        <a href="index.php">Voltar ao cadastro</a>
    </div>
</body>
</html>