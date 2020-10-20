<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-dark navbar-expand-lg navbar-dark sticky-top">
      <a class="navbar-brand" href="">ABC College</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alogout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <form class="center" action="" method="post">
      <p>PHP : </p>
      <input type="text" name="phpmark" value="">
      <br>
      <p>MySQL : </p>
      <input type="text" name="sqlmark" value="">
      <br>
      <p>HRML : </p>
      <input type="text" name="htmlmark" value="">
      <br>
      <br>
      <input type="submit" name="" value="Update">
    </form>
  </body>
</html>
<?php
  require 'connectt.php';
  $uemail=$_SESSION['student'];
  if(isset($_POST['phpmark'])){
    $phpmark=$_POST['phpmark'];
    $uphp = "UPDATE marks SET PHP=$phpmark WHERE emailid='$uemail'";
    $query1=mysqli_query($db,$uphp);
    if(!$query1){
      ?><script>
        alert("PHP mark updation failed")
      </script><?php
    }
    else {
        ?><script>
          alert("PHP mark updated")
        </script><?php
    }
  }

  if(isset($_POST['sqlmark'])){
    $sqlmark=$_POST['sqlmark'];
    $usql = "UPDATE marks SET MySQL=$sqlmark WHERE emailid='$uemail'";
    $query2=mysqli_query($db,$usql);
    if(!$query2){
      ?><script>
        alert("MySQL mark updation failed")
      </script><?php
    }
    else {
      ?><script>
        alert("MySQL mark updated")
      </script><?php
    }
  }
  if(isset($_POST['htmlmark'])){
    $htmlmark=$_POST['htmlmark'];
    $uhtml = "UPDATE marks SET HTML=$htmlmark WHERE emailid='$uemail'";
    $query3=mysqli_query($db,$uhtml);
    if(!$query3){
      ?><script>
        alert("HTML mark updation failed")
      </script><?php
    }
    else {
        ?><script>
          alert("HTML mark updated")
        </script><?php
    }
  }
  // if($query1&&$query2&&$query3){
  //   ?><script>
  //     alert("Marks Updated succesfully")
  //   </script><?php
  // }
 ?>
