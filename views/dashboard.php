<?php
require_once ('../controllers/dbFunction.php');
 $add= new crud; 
 if(isset($_POST['del-c'])){
    $test = $_POST['del-c'];
    $add->deletCategory($test);
 }
 if(isset($_POST['del-p'])){
    $idDel = $_POST['del-p'];
    $add->deletPost($idDel);
 }

 if(isset($_POST['add-c'])){
    $nameCategory =$_POST['category-name'];
    $add->addCategory($nameCategory);
 }

 $row=$add->getcategory();
 $post=$add->getPost();

 if(isset($_POST['add-post'])){
 $title=($_POST['post-title']);
 $description=($_POST['post-content']);
 $category=($_POST['post-category']);
 $image=($_POST['post-image']);
 $add->addPost($title,$description,$category,$image);
 
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <title>Dasshboard</title>
</head>

<body class="dash-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid " id="container-nav">
                <div id="logo">
                    <div>
                        <img src="../assets/img/dev.logo.png" class="img-fluid" width="100px" alt="logo">
                        <p id="text-logo">CULTURDEV.TO</p>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse d-flex align-items-center" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item mx-3">
                            <form id="search">
                                <input type="text" placeholder="Search..." id="search-i">
                                <button type="submit" id="search-b">Go</button>
                            </form>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="btn-signout btn btn-outline-dark text-white" href="signout.php">Sign out <i
                                    class="bi bi-box-arrow-right"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!---end navbar-->

        <section id="alert">
            <?php if (isset($_SESSION["email"])) : ?>
            <div class="malert" role='alert'>
                Welcome <?= $_SESSION["email"]?> !
            </div>
            <?php endif?>
        </section>
        <!--start dashboard-->
        <section class="d-flex flex-row mt-5" id="content-page">
            <form class="container" method="POST">
                <div class="row mx-auto">
                    <div class="card col-md col-12 m-2 " id="sta">
                        <div class="card-body">
                            <h3 class="card-title text-center ">Totale Post</h3>
                            <h1 class="card-text text-center ">80</h1>
                        </div>
                    </div>
                    <div class="card col-md col-12 m-2" id="sta">
                        <div class="card-body">
                            <h3 class="card-title text-center ">Devlopers</h3>
                            <h1 class="card-text text-center ">70</h1>
                        </div>
                    </div>
                    <div class="card col-md col-12 m-2" id="sta">
                        <div class="card-body">
                            <h3 class="card-title text-center ">Categories</h3>
                            <h1 class="card-text text-center ">100</h1>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
    </section>
    
    <section class="d-flex flex-row  mt-5" id="table">
       
        <form class="container" action="#" method="POST">
                <div class="product-table container mt-5 table-responsive">
                <div class="table-title"><h2>Posts</h2></div>
                    <table class="tabl-e table" id="tablepost">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($post as $info){ ?>
                            <tr>
                                <th scope="row"><?=$info['id']?></th>
                                <td><img src="../assets/img/<?= $info['image']?>" class="card-img-top" alt="Product"
                                        class="img-fluid" height="80" width="70px"></td>
                                <td><?= $info['title']?></td>
                                <td><?= $info['description']?></td>
                                <td><?= $info['name']?></td>
                                <td><button type="submit" href="dashboard.php" class="del_btn" value="<?=$info['id']?>" name="del-p"><i
                                            class="bi bi-trash3-fill"></i></button></td>
                                <td><a href="updat-post.php?editPost=<?=$info['id']?>" class="edit_btn"><i
                                            class="bi bi-pencil-square"></i></a></td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
        </form>


    </section>
    
    <section class="d-flex flex-row  mt-5" id="table">

        <form class="container" action="#" method="POST">
                <div class="product-table container mt-5 table-responsive">
                <div class="table-title"><h2>Categories</h2></div>
                    <table class="tabl-e table" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>

                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <?php foreach ($row as $category){ ?>
                                <th scope="row"><?=$category['id']?></th>
                                <td><?=$category['name']?></td>
                                <!-- <input type="hidden" name="id-c" > -->
                                <td><button type="submit" value="<?=$category['id']?>"  class="del_btn" name="del-c" ><i
                                            class="bi bi-trash3-fill"></i></button></td>
                                <td><a href="form.php?editcategoryid=<?=$category['id']?>" class="edit_btn"><i
                                            class="bi bi-pencil-square"></i></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
        </form>


    </section>
    <!--end dashboard-->
    <div class="sidebar">
        <h3 class="">Categories</h3>
        <ul class="mb-5">
            <li>
            <a type="button" data-bs-toggle="modal" data-bs-target="#Modal">
            Add post <i class="bi bi-plus"></i>
            </a>
            </li>
   <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
        <h3 class="text-black mt-5">Recent Posts</h3>
        <ul>
            <li>
            <a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" value="Launch demo modal">Add category<i class="bi bi-plus"></i></a>
    
            </li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>


    </div>
                            <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form id="form-p" action="#" method="POST">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add post</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="post-title" id="title">Post Title:</label>
            <input type="text" id="post-title" name="post-title">

            <label for="post-content" id="description">Post Content:</label>
            <script src="https://cdn.tiny.cloud/1/sc5gr4ufscakvxl0769jshvc0883ter7sbbcmdeoqwd5oesd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
            <textarea id="post-content" name="post-content"></textarea>
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
            <input type="file" id="post-image" name="post-image">

            <label for="post-category" id="Category">Post Category:</label>
            <select id="post-category" name="post-category">
            <option value="<?= $row['category'] ?>" disabled selected>Select Category</option>
            <?php foreach ($row as $option){ ?>
                <option value="<?=$option['id']?>"><?=$option['name']?></option>
                 <?php } ?>
            </select>
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="add-post" name="add-post">Add post</button>
        </div>
        </div>
        </form>
    </div>
    </div>
         
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" id="form">Add Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form name="add-category" action="#" method="POST">
                <div class="modal-body">
                   
                        <label for="category" id="label">Category Name:</label>
                        <input type="text" id="category" name="category-name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="add-category" name="add-c" >Add Category</button>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function () {
    $('#datatable,#tablepost').DataTable(
        {
      "pagingType":"full_numbers",
      "lengthMenu":[
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ],
    responsive:true,
    language:{
      search: "INPUT",
      searchPlaceholder:"Search",
    }
    }
    );
    
});
</script>


</body>

</html>