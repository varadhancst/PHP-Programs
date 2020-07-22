<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>To convert uppercase characters to lowercase</title>
  </head>
  <body>
    <form class="" action="strconv.php" method="post">
      <input type="text" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  echo "you entered: ", $n,"<br>";
  echo strtolower($n),"<br>";
  }

 ?>
