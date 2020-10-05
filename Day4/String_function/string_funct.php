<!DOCTYPE html>
<html lang="en" dir="ltr">
  <form class="" action="string_funct.php" method="post">
    <h3>Type any String</h3>
    <input type="text" name="string" value="">
    <br>
    <br>
    <h3>Replace String</h3>
    <input type="text" name="substring" value="">
    <br>
    <input type="submit" name="" value="Submit">
    <br>
    <br>
  </form>
</html>
<?php
if(isset($_POST['string'])){
  $string = $_POST['string'];
  echo "Original String is ('".$string."')";
  echo "</br>";
  $count = strlen($string);
  echo "No. of characters: ";
  echo $count;
  echo "</br>";
  $explode = explode(" ",$string);
  echo "String broken down to array : ";
  print_r($explode);
  echo "</br>";
  $rev = strrev($string);
  echo "Reverse of string: ";
  echo $rev;
  echo "</br>";
  $lower = strtolower($string);
  echo "Lower Case: ";
  echo $lower;
  echo "</br>";
  $upper = strtoupper($string);
  echo "Upper Case: ";
  echo $upper;
  echo "</br>";
  if(isset($_POST['substring'])){
    $substring = $_POST['substring'];
    $replace = str_replace($string,$substring,$string);
    echo "Replaced substring: ";
    echo $replace;
  }


}
 ?>
