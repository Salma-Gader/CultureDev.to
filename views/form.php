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
<form id="form">
<label for="category-name" id="label">Category Name:</label>
  <input type="text" id="category-name" name="category-name">
  <input type="submit" value="Add Category" id="add-category">
  </form>



  <form id="form-p">
  <label for="post-title" id="title">Post Title:</label>
  <input type="text" id="post-title" name="post-title">

  <label for="post-content" id="description">Post Content:</label>
  <textarea id="post-content" name="post-content"></textarea>
  <label for="post-image">Post Image:</label>
  <input type="file" id="post-image" name="post-image">

  <label for="post-category" id="Category">Post Category:</label>
  <select id="post-category" name="post-category">
    <option value="category1">Category 1</option>
    <option value="category2">Category 2</option>
    <option value="category3">Category 3</option>
  </select>

  <input type="submit" value="Add Post" id="add-post">
</form>

    
</body>
</html>