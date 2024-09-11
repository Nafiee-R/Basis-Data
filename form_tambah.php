<?php
include 'config/app.php';
include 'layout/header.php';

session_start();
// membatasi login
if (isset($_SESSION['login'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: login.php");
    exit;
} 

if (isset($_POST['Tambah'])) {
    if(Tambah_film($_POST)>0){
        echo "<script>
                alert('Data Barang Berhasil Ditambahkan');
                document.location.href = 'datafilm.php';    
                </script>";
    } else {
        echo "<script>
                alert('Data Barang Gagal Ditambahkan');
                document.location.href = 'datafilm.php';    
                </script>";
    }
}
?>

<body>
    <div class="container mt-5">
        <h1>Tambah Film</h1>
        <hr>

        <form action="" method="post">
            <div class="mb-3">
                <label for="Judul Film" class="form-label">Judul Film</label>
                <input type="text" class="form-control" id="Judul Film" name="Judul_Film" placeholder="Judul Film. . ."
                required>
            </div>
            <div class="mb-3">
                <label for="Produser" class="form-label">Produser</label>
                <input type="text" class="form-control" id="Produser" name="Produser" placeholder="Produser. . ."
                required>
            </div>
            <div class="mb-3">
                <label for="Sutradara" class="form-label">Sutradara</label>
                <input type="text" class="form-control" id="Sutradara" name="Sutradara" placeholder="Sutradara. . ."
                required>
            </div>
            <div class="mb-3">
                <label for="Harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="Harga" name="Harga" placeholder="Harga. . ."
                required>
            </div>
            <div class="mb-3">
                <label for="Durasi" class="form-label">Durasi</label>
                <input type="time" class="form-control" id="Durasi" name="Durasi" placeholder="Durasi. . ."
                required>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                    <input type="date" name="tgl_tayang" id="tgl_tayang" class="form-control" required>
                    <label for="Tanggal">Tanggal Tayang</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                    <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" required>
                    <label for="Tanggal">Tanggal Berakhir</label>
                    </div>
                </div>
            </div>
            <div class="mt-5">
            <button type="submit" class="btn btn-primary" name="Tambah" style="float: right;">Tambah</button>
            </div>

        </form>
        
    </div>

<?php 
include 'layout/footer.php';
?>