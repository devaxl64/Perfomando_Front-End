<?php
require_once "funcoes.php";

if (!isset($_GET['id'])) { // Se abrir a página sem selecionar o item para editar.
    header('location: index.php');
    exit;
}
$id = $_GET['id'];
$produto = buscarProdutoPorId($id);
// var_dump($produto); // teste para ver se o array está sendo reconhecido
if (!$produto) { // Se abrir a página e o item não existir mais.
    echo "Produto não encontrado!";
    exit;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") { // salvando edição.
    editarProduto($id, $_POST['nome'], (float)$_POST['preco']);
    header('location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="container mt-4">

    <h2>Editar Produto</h2>
    <form method="POST">
        <input type="text" name="nome" value="<?=htmlspecialchars($produto['nome']) ?>" required class="form-control mb-2">
        <input type="number" step="0.01" name="preco" value="<?= htmlspecialchars($produto['preco'])?>" required class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>

</body>

</html>