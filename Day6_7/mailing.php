<!DOCTYPE html>
<html lang="en" dir="ltr">
  <form class="" action="mailing.php" method="post">
    <h3>Enter your name: </h3>
    <input type="text" name="name" value="">
    <br>
    <h3>Enter your e-mail id</h3>
    <input type="email" name="user_mail" value="">
    <br>
    <h3>Please enter feedback</h3>
    <input type="text" name="feedback" value="">
    <br>
    <input type="submit" name="" value="Submit">
  </form>
</html>





<?php
if(isset($_POST['user_mail'])){
  if(isset($_POST['name'])){
    if(isset($_POST['feedback'])){
    $to_email = $_POST['user_mail'];
    $userName = $_POST['name'];
    $feedback = $_POST['feedback'];
    $adm_mail = "nvishnu41@gmail.com";
    $subject1 = "Feedback form";
    $subject = "Thank you!";
    $body = "Thank you for your valuable feedback!!";
    $headers = "From: sender email";

    mail($to_email,$subject,$body,$headers);
    mail($adm_mail, $subject1, $feedback);

  }
  }
}
?>
