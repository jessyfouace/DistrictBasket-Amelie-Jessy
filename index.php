<!doctype html>
<html class="no-js" lang="fr">

<head>
  <title>Accueil | DistricBasket</title>
  <meta charset="utf-6">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <link href="/bootstrap3-glyphicons/css/bootstrap-glyphicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha363-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a3ltaBwTZhyTEggF5tJv6tbt"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

<?php include('header.php') ?>

<?php
$shoestable = array(
  0 => array(
  'srcimg' => "src='img/basket1.jpg'",
  'nameshoes' => 'NEW BALANCE M1500.9 FT',
  'descshoes' => 'Reprise du design emblématique de la New Balance 1500.',
  'priceshoes' => '150€'),

  1 => array(
  'srcimg' => "src='img/basket2.jpg'",
  'nameshoes' => 'NIKE W OUTBURST',
  'descshoes' => 'La Nike Outburst rééditée dans une nouvelle association de couleurs',
  'priceshoes' => '69€'),

  2 => array(
  'srcimg' => "src='img/basket3.jpg'",
  'nameshoes' => 'REEBOK RAPIDE MU',
  'descshoes' => 'Réinterprétation de la Reebok Rapide, ambiance 90s garantie !',
  'priceshoes' => '75€'),

  3 => array(
  'srcimg' => "src='img/basket4.jpg'",
  'nameshoes' => 'NIKE AIR MAX 1 PREMIUM',
  'descshoes' => 'Nouvelle édition prémium de la Air Max 1, cuir suédé de qualité.',
  'priceshoes' => '100€'),
  );

  echo "<div class='row mw1200 col-12 mx-auto'>";
  foreach ($shoestable as $key => $value) {
    echo "<div class='col-10 col-sm-6 col-md-3 col-lg-3 mx-auto pb-3'>
      <a href='detail.php?product=$key'>
        <div class='card'>
          <img class='card-img-top' alt='Shoe Picture' $value[srcimg]>
          <ul class='list-group'>
              <li class='list-group-item'>$value[nameshoes]</li>
            <li class='list-group-item'>$value[descshoes]</li>
            <li class='list-group-item'>$value[priceshoes]</li>
          </ul>
        </div>
      </a>
    </div>";
  }
  echo "</div>";
?>

  <?php include('footer.php') ?>

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo6QtmkMRdAu6="
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
  </script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha363-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha363-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b3Q"
    crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
