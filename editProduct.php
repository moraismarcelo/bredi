<?php 
require __DIR__. "/Classes/Connect.php";
$pdo = Connect::getInstance();
$editar =$_GET['editar'];
$sql = "SELECT * FROM produtos WHERE produto_id = $editar";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$sql]);
    $product = $stmt->fetch();
    header("Location: produtos.php?name=$product->nome&price=$product->preco&category=$product->categoria_id");
?>