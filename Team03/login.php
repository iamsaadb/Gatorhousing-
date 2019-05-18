<?php
include 'server.php';

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $user_type = mysqli_real_escape_string($conn,$_POST['user_type']);
    $password = md5($password);

    if($user_type == "Student"){
          $query = "SELECT * from student where email = '$email' AND password = '$password'";
          if($conn->query($query)){
            $return = mysqli_query($conn,$query);
            $result = mysqli_num_rows($return);

            $sql = "SELECT sid FROM student WHERE email= '$email' AND password = '$password'";
            $run= mysqli_query($conn,$sql);
            if(mysqli_num_rows($run) >  0){
              echo "You're logged in";
              $_SESSION['email'] = $email;
              echo "Welcome ". $_SESSION['email'];

              header("Location: studentDashboard.php");
                }
                else  {
                  echo "something went wrong";
                }
        }
      } else if ($user_type == "Landlord"){
          $query = "SELECT * from landlord where email = '$email' AND password = '$password'";
          if($conn->query($query)){

            $return = mysqli_query($conn,$query);
            $result = mysqli_num_rows($return);

            $sql = "SELECT lid FROM landlord WHERE email= '$email' AND password = '$password'";
            $run= mysqli_query($conn,$sql);
            echo'test1';

            if(mysqli_num_rows($run) >  0){
              echo'test2';

              echo "You're logged in";
              $_SESSION['email'] = $email;
              echo "Welcome ". $_SESSION['email'];

              header("Location: landlord.php");
                }
                else  {
                  echo'test3';

                  echo "something went wrong";
                }
      }
    }
}




?>
