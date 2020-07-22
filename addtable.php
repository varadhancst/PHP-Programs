<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>addition table</title>
  </head>
  <body>
    <form class="" action="addtable.php" method="post">
      <p>Enter the limit:</p>
      <input type="number" name="limit" value="">
      <p>Enter the table series:</p>
      <input type="number" name="table" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $limit = $_POST['limit'];
  $table = $_POST['table'];
  for ($i=1; $i <= $limit; $i++) {
    echo $i, "+ ", $table, "= " , $i + $table ," <br>" ;
  }
}
 ?>
