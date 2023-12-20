<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lakukan koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbkosmetik";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil nilai yang dikirim dari formulir
    $id_produk = $_POST['id'];
    $nama_produk = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
   // $picture = $_POST['picture'];

    // Validasi data (contoh sederhana, sesuaikan dengan kebutuhan)
    if (empty($nama_produk) || empty($harga) || empty($stok) || empty($deskripsi)) {
        echo "Semua field harus diisi!";
    } else {
        // Lakukan update ke database
        $sql = "UPDATE barang SET nama_barang='$nama_produk', harga='$harga', stok='$stok', deskripsi='$deskripsi' WHERE id_barang='$id_produk'";

        if ($conn->query($sql) === TRUE) {
            echo "Produk berhasil diupdate";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Tutup koneksi ke database
    $conn->close();
    header("Location: dashboard.php");
}
?>
