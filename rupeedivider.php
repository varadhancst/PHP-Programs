<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>rupeedivider</title>
  </head>
  <body>
    <form class="" action="rupeedivider.php" method="post">
      <p>Enter how much amount to be calculated for maths:</p>
      <input type="number" name="rupee" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $rupee = $_POST['rupee'];
  echo $rupee;
  while ($rupee >= 1) {
    $rupee =$rupee - ($rupee % 1);
    echo "<br> The no of one rupees are : " , abs($rupee / 1);
    break;
  }
  while ($rupee >= 2) {
    $rupee =$rupee - ($rupee % 2);
    echo "<br> The no of two rupees are : " , abs($rupee / 2);
    break;
  }
  while ($rupee >= 5) {
    $rupee =$rupee - ($rupee % 5);
    echo "<br> The no of five rupees are : " , abs($rupee / 5);
    break;
  }
  while ($rupee >= 10) {
    $rupee =$rupee - ($rupee % 10);
    echo "<br> The no of ten rupees are : " , abs($rupee / 10);
    break;
  }
  while ($rupee >= 20) {
    $rupee =$rupee - ($rupee % 20);
    echo "<br> The no of twenty rupees are : " , abs($rupee / 20);
    break;
  }
  while ($rupee >= 50) {
    $rupee =$rupee - ($rupee % 50);
    echo "<br> The no of fifty rupees are : " , abs($rupee / 50);
    break;
  }
  while ($rupee >= 100) {
    $rupee =$rupee - ($rupee % 100);
    echo "<br> The no of hundred rupees are : " , abs($rupee / 100);
    break;
  }
  while ($rupee >= 200) {
    $rupee =$rupee - ($rupee % 200);
    echo "<br> The no of two hundred rupees are : " , abs($rupee / 200);
    break;
  }
  while ($rupee >= 500) {
    $rupee =$rupee - ($rupee % 500);
    echo "<br> The no of five hundred rupees are : " , abs($rupee / 500);
    break;
  }
  while ($rupee >= 2000) {
    $rupee =$rupee - ($rupee % 2000);
    echo "<br> The no of two thousands rupees are : " , abs($rupee / 2000);
    break;
  }
}
 ?>
