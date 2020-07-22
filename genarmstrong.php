<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program to generate armstrong numbers</title>
  </head>
  <body>
    <form class="" action="genarmstrong.php" method="post">
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">

    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  echo "The armstrong numbers are: ";
  for($i = 0 ; $i <= $n ; $i++)
  {
  $a = $i ;
  $s = 0 ;
  while($a > 0)
  {
  $r = $a % 10 ;
  $s = $s + ($r * $r * $r) ;
  $a = $a / 10 ;
  }
  if($i == $s)
  echo $i, "<br>";
  }

}
 ?>
