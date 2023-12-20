<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">

    <div class="mt-3">
    <h3 class="text-center">Dashoard Admin</h3>
    </div>
    <div class="card mt-3">
  <div class="card-header bg-primary text white">
    Data Produk
  </div>
  <div class="card-body">
    <!-- Button trigger modal -->
    <button type="submit" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="modalTambah">
  Tambah Data
</button>

    <table class="table table-barderes table-striped table-hover">
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
                <a href="#" class="btn btn-warning">Ubah</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    </table>

    

<!-- awal Modal -->
<div class="modal fade " id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Data Produk</h5>
        <button a href="(halaman form mu) data" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a></button>
      </div>
      <div class="modal-body">
        <from method="POST" action="crudadmin.php">
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>