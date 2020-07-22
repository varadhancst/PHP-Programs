<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the sum of positive and negative elements of an array</title>
  </head>
  <body>
    <form class="" action="sumarrposneg.php" method="post">
      <p>Enter the elements in this format(123/-123/123/-123): </p>
      <input type="text" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
    $n = $_POST['n'];
    $sumpos = 0;
    $sumneg = 0;
    $result = (explode("/",$n));
    print_r($result);
    echo "<br>";
    echo "<br>The positive elements of array are: <br>";
    for ($i=0; $i<count($result); $i++) {
      if ($result[$i]>0) {
        $sumpos = $sumpos + $result[$i];
        echo $result[$i],"<br>";
      }
      }

    echo "<br>The negative elements of array are: <br>";
    for ($i=0; $i<count($result); $i++) {
      if ($result[$i]<0) {
        $sumneg = $sumneg + $result[$i];
        echo $result[$i],"<br>";
      }
    }
    echo "<br> The sum of positive elements of array is: ", $sumpos;
    echo "<br> The sum of positive elements of array is: ", $sumneg;
}
 ?>
