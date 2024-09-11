<?php 
session_start();

include 'config/app.php';
include 'layout/header.php';

$Data_Film = select("SELECT * FROM film ORDER BY id_film DESC");
?>  
  
  <body>
    <div class="container mt-5">
        <h1>Now Playing</h1>
        <hr>
        <a href="form_tambah.php" class="btn btn-primary">+Tambah</a>
        <table class="table table-secondary table-bordered table-striped mt-3">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Judul Film</th>
                    <th>Produser</th>
                    <th>Sutradara</th>
                    <th>Harga</th>
                    <th>Durasi</th>
                    <th>Edit</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach($Data_Film as $film){ ?>
                <tr class="text-center">
                    <td><?= $no++; ?></td>
                    <td><?= $film['Judul_film']; ?></td>
                    <td><?= $film['Produser']; ?></td>
                    <td><?= $film['Sutradara']; ?></td>
                    <td>Rp<?= number_format($film['Harga'],0,',','.'); ?></td>
                    <td><?= $film['Durasi']; ?></td>
                    <td width=15%>
                        <a href="editfilm.php?id_film=<?= $film['id_film'];?>" class="btn btn-success">Edit</a>
                        <a href="hapusfilm.php?id_film=<?= $film['id_film'];?>" class="btn 
                        btn-danger" onclick ="return confirm('Konfirmasi kembali data film yang akan anda hapus')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


<?php 
include 'layout/footer.php';

?>