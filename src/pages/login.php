<!doctype html>
<html lang="en">
  <head>
    <title>B&S Ads</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
      <div class="login-body">
        <form class="form-body" method="POST">
          <div class="login-title">Acessar conta</div>

          <!-- php commands start -->
          <?php
          require_once '../classes/Users.php';

          $user = new Users();

          if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email     = addslashes(trim($_POST['email']));
            $password  = md5($_POST['password']); 

            if($user->userLogin($email, $password)) {
              header("Location: panel-user.php");
            } else {
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Email inexistente! <br/>
                <a href="login.php" class="alert-link">Verifique se digitou os dados corretamente.</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
            }
          }
          ?>
          <!-- php commands finish-->

          <input class="input" type="email" name="email" placeholder="Email" required />
          <i class="fa fa-envelope icon"></i>

          <input class="input" type="password" name="password" maxlength="8" placeholder="Password" required />
          <i class="fa fa-lock icon"></i>

          <div class="button-submit"><button>Login</button></div>

          <div class="forgot-user-password">
            <span>Forgot</span>
            <a href="reset.php">Username / Password?</a>
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