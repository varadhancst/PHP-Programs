<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form class="" action="inttochar.php" method="post">
        <p>Enter a number (1 to 10): </p>
        <input type="number" name="n" value="">
        <input type="submit" name="submit" value="submit">
      </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
$n = $_POST['n'];
echo "you have entered: ", $n;
switch ($n) {
case 1:
echo "<br>ONE";
break;
case 2:
echo "<br>TWO";
break;
case 3:
echo "<br>THREE";
break;
case 4:
echo "<br>FOUR";
break;
case 5:
echo "<br>FIVE";
break;
case 6:
echo "<br>SIX";
break;
case 7:
echo "<br>SEVEN";
break;
case 8:
echo "<br>EIGHT";
break;
case 9:
echo "<br>NINE";
break;
case 10:
echo "<br>TEN";
break;
default:
echo "Invalid input. ";
break;
  }
}
 ?>
