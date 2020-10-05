<?php
require 'connect.php';
$sql1 = "UPDATE Class1 SET sub5=99 WHERE id=1";
mysqli_query($db,$sql1);
$value = "SELECT sub1,sub2,sub3,sub4,sub5 FROM Class1";
$result = mysqli_query($db,$value);
$row = mysqli_fetch_assoc($result);
  $s1 = $row["sub1"];
  $s2 = $row["sub2"];
  $s3 = $row["sub3"];
  $s4 = $row["sub4"];
  $s5 = $row["sub5"];
$tmarks = $s1+$s2+$s3+$s4+$s5;
$sql2 = "UPDATE Class1 SET total_obtained=$tmarks WHERE id=1";
mysqli_query($db,$sql2);
$percent = ($tmarks/500)*100;
$sql3 = "UPDATE Class1 SET percentage=$percent WHERE id=1";
mysqli_query($db,$sql3);
if(!mysqli_query($db,$sql1)){
  echo "Fail";
}
else {
  echo "Updated succefully";
}
 ?>
