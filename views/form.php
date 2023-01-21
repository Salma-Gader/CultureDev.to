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


    <!-- Button trigger modal -->
    <a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" value="Launch demo modal">Launch demo modal</a>
        
    

    Modal
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" id="form">Add Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <label for="category-name" id="label">Category Name:</label>
                        <input type="text" id="category-name" name="category-name">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add-category">Add Category</button>
                </div>
            </div>
        </div>
    </div>


 
    
    <!-- Button trigger modal -->
<!-- <a type="button" data-bs-toggle="modal" data-bs-target="#Modal">
  Launch demo modal
</a> -->

<!-- Modal
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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

        
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add-post">Add post</button>
      </div>
    </div>
  </div>
</div> -->


</body>

</html>