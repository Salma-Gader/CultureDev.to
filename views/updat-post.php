<?php
require_once ('../controllers/dbFunction.php');
$add= new crud;
$row=$add->getcategory();
$post=$add->updetPost();
if(isset($_POST['edit-post'])){
    // die(var_dump($_POST));
    $title=($_POST['post-title']);
    $description=($_POST['post-content']);
    // $category=($_POST['post-category']);
    $image = $_POST['post-image'] ?: $_POST['old-image'];
    $add->saveUpdetPost($title,$description,$image);
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
<form id="form-p" action="#" method="POST">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add post</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php foreach ($post as $info){ ?>
        <div class="modal-body">
            <label for="post-title" id="title">Post Title:</label>
            <input type="text" id="post-title" name="post-title" value="<?= $info['title']?>">

            <label for="post-content" id="description">Post Content:</label>
            <script src="https://cdn.tiny.cloud/1/sc5gr4ufscakvxl0769jshvc0883ter7sbbcmdeoqwd5oesd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
            <textarea id="post-content" name="post-content"><?= $info['description']?></textarea>
            <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
                ],
            });
            </script>
            <label for="post-image">Post Image:</label>
            <input type="file" id="post-image" value="" name="post-image">
            <input type="hidden" value="<?= $info['image']?>" name="old-image">

            <label for="post-category" id="Category">Post Category:</label>
            <select id="post-category" name="post-category">
            <option value="<?= $row['category'] ?>" disabled selected>Select Category</option>
            <?php foreach ($row as $option){ ?>
                <option value="<?=$option['id']?>"><?=$option['name']?></option>
                 <?php } ?>
            </select>
           
        </div>
        <?php } ?>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="add-post" name="edit-post">Edit post</button>
        </div>
        </div>
        </form>
  
    
</body>
</html>