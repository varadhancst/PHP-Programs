<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>convert the given number dec to binary</title>
  </head>
  <body>
    <form class="" action="dectobin.php" method="post">
      <p>Enter a decimal number: </p>
        <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>


<?php
if (isset($_POST['submit'])) {
  $b = array(20);
  $c = 0;
  $n = $_POST['n'];
  echo "you have entered: ", $n;
  while ($n > 0) {
    $r = $n % 2;
    $b[$c] = $r;
    $n = $n / 2;
    $c+=1;
      }
    echo "<br>The binary equiivalent is: ";
    for($i = $c-1; $i >= 0 ; $i--){
    echo $b[$i];}

}
 ?>
