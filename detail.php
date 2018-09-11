<?php
include("data.php");
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <title><?php echo $shoestable[$_GET['product']]['nameshoes']; ?> | DistricBasket</title>
  <meta name="description" content="<?php echo $shoestable[$_GET['product']]['descshoes']; ?>">

  <?php
  include("header.php");
  ?>

  <div class="container containerfordetail pt-5">
    <div class="row pt-5">
      <div class="forimg col-10 col-sm-6 col-md-6 col-lg-6 mx-auto">
        <img class="sizeimg" alt="Image du produits détailler" <?php echo $shoestable[$_GET['product']]['srcimg']; ?>>
      </div>
      <div class="desc pl-3 col-10 col-sm-6 col-md-6 col-lg-6 mx-auto">
        <h1><?php echo $shoestable[$_GET['product']]['nameshoes']; ?></h1>
        <p><?php echo $shoestable[$_GET['product']]['descshoes'] ?></p>
        <p><?php echo "Prix: " . $shoestable[$_GET['product']]['priceshoes']; ?></p>
        <ul class="list-unstyled listfordetail">
          <?php $tablesize = $shoestable[$_GET['product']]['sizeshoes']?>
          <?php foreach ($shoestable[$_GET['product']]['sizeshoes'] as $key => $value) {
            echo "<li class='ml-1'>$tablesize[$key]</li>";
            }
          ?>
        </ul>
        <ul class="list-unstyled listforcolor">
          <?php $tablecolor = $shoestable[$_GET['product']]['colorshoes']?>
          <?php foreach ($shoestable[$_GET['product']]['colorshoes'] as $key => $value) {
            echo "<li class='ml-1' style='background-color: $tablecolor[$key]'></li>";
            }
          ?>
        </ul>
        <p><?php echo "Dispo: " . $shoestable[$_GET['product']]['disposhoes']; ?></p>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>
  <?php include('script.php') ?>
