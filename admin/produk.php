<?php
include '../koneksi.php';
//include '../admin/addp.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dash.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h2>BestCare Beauty</h2>
        </div>
        <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>&nbsp; <h6><a href="../admin/dashboard.php">Dashboard</a></h6></li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>&nbsp; <h6><a href="../admin/produk.php">Product</a></h6></li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>&nbsp; <h6><a href="../admin/user.php">User</a></h6></li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
    
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button> 
                </div>
                
                <div class="img-case">
                    <img src="../img/user.png" alt="" class="profil">
                </div>
            </div>
        </div>

        <div class="content">
            
            <div class="card-lel">
                <div class="content-2">
                    <div class="new-produk">
                        
                        <div class="title">
                            <h2>New Produk</h2>
                            <a href="../add.php" role="btn" class="btn btn-success mb-3" >Tambah Data</a>
                            <a href="#" class="btn">View All</a>
                        </div>
                        <table>
                            
                            <tr>
                                <th>No.</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                            <tr>
                            <td>1</td>
                                 <td>225</td>
                                 <td>Parfum Evangeline</td>
                                 <td>Rp.28.000</td>
                                 <td>100</td>
                                <td>
                                    <a href="editp.php" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>                            
                                </tr>
                        </table>
                    </div>
                    <!-- <div class="recent-payment">
                        <div class="title">
                            <h2>Recent Payment</h2>
                            <a href="#" class="btn">View All</a>
                        </div>
                        <table>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </tr>
                        </table>
                    </div> -->
                </div>
            </div>

        </div>
    </div>
</body>
</html>