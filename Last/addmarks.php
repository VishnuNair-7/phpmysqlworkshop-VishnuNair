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
      <p>Enter Student's Full Name</p>
      <input type="text" name="firstname" value="" placeholder="First Name">
      <input type="text" name="surname" value="" placeholder="Surname">
      <br>
      <br>
  <p>Enter Student's Email</p>
  <input type="text" name="email" value="" placeholder="E-mail id">
  <br>
  <br>
  <input class="btn btn-lg btn-dark" type="submit" name="" value="Submit">
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
      $fullname = $firstname." ".$surname;
      $email = $_POST['email'];
      $emailquery = "SELECT * FROM students WHERE email='$email'";
      $checkemail = mysqli_query($db,$emailquery);
      $emailcount = mysqli_num_rows($checkemail);
      $filter = "SELECT * FROM marks WHERE emailid='$email'";
      $queryE = mysqli_query($db,$filter);
      $check = mysqli_num_rows($queryE);
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            if($emailcount==1){
              if($check==0){
              $_SESSION['student']=$email;
              $_SESSION['fullname']=$fullname;
              echo $fullname;
              header("Location: aprocess.php");
            }
            else {
              ?><script>
                alert("Marks already present")
              </script><?php
            }
            }
            else {
              ?><script>
                alert("Email not found")
              </script><?php
            }
            }
              else {
                ?><script>
                  alert("Invalid email")
                </script><?php
              }
          }
        }
      }
      ?>
