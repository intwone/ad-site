<?php 
require_once '../controllers/config.php'; 

if(empty($_SESSION['userLogged'])) {
  ?>
  <script type="text/javascript">window.location.href="login.php";</script>
  <?php
  exit;
}
?>

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
    <div class="container-fluid">
      <div class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(113, 89, 193)">
        <div class="brand">
          <img src="../assets/images/brand.png" alt="Brand">
        </div>

        <div class="divisor"></div>

        <div class="menu-items">
          <?php if(isset($_SESSION['userLogged']) && !empty($_SESSION['userLogged'])): ?>
          <div class="style-text"><a href="">Meus Anúncios</a></div>
          <?php endif; ?>
          <div class="style-text"><a href="">Ajuda</a></div>
          <div class="style-text"><a href="">Chat</a></div>
        </div>

        <?php if(isset($_SESSION['userLogged']) && !empty($_SESSION['userLogged'])): ?>
          <div class="user-bar">
            <div class="user-photo"><img src="../assets/images/user1.png" alt=""></div>
            <div class="user-name">Cassio Oliveira Silva</div>
            <div class="user-logout">
              <a href="logout.php">
                <img src="../assets/images/sign-out.png" alt="">
                <small>Logout</small>
              </a>
            </div>
          </div>
        <?php else: ?>
          <div class="style-button">
            <div>
              <a href="login.php"><Button>Login</Button></a>
            </div>
            <div>
              <a href="register.php"><Button>Cadastrar</Button></a>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <div class="box-ads">
        <div class="list-ads">
          <div class="ads-new">Meus anúncios</div>
          <div class="ads-bar"></div>
          <div class="ads">
            <table class="table table-borderless table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Produtos</th>
                  <th scope="col">Título</th>
                  <th scope="col">Valor</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>

              <tbody>
              <!-- php commands start -->
              <?php
              require_once '../classes/Adverts.php';

              $newAd = new Adverts();
              $ads = $newAd->getMyadverts();

              foreach($ads as $ad):
              ?>
              <tr>
                <td><img src="" alt=""></td>
                <td><?php echo $ad['ads_title']; ?></td>
                <td><?php echo $ad['ads_value']; ?></td>
              </tr>
              <?php endforeach; ?>
              <!-- php commands finish -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <footer>
        <section>
          <div class="title-sendemail">
            <p>Recebe todos os anúncios da plataforma.</p>
          </div>
          <form class="send-email" action="">
            <div> 
              <input class="send-input" type="text" name="" placeholder="Digite seu email">
            </div>
            <div>
              <input class="search-icon" type="image" src="../assets/images/send-button.png">
            </div>
          </form>

          <div class="social">
            <div><a href="#"><i class="fa fa-facebook-f"></i></a></div>
            <div><a href="#"><i class="fa fa-instagram"></i></a></div>
            <div><a href="#"><i class="fa fa-twitter"></i></a></div>
            <div><a href="#"><i class="fa fa-youtube"></i></a></div>
            <div><a href="#"><i class="fa fa-linkedin"></i></a></div>
          </div>
        </section>
        <p>
          <div class="copyright">
            <strong>B&S Ads ©</strong>
            2019 - Todos os direitos reservados
          </div>
        </p>
      </footer>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
  </body>
</html>