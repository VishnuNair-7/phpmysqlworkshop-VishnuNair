<?php session_start();
include 'navbarl.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<form class="" action="" method="post">
  <div class="center">

      <input type="email" name="maail" value="">
      <input class="btn btn-md btn-dark" type="submit" name="" value="Send Mail">
  </div>

</form>
</html>
<?php
require 'connectt.php';

  if(isset($_POST['maail'])){
    $mail = $_POST['maail'];
    $subject = "Marksheet";
    $user = $_SESSION['user'];
     $mark1 = "SELECT * FROM marks WHERE emailid = '$user'";
     $queryA = mysqli_query($db,$mark1);
    // echo "Helloo".$_SESSION['user'];
    while ($row = mysqli_fetch_assoc($queryA)) {
      $phpmark = $row['PHP'];
      $sqlmark = $row['MySQL'];
      $htmlmark = $row['HTML'];
    }
    $total = $phpmark + $sqlmark + $htmlmark;
    $percent = ($total/300)*100;
    $headers = "From ender mail..";

    $body = "PHP : ".$phpmark."</br>"."MySQL : ".$sqlmark."</br>"."HTML : ".$htmlmark."</br>"."Percentage : ".$percent;
    mail($mail,$subject,$body,$headers);
    if(mail($mail,$subject,$body,$headers)){
      ?> <script>
        alert("Email sent succesfully!! ")
      </script>
      <?php
    }
    else {
      ?> <script>
        alert("Email sending failed ")
      </script>
      <?php
    }
  }
 ?>
