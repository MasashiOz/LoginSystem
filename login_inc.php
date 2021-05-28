<?php
    require_once "dbConnectUser.php";

        if(isset($_POST["login"])){
          $username = $_POST["username"];
          $password = $_POST["password"];

          $sql = "SELECT * FROM users WHERE userName = '$username'";
          $result = mysqli_query($conn, $sql);
                          
          if (mysqli_num_rows($result) > 0){
              $row = mysqli_fetch_assoc($result);
              $fName = $row['userName'];
              $pwdhashed = $row['PWD'];

              $checkPwd = password_verify($password, $pwdhashed);

                if ($checkPwd === false){
                  header("location: login.php?login=fail");
                } else {
                  session_start();
                  $_SESSION["id"] = $row['id'];
                  $_SESSION["usersName"] = $row['userName'];
                  $_SESSION["Full_Name"] = $row['Full_Name'];
                  header("location: index.php");
                }
          } else {
            header("location: login.php?login=fail");
          }
        
          mysqli_close($conn);

        } else {
            header("location: login.php");
        }
?>