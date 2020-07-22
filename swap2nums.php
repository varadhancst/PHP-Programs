
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>swap2nums</title>
   </head>
   <body>
     <form class="" action="swap2nums.php" method="post">
       <p>Enter the a value :</p>
       <input type="number" name="a" value="">
       <p>Enter the b value :</p>
       <input type="number" name="b" value=""><br><br>
       <input type="submit" name="submit" value="submit">
       <p>Result :</p>
     </form>
   </body>
 </html>

<?php
if (isset($_POST['submit'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  echo "Before swapping nums <br> a = $a and  b = $b <br>";
  $a = $a + $b;
  $b = $a - $b;
  $a = $a - $b;
  echo "After swapping nums <br> a = $a and b = $b";
}

 ?>
