<?php
include("data.php");
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <title>Accueil | DistricBasket</title>
  <meta name="description" content="Site de vente de chaussures de Sneakers (Basket de ville)">

<?php include('header.php') ?>

<?php
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
  <?php include('script.php') ?>
