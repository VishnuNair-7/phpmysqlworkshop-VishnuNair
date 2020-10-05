<?php
  $a11 = 5;
  $a12 = 4;
  $a21 = 10;
  $a22 = 7;
  $b11 = 1;
  $b12 = 5;
  $b21 = 0;
  $b22 = 14;
  $Matrix1 = array(
     array($a11,$a12),
     array($a21,$a22)
  );
  $Matrix2 = array(
     array($b11,$b12),
     array($b21,$b22)
   );
  $Matrix3 = array(
    array($a11+$b11,$a12+$b12),
    array($a21+$b21,$a22+$b22)
  );
  echo "Matrix A is ";
  echo "</br>";
  for ($i=0; $i < 2 ; $i++) {
    for ($j=0; $j < 2; $j++) {
      echo $Matrix1[$i][$j];
      echo " ";
    }
    echo "<br/>";
  }
  // echo $Matrix1[0][0];
  // echo ' ';
  // echo $Matrix1[0][1];
  // echo "</br>";
  // echo $Matrix1[1][0];
  // echo ' ';
  // echo $Matrix1[1][1];
  // echo "</br>";
  // echo "</br>";
  echo "Matrix B is ";
  echo "</br>";
  for ($k=0; $k < 2 ; $k++) {
    for ($l=0; $l < 2; $l++) {
      echo $Matrix2[$k][$l];
      echo " ";
    }
    echo "<br/>";
  }
  // echo "Matrix B is ";
  // echo "</br>";
  // echo $Matrix2[0][0];
  // echo ' ';
  // echo $Matrix2[0][1];
  // echo "</br>";
  // echo $Matrix2[1][0];
  // echo ' ';
  // echo $Matrix2[1][1];
  echo "</br>";
  echo "</br>";
  echo "Matrix A + Matrix B is";
  echo "</br>";
  for ($a=0; $a < 2 ; $a++) {
    for ($b=0; $b < 2; $b++) {
      echo $Matrix3[$a][$b];
      echo " ";
    }
    echo "<br/>";
  }



 ?>
