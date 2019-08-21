<!doctype html>
<html lang="en">
  <head>
    <title>B&S Ads</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/register.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
      <div class="register-body">
        <form class="form-body" method="POST">
          <div class="register-title">Criar conta</div>

          <!-- php commands start -->
          <?php
          require_once '../classes/Users.php';

          $user = new Users();

          if(isset($_POST['name']) && !empty($_POST['name'])) {
            $name      = addslashes(trim($_POST['name']));
            $email     = addslashes(trim($_POST['email']));
            $telephone = addslashes(trim($_POST['telephone']));
            $password1 = md5($_POST['password1']);
            $password2 = md5($_POST['password2']);

            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password1'])) {
              if($user->register($name, $email, $telephone, $password1)) {
                ?>
                <div class="alert alert-success" role="alert">
                  Cadastro efetuado com sucesso! <br/>
                  <a href="login.php" class="alert-link">Ir para a página de login.</a>
                </div>
                <?php
              } else {
                ?>
                <div class="alert alert-warning" role="alert">
                  Email já cadastrado! <br/>
                  <a href="login.php" class="alert-link">Ir para a página de login.</a>
                </div>
                <?php
              }
            }
          }
          ?>
          <!-- php commands finish-->

          <input class="input" type="text" name="name" placeholder="Name" required />
          <i class="fa fa-user icon"></i>

          <input class="input" type="email" name="email" placeholder="Email" required />
          <i class="fa fa-envelope icon"></i>

          <input class="input" type="text" name="telephone" placeholder="Telephone" required />
          <i class="fa fa-phone icon"></i>

          <input class="input" type="password" name="password1" maxlength="8" placeholder="Password" required />
          <i class="fa fa-lock icon"></i>

          <input class="input" type="password" name="password2" maxlength="8" placeholder="Re-password" required />
          <i class="fa fa-lock icon"></i>

          <div class="button-submit">
            <button>Cadastrar</button>
          </div>

          <div class="signup-social">
            <div><small>Sign up with</small></div>
            <div class="signup-icons">
              <div><a href="#"><img src="../assets/images/facebook.png" alt="Facebook"></a></div>
              <div><a href="#"><img src="../assets/images/google-plus.png" alt="Google Plus"></a></div>
              <div><a href="#"><img src="../assets/images/twitter.png" alt="Twitter"></a></div>
              <div><a href="#"><img src="../assets/images/linkedin.png" alt="Linkedin"></a></div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="..assets/js/jquery.min.js"></script>
    <script src="..assets/js/bootstrap.bundle.min.js"></script>
    <script src="..assets/js/script.js"></script>
  </body>
</html>