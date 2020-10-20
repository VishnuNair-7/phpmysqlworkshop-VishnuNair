<?php
  session_start();
  include 'navbar.php';
   ?>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="register.css">
</head>
  <form class="center" action="" method="post">
    <p>Enter Email-id</p>
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
      $lpwdenc = md5($lpwd);
      $l_email = "SELECT * FROM creds WHERE emailid='$lusn'";
      $query1 = mysqli_query($db,$l_email);
      $checkl_email = mysqli_num_rows($query1);
      while ($row = mysqli_fetch_assoc($query1)) {
        $dbpwd = $row['pwd'];
        $dbusn = $row['emailid'];
      }
      if(strlen($lusn)==0) {
        ?> <script>
          alert("Email field is empty!")
        </script>
      <?php }
      if($checkl_email==1){
        if($lusn===$dbusn&&$lpwdenc===$dbpwd){
          $_SESSION['user'] = $lusn;
          header("Location: table.php");
        }
        else {
          ?> <script>
            alert("Incorrect password")
          </script>
          <?php
        }
      }
      else {
        ?> <script>
          alert("Email is not registered!")
          setTimeout(function(){
          window.location.href = 'login.php';
        }, 1000);
        </script>
        <?php
      }

    }
    else {
      ?> <script>
        alert("Password field is empty!")
      </script>
      <?php
  }
}
   ?>
