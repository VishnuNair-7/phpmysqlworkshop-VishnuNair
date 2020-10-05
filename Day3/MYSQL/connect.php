<?php
  $user = 'root';
  $pass = '';
  $db = 'marksheet';

  $db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
  echo "Nooiceee!";
 ?>
