<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/duit.jpg">
  <title>E-kas</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    body {
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('img/backrr.webp');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
   
      z-index: -1;
    }

    .card {
      max-width: 500px;
      width: 100%;
      border-radius: 15px;
      background: rgba(255, 255, 255, 0.8); /* Memberikan sedikit transparansi pada kartu */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  <div class="background"></div>

  <div class="card o-hidden border-0 shadow-lg my-5">
    <!-- Nested Row within Card Body -->
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4"><b>Selamat Datang!</b></h1>
      </div>
      <form class="user" action="proses-login.php" method="post">
        <div class="form-group">
          <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email...">
        </div>
        <div class="form-group">
          <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password..">
        </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Ingat akun</label>
          </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Masuk">
      </form>
      <hr>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
