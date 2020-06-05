<?php
include('inc/db_connect.php');

function printr($data) {
   echo "<pre>";
      print_r($data);
   echo "</pre>";
}

if(isset($_POST['delete'])){

  $id_to_del = mysqli_real_escape_string($povezava, $_POST['id_to_delete']);

  $sql = "DELETE FROM pizzas WHERE id = $id_to_del";

  if(mysqli_query($povezava, $sql)){

    header('Location: index.php');

  } else{
    echo "Query error: " . mysqli_error($povezava);
  }

}


//check GET request ID parameter

if(isset($_GET['id'])){

  $id = mysqli_real_escape_string($povezava, $_GET['id']);

  //make sql
  $sql = "SELECT * FROM pizzas WHERE id = $id";

  //get query results
  $result = mysqli_query($povezava, $sql);

  // FETCH results
  $pizza = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($povezava);

}

 ?>


 <!DOCTYPE html>
 <html>

 <?php include('inc/header.php'); ?>

 <div class="container center">
   <?php if($pizza): ?>

     <h4><?php echo htmlentities($pizza['title']); ?></h4>
     <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
     <p><?php echo $pizza['created_at']; ?></p>
     <h5>Ingredients:</h5>
     <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

     <!-- DELETE FORM -->

     <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
       <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
     </form>




   <?php else: ?>

     <h5>No such pizza exists</h5>

   <?php endif; ?>

 </div>
 <?php include('inc/footer.php'); ?>

 </html>
