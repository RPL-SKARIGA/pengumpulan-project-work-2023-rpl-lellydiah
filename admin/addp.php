<?php
include '../../connect/koneksi.php';

$code = $_POST['code'];
$nama = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$kategori = $_POST['ka$kategori'];

$name = $_FILES['file']['name'];
$target_dir = "../../product/upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$extensions_arr = array("jpg", "jpeg", "png", "gif");
if (in_array($imageFileType, $extensions_arr)) {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
        $query = "INSERT INTO barang
                        VALUES('$id_barang', '$nama_barang', '$harga', '$stok' , '$deskripsi' , '$picture')";
        mysqli_query($conn, $query);
    }
}
header('Location: produk.php');
