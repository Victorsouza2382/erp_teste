<?php
require_once '../app/controllers/ProdutoController.php';
require_once 'config/config.php';

$stmt = $pdo->query("SELECT * FROM produtos");
$produtos = $stmt->fetchAll();

foreach ($produtos as $produto) {
    echo $produto['nome'] . "<br>";
}
$controller = new ProdutoController();
$controller->index();
?>