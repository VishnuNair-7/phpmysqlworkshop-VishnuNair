<?php
  if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileDest = 'Uploads/'.$fileName;
    move_uploaded_file($fileTmpName,$fileDest);


    echo "File Name: ".$fileName;
    echo "</br>";
    echo "File Type: ".$fileType;
    echo "</br>";
    echo "File Size: ".$fileSize." bits.";
  }
 ?>
