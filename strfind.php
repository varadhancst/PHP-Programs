<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>To find a character is no./letter/special character</title>
  </head>
  <body>
    <form class="" action="strfind.php" method="post">
      <input type="text" name="c" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
$c = $_POST['c'];

}

 ?>

# include <stdio.h>
# include <conio.h>
void main()
{
char ch ;
clrscr() ;
printf("Enter a charatcer : ") ;
scanf("%c", &ch) ;
if (ch >= 65 && ch <= 90)
printf("\nEntered character is a upper case letter") ;
else if(ch >= 97 && ch <= 122)
printf("\nEntered character is a lower case letter") ;
else if(ch >= 48 && ch <= 57)
printf("\nEntered character is a number") ;
else
printf("\nEntered character is a special character") ;
getch() ;
}
