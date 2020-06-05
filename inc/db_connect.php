<?php $povezava = mysqli_connect('localhost','nejc01','phppizzatuts','vilka_pizza');

if(!$povezava){
  echo "Connection error: " . mysqli_connect_error($povezava);
}
 ?>
