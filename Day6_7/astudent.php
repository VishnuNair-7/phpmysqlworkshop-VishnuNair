
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
      <p>Enter Student's Full Name</p>
      <input type="text" name="firstname" value="" placeholder="First Name">
      <input type="text" name="surname" value="" placeholder="Surname">
      <br>
      <br>
  <p>Enter Student's Email</p>
  <input type="text" name="email" value="" placeholder="E-mail id">
  <br>
  <br>
  <input class="btn btn-lg btn-dark" type="submit" name="" value="Add">
    </form>
  </body>
</html>
<?php
require 'connectt.php';
if(isset($_POST['firstname'])){
  if(isset($_POST['surname'])){
    if(isset($_POST['email'])){
      $firstname = $_POST['firstname'];
      $surname = $_POST['surname'];
      $email = $_POST['email'];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
          $add = "INSERT INTO students(firstnames,surname,email) VALUES('$firstname','$surname','$email')";
          $query=mysqli_query($db,$add);
          if($query){
            ?><script>
              alert("Added succesfully")
            </script><?php
          }
          else {
            ?><script>
              alert("Operation failed!")
            </script><?php
          }
        }
    }
  }
}
 ?>
