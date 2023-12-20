<?php
include 'koneksi.php';

$kode = mysqli_real_escape_string($conn,$_GET['nama_barang']); //ambil record dari database
$result = mysqli_query($conn,"SELECT * FROM barang WHERE id_barang = '$kode'");
$row = mysqli_fetch_assoc($result);
?>
<div class="container">
    <h2 style="width: 100%; border-bottom: 4px solid #A4BC92"><b>Detail produk</b></h2>
    <div class="row">
    
        <div class="col-md-4">
            
        </div>
        <div class="col-md-8">
            <form action="admin/add.php" method="GET">
                <input type="hidden" name="id_barang" value="<?= $_SESSION['kode'];?>"  >
                <input type="hidden" name="produk" value="<?= $kode; ?>">
                <input type="hidden" name="hal" value="2">
                <table border="1" class="table table-striped">
                    <tbody>
                    <tr>
                            <td><b>No</b></td>
                            <td><?php $row['id_barang']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Nama</b></td>
                            <td><?php $row['nama_barang']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Harga</b></td>
                            <td><?php $row['harga']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Deskripsi</b></td>
                            <td><?php $row['deskipsi']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Stok</b></td>
                            <td><?php $row['stok']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Jumlah</b></td>
                            <td><input class="form-control" type="number" min="1" name="jml" value="1" style="width: 155px;"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>Tambahkan Ke Keranjang</button>
                <a href="index.php" class="btn btn-warning">Kembali Belanja</a>
        </div>
            </form>
    </div>
</div> 
<br>
<br>

<?php
//Jadilah pahlawan di dalam hidupmu sendiri, dengan menolak godaan korupsi dan memilih jalan kejujuran. Kamu dapat menjadi contoh inspiratif bagi orang lain."
?>