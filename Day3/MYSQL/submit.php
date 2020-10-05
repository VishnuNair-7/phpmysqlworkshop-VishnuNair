<?php
  require 'connect.php';
  if(isset($_POST["name"])){
    if(isset($_POST["subject1"])){
      if(isset($_POST["subject2"])){
        if(isset($_POST["subject3"])){
          if(isset($_POST["subject4"])){
            if(isset($_POST["subject5"])){
              $Name = $_POST["name"];
              $s1 = $_POST["subject1"];
              $s2 = $_POST["subject2"];
              $s3 = $_POST["subject3"];
              $s4 = $_POST["subject4"];
              $s5 = $_POST["subject5"];
              $tmarks = $s1+$s2+$s3+$s4+$s5;
              $percent = ($tmarks/500)*100;
              $sql = "INSERT INTO Class1(name,sub1,sub2,sub3,sub4,sub5,total_obtained,total_marks,percentage)
                VALUES('$Name','$s1','$s2','$s3','$s4','$s5','$tmarks','500','$percent')";
              mysqli_query($db,$sql);
              if(!mysqli_query($db,$sql)){
                echo "Fail";
              }
            }
          }
        }
      }
    }
   }
 ?>
