<?php
require 'functions.php';

if (isset($_POST['register'])) {

  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  $data = [
    'username' => $username,
    'password' => $password
  ];

  registrasi($data);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">

</head>

<body class="bg-primary">

  <div class="container col-6 mt-5">
    <div class="card rounded-0">
      <div class="card-header text-center">
        <h3>Registrasi</h3>
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control rounded-0" id="username" autofocus required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control rounded-0" id="password">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control rounded-0" id="password">
          </div>
          <br>
          <button type="submit" name="register" class="btn btn-primary float-right rounded-0 mt-n2">Registrasi</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>