<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/log.css">
    <title>Login Admin</title>
</head>

<body>

<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Admin</h2>
        <div class="text-center mb-5 text-dark">BestCare Beauty</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="../proseslog.php">

            <div class="text-center">
              <img src="../img/logoo.png"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center"><a href="dashboard.php" type="submit" class="btn btn-color px-5 mb-5 w-100">Login</a></div>
            <!-- <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="regadmin.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div> -->
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</body>

</html>