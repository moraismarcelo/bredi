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
    <title>Dashboard</title>
</head>
<body>
<?php
 $stmt = $pdo->query("SELECT * FROM categorias");
 $categories = $stmt->fetchAll();
 
?>

<div class="container-fluid">
<h1>Dashboard</h1>  
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="Produtos.php">Produtos</a>
  </li>
  </ul>
<form action="/Classes/Product.php" method="_POST">
  <div class="form-group row">
    <label for="productName" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="productName">
    </div>
  </div>
  <div class="form-group row">
    <label for="productPrice" class="col-sm-2 col-form-label">Preço</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="productPrice">
    </div>
  </div>
  <div class="form-group row">
    <label for="Category" class="col-sm-2 col-form-label">Categoria</label>
    <div class="col-sm-2">
      <select class="form-control" id="productCategory">
      <?php foreach ($categories as $category)
        echo "<option value={$category->id}> {$category->titulo}</option>";
      ?>
      </select>  
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">        
      <input type="submit" class="btn btn-success" value="Salvar">
    </div>  
  </div>
  
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>