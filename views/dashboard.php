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

<body class="dash-body">
    <div id="bg-div">
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



        <section>
            <?php if (isset($_SESSION["email"])) : ?>
            <div class='alert' role='alert'>
                Welcome <?= $_SESSION["email"]?> !
            </div>
            <?php endif?>
        </section>
        <!--start dashboard-->
        <section class="d-flex flex-row min-vh-100 mt-5" id="content-page">
            <form class="container" method="POST">
                <div class="row mx-auto">
                    <div class="card col-md col-12 m-2 " id="sta">
                        <div class="card-body">
                            <h3 class="card-title text-center text-white">Totale Products</h3>
                            <h1 class="card-text text-center text-white">80</h1>
                        </div>
                    </div>
                    <div class="card col-md col-12 m-2" id="sta">
                        <div class="card-body">
                            <h3 class="card-title text-center text-white">Products in stock</h3>
                            <h1 class="card-text text-center text-white">70</h1>
                        </div>
                    </div>
                    <div class="card col-md col-12 m-2" id="sta">
                        <div class="card-body">
                            <h3 class="card-title text-center text-white">Products out stock</h3>
                            <h1 class="card-text text-center text-white">100</h1>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div id="posts" class="row">
        <div class="card col-6 col-md-3" id="post">
            <img src="../assets/img/images.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="update.php?edit=<?php echo $row['ID']; ?>" class="edit_btn me-3"><i
                        class="bi bi-pencil-square"></i></a>
                <a href="dashboard.php?del=<?php echo $row['ID']; ?>" class="del_btn"><i
                        class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
        <div class="card col-6 col-md-3" id="post">
            <img src="../assets/img/images.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="update.php?edit=<?php echo $row['ID']; ?>" class="edit_btn me-3"><i
                        class="bi bi-pencil-square"></i></a>
                <a href="dashboard.php?del=<?php echo $row['ID']; ?>" class="del_btn"><i
                        class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
        <div class="card col-6 col-md-3" id="post">
            <img src="../assets/img/images.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="update.php?edit=<?php echo $row['ID']; ?>" class="edit_btn me-3"><i
                        class="bi bi-pencil-square"></i></a>
                <a href="dashboard.php?del=<?php echo $row['ID']; ?>" class="del_btn"><i
                        class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
        <div class="card col-6 col-md-3" id="post">
            <img src="../assets/img/images.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="update.php?edit=<?php echo $row['ID']; ?>" class="edit_btn me-3"><i
                        class="bi bi-pencil-square"></i></a>
                <a href="dashboard.php?del=<?php echo $row['ID']; ?>" class="del_btn"><i
                        class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
        <div class="card col-6 col-md-3" id="post">
            <img src="../assets/img/images.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="update.php?edit=<?php echo $row['ID']; ?>" class="edit_btn me-3"><i
                        class="bi bi-pencil-square"></i></a>
                <a href="dashboard.php?del=<?php echo $row['ID']; ?>" class="del_btn"><i
                        class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
        <div class="card col-6 col-md-3" id="post">
            <img src="../assets/img/images.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="update.php?edit=<?php echo $row['ID']; ?>" class="edit_btn me-3"><i
                        class="bi bi-pencil-square"></i></a>
                <a href="dashboard.php?del=<?php echo $row['ID']; ?>" class="del_btn"><i
                        class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
    </div>
    </div>
    <div class="sidebar">
        <h3 class="">Categories</h3>
        <ul class="mb-5">
            <li>
                <a class="text-black" href="category.php">Add category <i class="bi bi-plus"></i></a>
            </li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
        <h3 class="text-black mt-5">Recent Posts</h3>
        <ul>
            <li>
                <a class="text-black" href="add.php">Add post <i class="bi bi-plus"></i></a>
            </li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>

    </div>
    <form>






    </section>



</body>

</html>