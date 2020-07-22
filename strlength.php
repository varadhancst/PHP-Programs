<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the length of given string</title>
  </head>
  <body>
    <form class="" action="strlength.php" method="post">
      <input type="text" name="word" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $word = $_POST['word'];
  echo "Entered word is : ", $word, "<br>";
  $result = strlen($word);
  echo "<br> The result is : ", $result;
}
 ?>
