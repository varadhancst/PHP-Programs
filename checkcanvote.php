<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>check the given age is eligible for vote</title>
  </head>
  <body>
    <form class="" action="checkcanvote.php" method="post">
      <p>Enter the age:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  if ($n >= 18) {
    echo "<br>The person is eligible to vote : ", $n;
  }else {
    echo "<br>The person is not eligible to vote : ", $n;
  }
}

 ?>
