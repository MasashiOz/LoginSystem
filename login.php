<?php
    include_once "header.php";
?>

      <!-- jambotron -->
      <div class="jumbotron container my-5 w-75">
        <!-- Alert when password is incorrect -->
        <?php
            if(isset($_GET['login'])){
                if($_GET['login'] == 'fail'){

        ?>
            <div class="alert alert-danger" role="alert">
                    Incorrect username/password!
            </div>
        <?php
                }
            }
        ?>

        <!-- Alert when password is success -->
        <?php
            if(isset($_GET['signup'])){
                if($_GET['signup'] == 'success'){

        ?>
            <div class="alert alert-success" role="alert">
                    SIGNUP SUCCESS!
            </div>
        <?php
                }
            }
        ?>

          <h1 class="display-4 mb-3">Please Login</h1>
          <hr class="my-2">
          <form action="login_inc.php" method="POST">
                    Username <input type="text" name="username" class="form-control">
                    Password <input type="password" name="password" class="form-control">
                    <button type="submit" name="login" class="btn btn-info mt-3">LOGIN</button>
          </form>
      </div>

<?php
    include_once "footer.php";
?>