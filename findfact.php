<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Find the factorial for given number</title>
  </head>
  <body>
    <form class="" action="findfact.php" method="post">
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $s = 0;
  $t = 1;
  for ($i=$n; $i>0; $i--) {
    $s = $i;
    $t = $t * $s;
    echo $i ,"<br>";
  }
  echo "The factorial of ", $n , " is equal to ",$t;
}
 ?>
