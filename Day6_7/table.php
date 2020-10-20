<?php session_start();
  include 'navbarl.php';
  require 'connectt.php';
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
  if($percent>60){
    $congo = "Congratulations! You have scored above 60%";
  }
 ?>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
  <body>
    <h5 class="center">Marksheet</h5>
    <table class="table table-hover table-bordered" border="1">
      <tr>
      <th scope="col">Subjects</th>
      <th scope="col">PHP</th>
      <th scope="col">MySQL</th>
      <th scope="col">HTML</th>
      <th scope="col">Marks Obtained</th>
      <th scope="col">Total Marks</th>
      <th scope="col">Percentage</th>
      </tr>
      <tr>
        <th scope="row">Marks</th>
        <td><?php echo $phpmark ?></td>
        <td><?php echo $sqlmark ?></td>
        <td><?php echo $htmlmark ?></td>
        <td><?php echo $total ?></td>
        <td>300</td>
        <td><?php echo $percent ?></td>
      </tr>
    </table>
    <br>
    <br><br><br>
    <div class="center">
      <p><?php echo $congo; ?></p>
      <!-- <a href="sendmail.php"> -->
      <!-- <button class="btn btn-lg btn-dark" action="sendmail.php" type="button" value="Send Mail">Send Mail</button> -->
      <a href="sendmail.php"><input type="submit" class="btn btn-md btn-dark center" value="Send Mail"></a>
    </div>

  </body>
</html>
