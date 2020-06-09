<?php

function printr($data) {
   echo "<pre>";
      print_r($data);
   echo "</pre>";
}

include("inc/db_connect.php");

$sql = 'SELECT title,ingredients,id FROM pizzas ORDER BY created_at';
$result = mysqli_query($povezava, $sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_free_result($result);
mysqli_close($povezava);


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include ("inc/header.php"); ?>

<h4 class="center grey-text">Pizzas!</h4>
<div class="container">
  <a href="sandbox.php">SB</a>
  <div class="row">

    <?php foreach($pizzas as $pizza): ?>

      <div class="col s6 m3">
        <div class="card z-deptho-0">
          <img src="img/pizza.svg" class="pizza" alt="">
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
            <ul>
              <?php foreach( explode(',' , $pizza['ingredients']) as $ing  ): ?>
                <li><?php echo htmlspecialchars($ing); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="card-action right-align">
            <a class="brand-text" href="detail.php?id=<?php echo $pizza['id']?>">MORE INFO</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?php include ('inc/footer.php'); ?>
</html>
