<?php
    include_once "header.php";
    require_once "dbConnectUser.php";
?>

<div class="jumbotron container my-5 w-75">   
        <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">User Name</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <tbody>
          <?php
              // displaying data from database
              $sql = "SELECT * FROM users";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0){
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)){

          ?>
              <tr>
                  <th scope="row"><?php echo $row["id"];?></th>
                  <td><?php echo $row["Full_Name"]; ?></td>
                  <td><?php echo $row["Email"]; ?></td>
                  <td><?php echo $row["userName"]; ?></td>
                  <td><?php echo $row["PWD"]; ?></td>
              </tr>
          <?php
                }
              } else {
                  echo "0 results";
              }
              mysqli_close($conn);
          ?>

          </tbody>
        </table>

<?php
    include_once "footer.php";
?>