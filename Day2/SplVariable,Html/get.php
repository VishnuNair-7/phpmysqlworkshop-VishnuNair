<!DOCTYPE html>
<html lang="en" dir="ltr">
  <form action="get.php" method="get">
    <h3>Enter lenght of first side</h3>
    <input type="text" name="side1" >
    <br>
    <h3>Enter lenght of second side </h3>
    <input type="text" name="side2" value="">
    <br>
    <h3>Enter lenght of third side </h3>
    <input type="text" name="side3" value="">
    <br>
    <input type="submit" name="" value="Submit">
  </form>
</html>
<?php
  if (isset($_GET["side1"])){
    if(isset($_GET["side1"])){
      if(isset($_GET["side1"])){
        $s1 = $_GET["side1"];
        $s2 = $_GET["side2"];
        $s3 = $_GET["side3"];
        if ($s1 == $s2 && $s2 == $s3) {
          echo "The triangle is equilateral";
        }
        else {
          if (($s1==$s2 && $s2!=$s3)||($s2==$s3 && $s3!=$s1)||($s1==$s3 && $s3!=$s2)) {
            echo "The triangle is isoceles";
          }
          else {
            echo "The triangle is scalene";
          }
        }
      }
    }
  }
     ?>
