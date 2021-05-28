<?php
    require_once "dbConnectUser.php";
        // Insert area
        if(isset($_POST["signup"])){
          $fullname = $_POST["fullname"];
          $email = $_POST["email"];
          $username = $_POST["username"];
          $password = $_POST["password"];
          $pwdHashed = password_hash($password, PASSWORD_DEFAULT);
                      
          // sql to insert new record
          $sql = "INSERT INTO users (Full_Name, Email, userName, PWD) VALUES ('$fullname', '$email', '$username', '$pwdHashed')";
                          
          if (mysqli_query($conn, $sql)) {
              header("location: login.php?signup=success");
          } else {
              header("location: signup.php?signup=fail");
          }     

          mysqli_close($conn);

        } else {
            header("location: signup.php");
        }
?>
