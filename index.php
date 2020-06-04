<?php

function printr($data) {
   echo "<pre>";
      print_r($data);
   echo "</pre>";
}

//connect to SQLiteDatabase
$conn = mysqli_connect('localhost','nejc01','phppizzatuts','vilka_pizza');


if(!$conn){
  echo "Connnection error:" . mysqli_connect_error();
}

// wirte query for all pizzas
$sql = 'SELECT title,ingredients,id FROM pizzas ORDER BY created_at';

// make query and get result
$result = mysqli_query($conn, $sql);

//Feth the resulting rows in an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free resulsts / close connection
mysqli_free_result($result);
mysqli_close($conn);

//printr($pizzas);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include ("inc/header.php"); ?>

<h4 class="center grey-text">Pizzas!</h4>
<div class="container">

  <div class="row">
    <?php foreach($pizzas as $pizza){ ?>
      <div class="col s6 m3">
        <div class="card z-depth-0">
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
          <div> <?php echo htmlspecialchars($pizza['ingredients']); ?></div>
          </div>
          <div class="card-action right-align">
            <a href="#" class="brand-text">more info</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>


<?php include ('inc/footer.php'); ?>

</html>
