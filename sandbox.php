<?php


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="text" name="name">
      <select name="gender">
        <option value="bear">bear</option>
        <option value="male">male</option>
        <option value="female">female</option>
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
