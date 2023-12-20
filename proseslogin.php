<?php
session_start();
include 'cruduser.php'; // Sesuaikan dengan file yang berisi fungsi CRUD user

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        // Fungsi untuk mencari user berdasarkan username
        $user = cariuserdariusername($username);

        // Cek apakah user ditemukan dan password cocok
        if ($user && password_verify($password, $user['password'])) {
            // Jika cocok, set session dan redirect ke halaman yang diinginkan (misalnya index.php)
            $_SESSION['username'] = $user['username'];
            $_SESSION['kode'] = $user['id'];
            header("Location: index.php");
        } else {
            echo "<script>
            alert('Username atau password salah');
            window.location='login.php'
            </script>";
            // Atau lakukan sesuatu seperti menampilkan pesan error pada halaman login
        }
    } else {
        $error = "Isian tidak lengkap";
        // Pesan error jika form tidak lengkap, seperti username atau password kosong
        // Atau lakukan sesuatu seperti menampilkan pesan error pada halaman login
    }
}
?>
