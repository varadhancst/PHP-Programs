<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>To check the given character is vowel or not</title>
  </head>
  <body>
    <form class="" action="strvowel.php" method="post">
      <p>Enter the character: </p>
      <input type="text" name="c" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $c = $_POST['c'];
  
  if (strlen($c)>1) {
    echo "error";
  }
  elseif ($c == 'a' || $c == 'e' || $c == 'i' || $c == 'o' || $c == 'u' || $c == 'A' || $c == 'E' || $c == 'I' || $c == 'O' || $c == 'U') {
    echo $c, " is a vowel";
  }
  else {
    echo $c, " is not a vowel";
  }
}
 ?>
