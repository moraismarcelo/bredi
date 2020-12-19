<?php 
require __DIR__. "/Classes/Connect.php";
$pdo = Connect::getInstance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css"/>
    <title>Lista de Produtos</title>
</head>
<body>
<?php
 $stmt = $pdo->query("SELECT * FROM produtos p INNER JOIN categorias c ON p.categoria_id = c.id");
 $products = $stmt->fetchAll();
 ?>
<div class="container-fluid">
<h1>Dashboard</h1>  
<ul class="nav nav-pills p-2">
  <li class="nav-item">
    <a class="nav-link active" href="produtos.php">Adicionar Produto</a>
  </li>
  <li class="nav-item ml-1">
    <a class="nav-link active" href="listProducts.php">Listar Produtos</a>
  </li>
</ul>
<table class="table table-hover col-sm-5 table-sm">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Preço</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($products as $product){
     $row =  "<tr>
      <th scope='row'>{$product->produto_id}</th>
      <td>{$product->nome}</td>
      <td>{$product->titulo}</td>
      <td>{$product->preco}</td>
      <td><a href='#'><button type='button' class='btn btn-success btn-sm' id='editButton'>Editar</button></a>
      <a href='deleteProduct.php?deletar=$product->produto_id'><button type='button' class='btn btn-danger btn-sm deleteButton'>Excluir</button></a></td>
    </tr>
    ";
    echo $row;
    }
    ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="/js/script.js" type="application/javascript"></script>
   </body>
</html>