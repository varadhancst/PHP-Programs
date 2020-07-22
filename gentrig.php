<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program to generate Trigonometric Table</title>
  </head>
  <body>

  </body>
</html>
<?php

$r;
$i;
ch;

echo "- - - - - - - - - - - - - - - - - -";
echo "<br>Angle \t Sin \t Cos \t Tan <br>" ;
echo "- - - - - - - - - - - - - - - - - -";
for($i = 0 ; $i <= 180 ; $i = $i + 30)
{
$r = $i * 3.14159 / 180;
echo "<br>  \t  \t  \t <br>",
$i, "\t" ,sin($r),"\t", cos($r),"\t", tan($r);
}
echo "<br>- - - - - - - - - - - - - - - - - -";
 ?>
