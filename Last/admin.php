<?php
  session_start();
  include 'navbar.php';
   ?>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="register.css">
</head>
  <form class="center" action="" method="post">
    <p>Enter Admin Email-id</p>
    <input type="text" name="usn" value="" placeholder="Email">
    <br>
    <br>
    <p>Enter Password</p>
    <input type="password" name="lpwd" value="" placeholder="password">
    <br>
    <br>
    <input class="btn btn-lg btn-dark" type="submit" name="" value="Login">
  </form>
</html>
<?php
  require 'connectt.php';
  if(isset($_POST['usn'])){
    if(isset($_POST['lpwd'])){
      $lusn = $_POST['usn'];
      $lpwd = $_POST['lpwd'];
      $a = "SELECT * FROM admin WHERE a_email='$lusn'";
      $query = mysqli_query($db,$a);
      while ($row = mysqli_fetch_assoc($query)) {
        $a_pwd=$row['pwd'];
      }
      if($a_pwd===$lpwd){
        header("Location: updater.php");
      }
      else {
        ?><script>
          alert("Incorrect Password")
        </script><?php
      }
    }
  }
      ?>
