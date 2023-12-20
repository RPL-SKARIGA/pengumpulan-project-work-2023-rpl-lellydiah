<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Keranjang</title>
</head>
<body>

    <div class="container mt-5">


      <div class="row mb-2">
        <div class="col">
          <h4>Daftar Produk</h4>
        </div>
        <div class="col">
          <form class="form-inline pull-right" action="" method="GET">
            <div class="form-group mx-sm-0 mb-2">
              <input type="text" name="cari" class="form-control" placeholder="Cari Produk">
            </div>
            <button type="submit" class="btn btn-success mb-2">Cari</button>
          </form>
        </div>
      </div>

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Pembelian</th>
          </tr>
        </thead>
        <tbody>


            <form method="POST" action="">
              <input type="hidden" name="id_produk" value="<?= $dt['id']; ?>"></input>
              <tr>
                <td>Pixy Lipcream</td>
                <td>50.000</td>
                <td>100</td>
                <td width="106">
                  <input class="form-control form-control-sm" type="number" name="pembelian" value="1" min="1" max=""></td>
                  
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">
                      <i class="fa fa-shopping-cart"></i>
                    </button>
                  </td>
                </tr>
              </form>
          </tbody>
        </table>

        <a href="index.php"><button class="btn btn-danger">Lihat Laporan</button></a>
      </div>







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>