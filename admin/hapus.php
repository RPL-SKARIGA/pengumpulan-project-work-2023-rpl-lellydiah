<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM barang WHERE id_barang = '$id'";

if($conn->query($query)) {
    header("location: dashboard.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>





