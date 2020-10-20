<?php
  require 'connectt.php';


  if(isset($_POST['firstname'])){
    if(isset($_POST['surname'])){
      if(isset($_POST['email'])){
        if(isset($_POST['pwd0'])){
          if(isset($_POST['pwd'])){
            $firstname = $_POST['firstname'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $pwd0 = $_POST['pwd0'];
            $pwd = $_POST['pwd'];
            $emailarray = "SELECT * FROM students WHERE email='$email'";
            $result = mysqli_query($db,$emailarray);
            $checkstud = mysqli_num_rows($result);
            $pwdenc= md5($pwd);
            $emailquery = "SELECT * FROM creds WHERE emailid='$email'";
            $checkemail = mysqli_query($db,$emailquery);
            $emailcount = mysqli_num_rows($checkemail);



            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
              if ($pwd0 === $pwd){
                if(strlen($pwd) > 6){
                  if($emailcount==0){
                    if($checkstud==1){
                      $insert = "INSERT INTO creds(emailid,pwd) VALUES('$email','$pwdenc')";
                      $insert1 = mysqli_query($db,$insert);
                        if($insert1){
                           echo "Registered successfully";
                         }
                         else {
                           echo "Registration failed";
                    }
                  }
                    else {
                      ?> <script>
                        alert("Your email is not in the college's database!")
                      </script>
                      <?php
                    }
                  //   while ($emaillist = mysqli_fetch_assoc($result)) {
                  //     if(in_array($email,$emaillist,true)){
                  //       $insert = "INSERT INTO creds(emailid,pwd) VALUES('$email','$pwdenc')";
                  //       $insert1 = mysqli_query($db,$insert);
                  //     if($insert1){
                  //       echo "Registered successfully";
                  //     }
                  //     else {
                  //       echo "Registration failed";
                  //     }
                  //   }
                  // }

                }
                else {
                  ?> <script>
                    alert("This email is already taken!")
                  </script>
                  <?php

                }
              }
                else {
                  ?> <script>
                    alert("Password length should be greater than 6 characters.")
                  </script>
                  <?php

                }
              }
              else {
                ?> <script>
                  alert("Passwords do not match")
                </script>
                <?php
              }
            }
            else {
              ?> <script>
                alert("Invalid email-id")
              </script>
              <?php
            }
          }
          else {
            ?> <script>
              alert("Please confirm password")
            </script>
            <?php
          }
        }
        else {
          ?> <script>
            alert("Please enter password")
          </script>
          <?php
        }
      }
      else {
        ?> <script>
          alert("Please enter email")
        </script>
        <?php
      }
    }
    else {
      ?> <script>
        alert("Please enter last name")
      </script>
      <?php
    }
  }
  else {
    ?> <script>
      alert("Please enter first name")
    </script>
    <?php
  }
 ?>
