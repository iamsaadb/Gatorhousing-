<?php
  include ('server.php');

      $user_type = "";

      if(isset($_POST['register'])){

          $fname = mysqli_real_escape_string($conn,$_POST['fname']);
          $lname = mysqli_real_escape_string($conn,$_POST['lname']);
          $email = mysqli_real_escape_string($conn,$_POST['email']);
          $user_type = mysqli_real_escape_string($conn,$_POST['user_type']);
          $password = mysqli_real_escape_string($conn,$_POST['password1']);
          $password = md5($password);
          $password2 = mysqli_real_escape_string($conn,$_POST['password2']);
          $password2= md5($password2);

          if ($password != $password2){
            echo "Passwords don't macth. try again !";
            
          } else {
          if($user_type == "Student"){

            $query = "SELECT * from student where email = '$email'";
            if($conn->query($query)){
            $return = mysqli_query($conn,$query);
            $result = mysqli_num_rows($return);
            
              if($result > 0){
                echo '<div style = "color:red;"> <b>'.$email.'</b> is not available </div>';
                  } else {
                   $sql = "INSERT INTO student (fname, lname, email, password ) VALUES ('$fname', '$lname', '$email', '$password')";
                    if($conn->query($sql)) {
                      echo "Data successfully entered";
                    }else {
                      echo "Error1";
                        }
                    }
              }
            }
            else if ($user_type == "Landlord"){

            $query = "SELECT * FROM landlord WHERE email = '$email' ";

              if($conn->query($query)){
                $return = mysqli_query($conn,$query);
                $result = mysqli_num_rows($return);

                if($result > 0){
                  echo '<div style = "color:red;"> <b>'.$email.'</b> is not available </div>';
                }else{
                  $sql = "INSERT INTO landlord (`fname`,`lname`,`email`,`password`) VALUES ('$fname','$lname','$email','$password')";
                  if($conn->query($sql)) {
                    echo '<center><h1>Data successfully entered</h1><a href="/cleanversion/index.php"> Log In </a></center>';

                  }else{
                    echo "Error2";
                      }
                    }
                  }
                }
              }
            }
    $conn->close();
    ?>