<?php
require_once "funcoes.php"; // vai carregar funcoes.php
// echo $_SERVER['SERVER_NAME']; // Nome/Ip do server.
// print_r($_SERVER); // Impime os dados do server na tela.
// Ações do cadastro (Insert, select, update e delete) // CRUD

if ($_SERVER["REQUEST_METHOD"] === "POST") { // ===: Absolutamente igual. // A variável super global $_SERVER é o próprio servidor (Matriz com todas as informações do servidor web)
    if (isset($_POST["inserir"])) {
        if (inserirProduto($_POST["nome"], (float)$_POST["preco"])) {
        } // Com if // O PHP suporta float, mas é por prevenção.
        inserirProduto($_POST["nome"], (float)$_POST["preco"]); // Sem if // O PHP suporta float, mas é por prevenção.
    }

    if (isset($_POST["editar"])) {
        editarProduto((int)$_POST["id"], $_POST["nome"], (float)$_POST["preco"]); // casting de int é uma boa prática
    }
}
if (isset($_GET["excluir"])) {
    excluirProduto((int)$_GET["excluir"]);
}
$produtos = listarProdutos();
// print_r($produtos);
// var_dump($produtos); // Mostra a matriz em formato

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CRUD de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="container mt-4">

    <h2>Cadastro de Produtos</h2>
    <form method="POST" class="mb-3">
        <input type="text" name="nome" placeholder="Nome do produto" required class="form-control mb-2">
        <input type="number" step="0.01" name="preco" placeholder="Preço" required class="form-control mb-2">
        <button type="submit" name="inserir" class="btn btn-success">Inserir</button>
    </form>

    <h3>Lista de Produtos</h3>
    <table class="table table-bordered table-striped">
        <tr> <!-- cria uma linha (table reader) -->
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Data Cad</th>
            <th>Ações</th>
        </tr>

        <?php // foreach($produtos as $produto):endforeach;?> <!-- alternativa simples -->
        <?php foreach($produtos as $produto):?>
        <tr> 
            <td><?= $produto['id']?></td> <!-- abre e fecha o php da mesma forma -->
            <td><?= htmlspecialchars($produto['nome'])?></td>
            <td><?= htmlspecialchars(formatarPreco($produto['preco']))?></td>
            <td><?= date("d/m/Y H:i", strtotime($produto['datacad']))?></td>
            <td class="d-flex gap-2">
                <a href="editar.php?id=<?=$produto['id']?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="index.php?excluir=<?=$produto['id'] // sem o "index.php é a mesma coisa?>" class="btn btn-danger btn-sm" onclick="return confirm('Excluir Produto?')">Excluir</a>
            </td>
        </tr>
        <?php endforeach;?>

    </table>

</body>

</html>