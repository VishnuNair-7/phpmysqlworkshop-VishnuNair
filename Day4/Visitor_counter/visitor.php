<?php
  // $file = fopen("count.txt","w");
  // fwrite($file,"0");
  $visitors = file_get_contents("count.txt");
  echo "You had ".$visitors." visitors today";
  $visitorsNew = $visitors + 1;
  $fileNew = fopen("count.txt","w");
  fwrite($fileNew,$visitorsNew);
 ?>
