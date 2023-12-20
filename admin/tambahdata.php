<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Produk</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH PRODUK
                    </div>
                    <div class="card-body">
                        <form action="../admin/simpan.php" method="POST">

                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="nama_barang" required placeholder="Masukkan Nama Produk" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" required placeholder="Masukkan Harga Produk" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" name="stok" required placeholder="Masukkan Stok Produk" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Produk" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" placeholder="Masukkan Gambar Produk" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>