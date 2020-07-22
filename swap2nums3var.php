
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>swap2nums3var</title>
   </head>
   <body>
     <form class="" action="swap2nums3var.php" method="post">
       <p>Enter the a value :</p>
       <input type="number" name="a" value="">
       <p>Enter the b value :</p>
       <input type="number" name="b" value=""><br><br>
       <input type="submit" name="submit" value="submit">
       <p>Result:</p>
     </form>
   </body>
 </html>

<?php
if (isset($_POST['submit'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  echo "Before swapping nums <br> a = $a and  b = $b <br>";
  $c = $a;
  $a = $b;
  $b = $c;
  echo "After swapping nums <br> a = $a and b = $b";
}

 ?>
