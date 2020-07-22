<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find negative elements of array</title>
  </head>
  <body>
    <form class="" action="arrneg.php" method="post">
      <p>Enter the elements in this format(123/-123/123/-123): </p>
      <input type="text" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
    $n = $_POST['n'];
    $result = (explode("/",$n));
    print_r($result);
    echo "<br>The negative elements of array are: <br>";
    for ($i=0; $i<count($result); $i++) {
      if ($result[$i]<0) {
        echo $result[$i],"<br>";
      }
    }
}
 ?>
