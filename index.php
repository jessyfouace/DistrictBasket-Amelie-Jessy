<!doctype html>
<html class="no-js" lang="fr">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
  <link href="/bootstrap4-glyphicons/css/bootstrap-glyphicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <?php
  include("header.php");
  ?>

  <?php
  $produitone = array(
    'imgsrc' => "img/logobasket.png",
    'nom' => "Basket1",
    'desc' => "desc basket1",
    'prix' => "20€",
    'taille' => "40" + "41" + "42",
    'color' => "blue" + "red" + "black");

  $produittwo = array(
    'imgsrc' => "img/logobasket.png",
    'nom' => "Basket2",
    'desc' => "desc basket2",
    'prix' => "20€",
    'taille' => "40" + "41" + "42",
    'color' => "blue" + "red" + "black");

  $produittree = array(
    'imgsrc' => "img/logobasket.png",
    'nom' => "Basket3",
    'desc' => "desc basket3",
    'prix' => "20€",
    'taille' => "40" + "41" + "42",
    'color' => "blue" + "red" + "black");

  $produitfor = array(
    'imgsrc' => "img/logobasket.png",
    'nom' => "Basket4",
    'desc' => "desc basket4",
    'prix' => "20€",
    'taille' => "40" + "41" + "42",
    'color' => "blue" + "red" + "black");
  ?>

  <a class="mt-5" href="detail.php?product=<?php echo $produitone ?>">
    <img class="mt-5 pt-5" alt="Photo basket" src="img/logobasket.png">
  </a>

  <?php
  include("footer.php");
  ?>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
