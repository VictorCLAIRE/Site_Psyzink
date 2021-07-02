<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon/favicon-32x32.png" rel="icon">
  <link href="assets/img/favicon/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="assets/img/favicon/favicon-32x32.png" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body id="page-top">
    
    <!-- Header-->
    <header>
        <?php
        require "menu.php";
        ?>
    </header>
    
    <!-- Content-->
    <div class="">
        <br>
        <?= $content ?>
    </div>

    <!-- Contact-->
    <div>
        <?php
        require "contactfoot.php";
        ?>
    </div>

    <!-- Footer-->
    <footer>
        <?php
        require "footer.php";
        ?>
    </footer>

</body>

</html>


