<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>print the array in reverse order</title>
  </head>
  <body>
    <form class="" action="arrrev.php" method="post">
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
    echo "<br>The reversed array is:  <br>";
    for ($i=count($result)-1; $i>=0; $i--) {
      echo $result[$i],"\t";
    }
}
 ?>
