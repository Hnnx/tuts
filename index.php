<?php

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">

    </style>
    <meta charset="utf-8">
    <title>MyPHPfile</title>
  </head>
  <body> 

    <h1>Products</h1>

    <ul>
      <?php foreach($products as $product){ ?>
        <h6><?php echo $product['name']; ?></h3>
        <p>€ <?php echo $product['price']; ?></p>
      <?php } ?>
    </ul>


<div>
  <ul>
    <?php foreach ($products as $product) { ?>
      <?php if ($product['price'] > 15) { ?>
        <li><?php echo $product['name'] ?></li>
      <?php } ?>
    <?php } ?>

  </ul>
</div>
  </body>
</html>
