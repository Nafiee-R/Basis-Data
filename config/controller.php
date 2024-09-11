<?php
// Menampilkan data film
function select($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// Menambahkan data film
function Tambah_film($post)
{
    global $koneksi;

    $judul_film = $post['Judul_Film'];
    $Produser = $post['Produser'];
    $Sutradara = $post['Sutradara'];
    $Harga = $post['Harga'];
    $Durasi = $post['Durasi'];
    $tgl_tayang = $post['tgl_tayang'];
    $tgl_akhir = $post['tgl_akhir'];


    // Query menambahkan data
    $query = "INSERT INTO FILM VALUES (null, '$judul_film', '$Produser', '$Sutradara', '$Harga', '$Durasi', '$tgl_tayang', '$tgl_akhir')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);

}

//Edit data film
function Edit_film($post)
{
    global $koneksi;

    $id_film = $post['id_film'];
    $judul_film = $post['Judul_Film'];
    $Produser = $post['Produser'];
    $Sutradara = $post['Sutradara'];
    $Harga = $post['Harga'];
    $Durasi = $post['Durasi'];
    $tgl_tayang = $post['tgl_tayang'];
    $tgl_akhir = $post['tgl_akhir'];

    // Query meng-update data film
    $query = "UPDATE film SET Judul_film = '$judul_film', Produser = '$Produser', Sutradara = '$Sutradara', Harga = '$Harga', Durasi = '$Durasi', Jadwal_tayang = '$tgl_tayang', Jadwal_berakhir = '$tgl_akhir'
    WHERE id_film = $id_film";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// menghapus data film
function hapus_film($id_film)
{
    global $koneksi;

    //Query menghapus data film
    $query = "DELETE FROM Film WHERE id_film = $id_film";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}