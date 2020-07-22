<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>convert the given number binary to decimal</title>
  </head>
  <body>
    <form class="" action="bintodec.php" method="post">
      <p>Enter the binary number: </p>
        <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $j = 0;
  $sum = 0;
  if($n != 0)
  {
  $i = $n % 10 ;
  if($i == 0 || $i == 1)
  {
  while($n != 0)
  {
  $i = $n % 10 ;
  $sum = $sum + $i * pow(2, $j) ;
  $n = $n / 10 ;
  $j++;
  }
  }
  }
  if($sum == 0){
  echo "<br>The number is not a binary number";
  }else{
  echo "<br>The equivalent decimal number is: ", $sum;
}
}
 ?>
