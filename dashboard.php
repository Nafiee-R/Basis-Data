
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieKita Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/dbstyle.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">MovieKita</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu Admin
                    </li>
                    <li class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="datafilm.php" class="sidebar-link">
                        <i class="fa-solid fa-database pe-2" style="color: #ffffff;"></i>    
                            Data Film
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-display pe-2" style="color: #ffffff;"></i>
                            Edit Studio
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Menu Laporan
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>
                            Laporan penjualan
                        </a>
                        <ul id="multi" class="sidebar list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="lp_nm_pmsn.php" class="sidebar-link">
                                    <i class="fa-solid fa-file-lines pe-2"></i>
                                    Daftar nama pemesan
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="lp_tiket_terjual.php" class="sidebar-link">
                                    <i class="fa-solid fa-file-lines pe-2"></i>
                                    Penjualan Tiket
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="lp_top_film.php" class="sidebar-link">
                                    <i class="fa-solid fa-file-lines pe-2"></i>
                                    Top Film
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                    <i class="fa-solid fa-file-lines pe-2"></i>
                                    Total Pendapatan
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <i class="fa-regular fa-user pe-2" ></i>
                                Admin
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Admin Dashboard, MovieKita</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                Rp353.500.000
                                            </h4>
                                            <p class="mb-2">
                                                Total Pendapatan
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +46.0%
                                                </span>
                                                <span class="text-muted">
                                                    Since Last week
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table Element -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Laporan Penjualan
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul Film</th>
                                        <th scope="col">Tiket Terjual</th>
                                        <th scope="col">Pendapatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Joker</td>
                                        <td>1.334</td>
                                        <td>Rp46.690.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Laskar Pelangi</td>
                                        <td>2.783</td>
                                        <td>Rp97.405.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Agak Laen</td>
                                        <td>5.983</td>
                                        <td>Rp209.405.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>
                                        <p class="mt-5 mb-3 text-muted"> Copyright &copy; 2024 Kelompok 2 Basdat</p>
                                    </strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="style/script.js"></script>
</body>

</html>
