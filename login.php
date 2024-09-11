<?php
include 'config/app.php';

session_start();

if(isset($_POST['login'])){

   $username = mysqli_real_escape_string($koneksi, $_POST['username']);
   $pass = $_POST['password'];

   $select = " SELECT * FROM data_admin WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($koneksi, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
        $_SESSION['id_admin'] = $row['id_admin'];
        $_SESSION['username'] = $row['username'];
        header('location:dashboard.php');

   }else{
      $error = true;
   }

};
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Log in | Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="style/signin.css" rel="stylesheet">
</head>
<body class="text-center">
<main class="form-signin">
    <form method="post" action="">
        <img class="mb-4" src="img/foto-login.jpg" alt="" width="121" height="104">
        <h1 class="h3 mb-3 fw-normal">Admin Login</h1>

        <?php if (isset($error)) : ?>
            <div class="alert alert-danger text-center">
                <b>Username/Password anda salah</b>
            </div>
        <?php endif; ?>

        <div class="form-floating">
            <input type="text" name="username" class="form-control" placeholder="Username.." id="floatingInput" required>
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" placeholder="Pass.." id="floatingPassword" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button>
        <p class="mt-5 mb-3 text-muted">Copyright &copy; 2024 Kelompok 2 Basdat</p>
    </form>
</main>
</body>
</html>
