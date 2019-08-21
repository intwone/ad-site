
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
    <div class="img">
      <?php
      header('Content-type: image/jpeg');
      $image = new Imagick('user.jpg');
      $image->thumbnailImage(80, 0);
      echo $image;
      ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../src/assets/js/jquery.min.js"></script>
    <script src="../src/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../src/assets/js/script.js"></script>
  </body>
</html>