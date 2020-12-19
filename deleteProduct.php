<?php 
require __DIR__. "/Classes/Connect.php";
$pdo = Connect::getInstance();
$deletar =$_GET['deletar'];
$sql = "DELETE FROM produtos WHERE produto_id = $deletar";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$sql]);
header("Location: listProducts.php");
?>