<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program to print the alphabets with ASCII values</title>
  </head>
  <body>

  </body>
</html>
 <?php
 $ch = [65 => "A" ,"B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z", 97 => "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
 $nu;
 echo "ASCII chart for characters : <br>";
 for($nu = 65; $nu <= 122; $nu++)
     {
       if($nu > 90 && $nu < 97)
       continue ;
       echo $ch[$nu], "\t" , $nu, "<br>";
 }
  ?>
