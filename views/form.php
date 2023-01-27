<?php
require_once ('../controllers/dbFunction.php');
$add= new crud;
$row=$add->updetCategory();
if(isset($_POST['updet'])){
   $name= $_POST['name-e'];
    $add->saveUpdet($name);
    header('Location:dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Dasshboard</title>
</head>
<body>
  <div class="for">
<form id="for" method="POST" >
  <div >
<label for="category-name" id="labelf">Category Name:</label>
  <?php foreach ($row as $category){ ?>
  <input type="text" id="category-name" name="name-e" value="<?=$category['name']?>">
  <input type="submit" value="Add Category" id="add-category" name="updet">
  <?php } ?>
  </div>
  </form>
  </div>
    
</body>
</html>