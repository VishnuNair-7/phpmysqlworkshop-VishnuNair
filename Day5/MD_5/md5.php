<!DOCTYPE html>
<html>
  <form class="" action="md5.php" method="post">
    <h3> Enter Your Username: </h3>
    <input type="text" name="username" value="">
    <br>
    <h3>Enter Your Password: </h3>
    <input type="password" name=" password" value="">
    <br>
    <input type="submit" name="" value="Submit">
    <br>
    <br>

  </form>

</html>
<?php
 require 'connection.php';
  if(isset($_POST['username'])){
    if(isset($_POST['password'])){
      $usn = $_POST['username'];
      $pwd = $_POST['password'];
      $pwdenc = md5($usn);
      $abc = "INSERT INTO credentials(userid,passwordenc)
              VALUES('$usn','$pwdenc')";
      mysqli_query($db,$abc);
      if(!mysqli_query($db,$abc)){
        echo "Fail";
      }
    }
  }
?>
