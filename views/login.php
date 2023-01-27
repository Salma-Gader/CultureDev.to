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
    <link rel="stylesheet" href="../assets/style.css">
    <title>login</title>
</head>

<body>
    <?php
        require_once('../controllers/dbFunction.php');

        $user = new dbFunction();
        if (isset($_POST['email'],$_POST['password'])) {
          $email = $_POST['email'];
          $password = $_POST['password'];
        
          if ($user->signin($email, $password)) {
            header('Location: dashboard.php');
          } else {
            echo 'username or password';
          }
        }
        // if(isset($_POST['signin'])){
        //     $user->signin($_POST['signin'],$_POST['signin']);
        //     echo 'rrrrrrrrrrrr';
        // }

    ?>
    <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center" id="singin-page">
        <div class="container">
            <div id="signIn" class="col-md-10 bg-white border mx-auto shadow">
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-5 text-center">
                            <h3>Sign in</h3>
                        </div>

                        <div>
                            <form class="m-5" method="POST" name="signin" action="#">
                                <div class="mb-3 email">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email">
                                </div>
                                <div>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password">
                                </div>
                                <div class="btn_div">
                                    <button type="submit" name="signin" class="btn_singin form-control btn mt-3" id="btn">Sign in</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="div_part2 col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="m-5 text-center text-white">
                            <h1 class="fw-bold">Welcome to CultureDev</h1>
                        </div>
                        <div class="text-white">
                            <h5> Dont have account ?</h5>
                        </div>
                        <div class="mt-5">
                            <a class=" btn-singup btn btn btn-outline-dark text-white" id="btn" href='signup.php'>Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>