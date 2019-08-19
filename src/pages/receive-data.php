<?php
require_once '../classes/Users.php';


$user = new Users();

$name      = addslashes(trim($_POST['name']));
$email     = addslashes(trim($_POST['email']));
$telephone = addslashes(trim($_POST['telephone']));
$password1 = md5($_POST['password1']);
$password2 = md5($_POST['password2']);

if($user->register($name, $email, $telephone, $password1)) {
  ?>
  <!-- message alert success -->
  <!doctype html>
  <html lang="en">
    <head>
      <title>B&S Ads</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/index.css">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats!</strong> Your email has been registered sucessfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <script src="..assets/js/jquery.min.js"></script>
      <script src="..assets/js/bootstrap.bundle.min.js"></script>
      <script src="..assets/js/script.js"></script>
    </body>
  </html>
  <?php
} else {
  ?>
  <!-- message alert warning -->
  <!doctype html>
  <html lang="en">
    <head>
      <title>B&S Ads</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/index.css">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Attencion!</strong> Your email already axist!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <script src="..assets/js/jquery.min.js"></script>
      <script src="..assets/js/bootstrap.bundle.min.js"></script>
      <script src="..assets/js/script.js"></script>
    </body>
  </html>
  <?php
}
?>