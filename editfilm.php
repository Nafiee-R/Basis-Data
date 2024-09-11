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

//mengambil id film 
$id_film = (int)$_GET['id_film'];
$film = select("SELECT * FROM film WHERE id_film = $id_film")[0];

//alert / notification
if (isset($_POST['Simpan'])) {
    if(Edit_film($_POST)>0){
        echo "<script>
                alert('Data Barang Berhasil Diubah');
                document.location.href = 'datafilm.php';    
                </script>";
    } else {
        echo "<script>
                alert('Data Barang Gagal Diubah');
                document.location.href = 'datafilm.php';    
                </script>";
    }
}
?>

<body>
    <div class="container mt-5">
        <h1 style="font-size: 32px;">Edit Film</h1>
        <hr>

        <form action="" method="post">
            <input type="hidden" name="id_film" value="<?= $film['id_film']; ?>" >
            <div class="mt-3">
                <label for="Judul Film" class="form-label">Judul Film</label>
                <input type="text" class="form-control" id="Judul Film" name="Judul_Film" value="<?= $film['Judul_film'];?>" placeholder="Judul Film. . ."
                required>
            </div>
            <div class="mt-1">
                <label for="Produser" class="form-label">Produser</label>
                <input type="text" class="form-control" id="Produser" name="Produser" value="<?= $film['Produser'];?>" placeholder="Produser. . ."
                required>
            </div>
            <div class="mt-1">
                <label for="Sutradara" class="form-label">Sutradara</label>
                <input type="text" class="form-control" id="Sutradara" name="Sutradara" value="<?= $film['Sutradara'];?>" placeholder="Sutradara. . ."
                required>
            </div>
            <div class="mt-1">
                <label for="Harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="Harga" name="Harga" value="<?= $film['Harga'];?>" placeholder="Harga. . ."
                required>
            </div>
            <div class="mt-1">
                <label for="Durasi" class="form-label">Durasi</label>
                <input type="time" class="form-control" id="Durasi" name="Durasi" value="<?= $film['Durasi'];?>" placeholder="Durasi. . ."
                required>
            </div>
            <div class="row g-2 mt-1">
                <div class="col-md">
                    <div class="form-floating">
                    <input type="date" name="tgl_tayang" id="tgl_tayang" class="form-control" value="<?= $film['Jadwal_tayang'];?>" required>
                    <label for="Tanggal">Tanggal Tayang</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                    <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" value="<?= $film['Jadwal_berakhir'];?>" required>
                    <label for="Tanggal">Tanggal Berakhir</label>
                    </div>
                </div>
            </div>
            <div class="mt-5">
            <button type="submit" class="btn btn-primary" name="Simpan" style="float: right;" 
            onclick ="return confirm('Konfirmasi kembali data film yang akan anda edit')">Simpan</button>
            </div>

        </form>
        
    </div>

<?php 
include 'layout/footer.php';
?>