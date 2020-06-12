#email sender php

<?php

$emAddress = $emSubject = $emBody = '' ;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email Sender</title>
  </head>
  <body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="text" name="username" value=""><br/>
      <textbox rows="4" cols="50" name="emSubject">
    </form>

  </body>
</html>
