<?php
require_once "conexao.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = trim($_POST["nome"]??"");
    $categoria = trim($_POST["categoria"]??"");
    $preco = trim($_POST["preco"]??"");
    if($nome =="" || $categoria =="" || $preco ==""){
        die("Preencha os campos.");
    }
    try{
        $sql = "INSERT INTO produtos
        (nome, categoria, preco)
        VALUES
        (:nome,:categoria,:preco)";
        $smtp = $pdo->prepare($sql);
        $smtp->execute([
            ":nome" =>$nome,
            ":categoria" =>$categoria,
            ":preco" =>$preco,
 
        ]);
        echo "<h2>Cadastro realizado com sucesso</h2>";
        echo '<a href="index.php">Cadastrar outra pessoa</a>';
    }catch(PDOException $e){
    echo("Erro ao cadastrar o objeto");
}
}
else{
    header("Location:index.php");
    exit;
}
 
?>