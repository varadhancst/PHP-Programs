<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the day of given date</title>
  </head>
  <body>
    <form class="" action="findday.php" method="post">
      <p>Enter your date: </p>
      <input type="number" name="date" value="">
      <p>Enter your month: </p>
      <input type="number" name="mon" value="">
      <p>Enter your year: </p>
      <input type="number" name="year" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $s = 0;
  $month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
  $week = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
  $date = $_POST['date'];
  $mon = $_POST['mon'];
  $year = $_POST['year'];
  echo "DOB: ", $date,"/",$mon,"/",$year;
  if( ($year / 4 == 0) && ($year % 400 == 0) && ($year % 100 != 0) )
  {$month[1] = 29;}
  for ($i=0; $i < $mon-1; $i++) {
    $s = $s + $month[$i];
      }
      $s = $s + ($date + $year + ($year / 4) - 2);
    $s = $s % 7 ;
    echo "<br>The day is : ", $week[$s];
}
 ?>


<hr>

<form class="" action="findday.php" method="post">
  <p>Enter the DOB(DD/MM/YYYY): </p>
  <input type="text" name="fday" value="">
  <input type="submit" name="fdaysubmit" value="submit">
</form>

<?php
if (isset($_POST['fdaysubmit'])) {
  $fday = $_POST['fday'];
  $result = (explode("/",$fday));
  print_r($result);
  $fdaydate = $result[0];
  $fdaymon = $result[1];
  $fdayyear = $result[2];
  $fdays = 0;
  $fdaymonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
  $fdayweek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
  echo "<br>DOB: ", $fdaydate,"/",$fdaymon,"/",$fdayyear;
  if( ($fdayyear / 4 == 0) && ($fdayyear % 400 == 0) && ($fdayyear % 100 != 0) )
  {$fdaymonth[1] = 29;}
  for ($i=0; $i < $fdaymon-1; $i++) {
    $fdays = $fdays + $fdaymonth[$i];
      }
      $fdays = $fdays + ($fdaydate + $fdayyear + ($fdayyear / 4) - 2);
    $fdays = $fdays % 7 ;
    echo "<br>The day is : ", $fdayweek[$fdays];
}
 ?>
