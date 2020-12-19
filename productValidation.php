<?php

require_once __DIR__."/Classes/Connect.php";

$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productCategory = $_POST['productCategory'];

if($productName == ""){
    echo "<p>Por favor,insira o nome do produto.</p>";
}elseif($productPrice == ""){
    echo "<p>Por favor,insira o preço do produto.</p>";
}
elseif($productCategory == ""){
    echo "<p>Por favor,escolha a categoria do produto.</p>";
}else{
    $pdo = Connect::getInstance();
    $sql = "INSERT INTO produtos (nome, preco, categoria_id) VALUES (?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$productName, $productPrice, $productCategory]);
}
header("Location: listProducts.php");
?>