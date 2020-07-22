<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program to generate prime numbers</title>
  </head>
  <body>
    <form class="" action="genprime.php" method="post">
      <p>Enter the number: </p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
echo "The prime numbers are: ";
  for ($i=1; $i <= $n ; $i++) {
    if($i <= 3)
{
echo "\t", $i;
}
else
{
for ($j = 2; $j <= $i / 2 ; $j++)
{
if ($i % $j == 0)
goto loop;
}
echo "\t", $i;
loop : ;
}
  }
}
 ?>
