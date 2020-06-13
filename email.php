<?php

$emAddress = $emSubject = $emBody = $emHeader = '' ;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email Sender</title>
    <style media="screen">

    .mailBox{
      display: block;
      width: 50%;
      margin: 0 auto;
    }
    input[type=text]{
      margin: 5px 0px;
    }
    textarea{
      margin: 5px 0px;
    }

    </style>
  </head>
  <body>

<div class="mailBox">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="text" name="username" value="" placeholder="Recipient"><br/>
      <input type="text" name="subject" value="" placeholder="Subject"><br/>
      <textarea name="name" rows="8" cols="80" placeholder="Mail body"></textarea>
    </form>
  </div>

  </body>
</html>
