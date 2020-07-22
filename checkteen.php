<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>check the given age is teen or not</title>
  </head>
  <body>
    <form class="" action="checkteen.php" method="post">
      <p>Enter the age:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  if ($n >= 13 && $n<=19) {
    echo "<br>The person is in teen age : ", $n;
  }else {
    echo "<br>The person is not in teen age: ", $n;
  }
}

 ?>
