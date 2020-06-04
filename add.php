<?php

$errors = array('email' => '', 'title' => '', 'ingredients'=> '' );

if(isset($_POST['submit'])){

  //Chek Email
  if(empty($_POST['email'])){
    $errors['email'] = "An email is required <br>";
  } else{
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] =  "Must be a valid email address";
    }
  }

  //Chek title
  if(empty($_POST['title'])){
    $errors['title'] = "A title is required <br>";
  } else{
    $title = $_POST['title'];
    if(! preg_match( '/^[a-zA-Z\s]+$/' ,$title )){
      $errors['title'] =  "Title must be letters and spaces only";
    }
  }

  //Chek Ing
  if(empty($_POST['ingredients'])){
    $errors['ingredients'] = "An ingredient is required <br>";
  } else{
    $ingredients = $_POST['ingredients'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
      $errors['ingredients'] = "Ingredients must be comma separated";
    }
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include ("inc/header.php"); ?>

<section class="container grey-text">
  <h4 class="center">Add a Pizza</h4>
  <form class="white" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Your Email</label>
    <input type="text" name="email" placeholder="example@mail.com">
    <div class="red-text"><?php echo $errors['email']; ?>
    </div>
    <label>Pizza Title</label>
    <input type="text" name="title" placeholder="">
    <div class="red-text"><?php echo $errors['title']; ?>
    </div>
    <label>Ingredients</label>
    <input type="text" name="ingredients" placeholder="">
    <div class="red-text"><?php echo $errors['ingredients']; ?>
    </div>

    <div class="center">
      <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">

    </div>



  </form>

</section>


<?php include ('inc/footer.php'); ?>

</html>
