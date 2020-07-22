<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program to generate permutation</title>
  </head>
  <body>
    <form class="" action="genperm.php" method="post">
      <p>Enter the string : </p>
      <input type="text" name="a" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
$n = $i = $k = 0;
$a[10] = $_POST['a'];
echo "\nThe permutation is :\n";
perm($a[10], $k, $n)
{

  $n = strchr($a);


}
public function perm(char $a[10], $k, $n)
{
$t, $d[10] ;
$i ;
if($k == $n)
{
echo "\n", $a);
return;
}
else
{
for($i = $k ; $i < $n ; $i++)
{
$t = $a[$i] ;
$a[$i] = $a[$k] ;
$a[$k] = $t ;
strcpy($d, $a) ;
perm($d, $k + 1, $n) ;
}
}
}

 ?>
