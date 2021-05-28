<?php
    include_once "header.php";
?>

      <!-- jambotron -->
      <div class="jumbotron container my-5 w-75">
          <h1 class="display-4 mb-3">SIGN UP!</h1>
          <hr class="my-2">
          <form action="signup_inc.php" method="POST">
                    Full Name <input type="text" name="fullname" class="form-control" required>
                    Email Address <input type="email" name="email" class="form-control" required>
                    Username <input type="text" name="username" class="form-control" required>
                    Password <input type="password" name="password" class="form-control" required>
                    <button type="submit" name="signup" class="btn btn-primary mt-3">SIGNUP</button>
          </form>
      </div>

<?php
    include_once "footer.php";
?>