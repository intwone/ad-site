<?php require_once '../src/controllers/config.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <title>B&S Ads</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/assets/css/index.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(113, 89, 193)">
        <div class="brand">
          <img src="../src/assets/images/brand.png" alt="">
        </div>

        <div class="divisor"></div>

        <div class="menu-items">
          <div class="style-text"><a href="">Meus anúncios</a></div>
          <div class="style-text"><a href="">Ajuda</a></div>
          <div class="style-text"><a href="">Chat</a></div>
          <div class="style-text"><a href="">Minha Conta</a></div>
        </div>

        <?php if(isset($_SESSION['userLogged']) && !empty($_SESSION['userLogged'])): ?>
          <div><i class="fa fa-cog"></i></div>
          <div>
            <div>FOTO</div>
            <div>NOME</div>
          </div>
          <div><i class="fa fa-sign-out-alt"></i></div>
        <?php else: ?>
          <div class="style-button">
            <div>
              <a href="../src/pages/login.php"><Button>Login</Button></a>
            </div>
            <div>
              <a href="../src/pages/register.php"><Button>Cadastrar</Button></a>
            </div>
          </div>
        <?php endif; ?>
      </div>