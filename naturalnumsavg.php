<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the average of n natural numbers</title>
  </head>
  <body>
    <form class="" action="naturalnumsavg.php" method="post">
      <input type="number" name="limit" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $limit = $_POST['limit'];
  echo "you have entered this number:  ", $limit, "<br>";
  $sum = 0;
    for ($i=1; $i <= $limit ; $i++) {
      echo $i, "<br>";
    $sum = $sum + $i;

  }
  echo "Total of natural nums :", $sum, " and divided by limit " , $limit;
  echo "<br>" ,$sum/$limit;
}
 ?>
