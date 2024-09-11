<?php
include 'config/app.php';

//menerima id film yg mau dihapus oleh admin
$id_film = (int)$_GET['id_film'];

if(hapus_film($id_film)>0){
    echo "<script>
            alert('Film berhasil dihapus');
            document.location.href='datafilm.php'
         </script>";
} else {
    echo "<script>
            alert('Film gagal dihapus');
            document.location.href='datafilm.php'
         </script>";
}