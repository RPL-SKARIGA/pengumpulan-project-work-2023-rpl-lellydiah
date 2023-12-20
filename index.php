<?php
include 'koneksi.php';
  $barang = $conn->query("SELECT * FROM barang");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body{
        background-color: #fffff0;
        font-family: 'Poppins' , sans-serif;
        font-size: 14px;
        color: #2D2D2D ;
      }
      .form-control{
          width: 350px;
      }

                .small-img {
              width: 200px; 
              height: 200px;
          }
          .img-categori{
            width: 50px;
          }
    </style>
</head>
<body>
<?php
 //ambil record dari database
$result = mysqli_query($conn,"SELECT * FROM barang");
$row = mysqli_fetch_assoc($result);
?>

<nav class="navbar navbar-expand-lg" style="background: #f1b3be;">
  <div class="container">
  <a class="navbar-brand"  style="color:#ffffff;" href="#">
      <img src="img/logoo.png" alt="" width="50" height="50"  class="me-2">
      <strong>BestCare Beauty</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <!-- <li class="nav-item">
          <a class="nav-link active" style="color:#ffffff;"  href="home.php">Home</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" style="color:#ffffff;" href=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color:#ffffff;" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#ffffff;" href="keranjang.php">Keranjang</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color:#ffffff;" data-bs-toggle="dropdown" aria-expanded="false">
           Akun
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" style="color:#ffffff;" href="profil.php">Profil</a></li>
            <li><a class="dropdown-item" style="color:#fffff;" href="#">Log Out</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Cari Barang" aria-label="Cari">
        <button class="btn btn-light" type="submit">Cari</button>
      </form>
    </div>
  </div>
</nav>
<div class="container py-4">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/5.png" class="d-block w-100" alt="...">
    </div>
    <div class="container">
  <div class="row">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="container">
  <div class="row">

    

  </div>
</div>
</div>
</div>
</div>
</div>
      <!-- Kategori -->

<div class="container">
  <div class="row">
  <?php foreach($barang as $b): ?>
  <div class="card col-sm-3" style="width: 18rem;">
      <img src="img/<?= $b['picture']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $b['nama_barang']; ?></h5>
        <p class="card-text"><?= $b['harga']; ?></p>
        <a href="detail.php" class="btn btn-primary">Detail</a>
      </div>
  </div>
  <?php endforeach; ?>
  </div>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>