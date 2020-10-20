<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
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
      <br>
      <p>MySQL : </p>
      <input type="text" name="sqlmark" value="">
      <br>
      <br>
      <p>HTML : </p>
      <input type="text" name="htmlmark" value="">
      <br>
      <br>
      <input class="btn btn-dark btn-md"type="submit" name="" value="Add">
    </form>
  </body>
</html>
<?php
  require 'connectt.php';
  $uemail=$_SESSION['student'];
  $fullname = $_SESSION['fullname'];
  if(isset($_POST['phpmark'])){
    if(isset($_POST['sqlmark'])){
      if(isset($_POST['htmlmark'])){
        $phpmark=$_POST['phpmark'];
        $sqlmark=$_POST['sqlmark'];
        $htmlmark=$_POST['htmlmark'];
        $add = "INSERT INTO marks(PHP,MySQL,HTML,name,emailid) VALUES('$phpmark','$sqlmark','$htmlmark','$fullname','$uemail')";
        $query = mysqli_query($db,$add);
        if($query){
          ?><script>
            alert("Marks added Succesfully")
          </script><?php
        }
        else {
          ?><script>
            alert("Task failed")
          </script><?php
        }
      }
    }
  }
