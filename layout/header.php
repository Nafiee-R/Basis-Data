<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #f5f5dc, rgba(169, 169, 169, 0.25));
            display: flex;
            align-items: 0;
            justify-content: 0;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif; 
            color: #333; 
        }
    </style>
    <title>Halaman Admin</title>
  </head>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Admin Bioskop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                        <a class="nav-link" href="datafilm.php">Data Film</a>
                        <a class="nav-link" href="#">Edit Studio</a>
                        <a class="nav-link" href="#">Laporan</a>
                    </div>
                </div>
                <span>
                    <a class="nav-link" href="logout.php">Logout</a>
                </span>
            </div>
        </nav>
    </div>