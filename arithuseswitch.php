<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="arithuseswitch.php" method="post">
      <p>Enter the first value :</p>
      <input type="number" name="first" value="">
      <p>Enter the second value :</p>
      <input type="number" name="second" value="">
      <p>Choice :</p>
      <select class="" name="choice">
        <option value="add">add</option>
        <option value="sub">sub</option>
        <option value="mul">mul</option>
        <option value="div">div</option>
      </select><br><br>

      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $first = $_POST['first'];
  $second = $_POST['second'];
  $choice = $_POST['choice'];
  switch ($choice) {
    case 'add':
      echo $first + $second;
      break;
      case 'sub':
        echo $first - $second;
        break;
        case 'mul':
          echo $first * $second;
          break;
          case 'div':
            echo $first / $second;
            break;
    default:
      echo "error";
      break;
  }
}
 ?>
