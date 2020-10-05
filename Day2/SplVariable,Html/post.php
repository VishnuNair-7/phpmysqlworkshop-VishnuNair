<!DOCTYPE html>
<html lang="en" dir="ltr">
<form class="" action="post.php" method="post">
  <h4>Enter your Name </h4>
  <input type="text" name="name" value="">
  <br>
  <br>
  <h4>Enter marks of Subject 1</h4>
  <input type="text" name="subject1" value="">
  <br>
  <br>
  <h4>Enter marks of Subject 2</h4>
  <input type="text" name="subject2" value="">
  <br>
  <br>
  <h4>Enter marks of Subject 3</h4>
  <input type="text" name="subject3" value="">
  <br>
  <br>
  <h4>Enter marks of Subject 4</h4>
  <input type="text" name="subject4" value="">
  <br>
  <br>
  <h4>Enter marks of Subject 5</h4>
  <input type="text" name="subject5" value="">
  <br>
  <br>
  <input type="submit" name="" value="Submit">
  <br>
  <br>
</form>
</html>

<?php
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
              echo "Name of Student: ".$Name;
              echo"</br>";
              echo "Marks in Each Subject";
              echo"</br>";
              echo "Subject 1 : ".$s1;
              echo"</br>";
              echo "Subject 2 : ".$s2;
              echo"</br>";
              echo "Subject 3 : ".$s3;
              echo"</br>";
              echo "Subject 4 : ".$s4;
              echo"</br>";
              echo "Subject 5 : ".$s5;
              echo"</br>";
              echo "Total Marks Obtained : ".$tmarks;
              echo"</br>";
              echo "Total Marks : 500";
              echo"</br>";
              echo "Percentage : ".$percent;
            }
          }
        }
      }
    }

  }
 ?>
