<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_barang = $_POST['nama_barang'];
$harga       = $_POST['harga'];
$stok        = $_POST['stok'];
$deskripsi   = $_POST['deskripsi'];
$picture     = $_POST['gambar'];

//query insert data ke dalam database
$query = "INSERT INTO barang (id_barang, nama_barang, harga, stok, deskripsi, picture) VALUES (0, '$nama_barang', '$harga', '$stok', '$deskripsi', '$picture')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if(mysqli_query($conn, $query)) {

    //redirect ke halaman index.php 
    header("location: dashboard.php");

} else {

    echo var_dump($query);
    echo "Data Gagal Disimpan!";

}

?>