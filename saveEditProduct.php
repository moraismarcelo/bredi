<?php

require_once __DIR__."/Classes/Connect.php";

$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productCategory = $_POST['productCategory'];

header("Location: listProducts.php");
?>