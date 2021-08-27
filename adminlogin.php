  <?php session_start();
  ?>
    <?php require_once 'navbar.php'; ?>
    <?php require_once 'connection.php'; ?>

    <?php 
    
if (isset($_POST['btnLogin'])) {
  $err = [];


 if (isset($_POST['user_name']) && !empty($_POST['user_name']) && trim($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
  } else {
    $err['user_name'] = 'user_name is required';
  }

  if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
    $password = $_POST['password'];
  } else {
    $err['password'] = 'Enter your password';
  }

  if (count($err) == 0) {
    //admin login
    $sql = "SELECT id FROM admin WHERE user_name = '$user_name' and password = '$password'";
      $result = mysqli_query($con,$sql);
      // var_dump($result);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // var_dump($row);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      var_dump($count);
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user'] = $user_name;
         
         header("location: admindashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
  }
  
}
  
?>
    
<section id="form-info">
          <div class="container backup">
          <div>
              <h3 class="text-center">Admin Login</h3>
          </div>
          <div class="row"> 
          <div class="col-md-3 col-sm-4 col-4"></div>
          <div class="col-md-6 col-sm-6 col-6">
 <form id="voterRegister" method="post">
              <div class="form-group">
                  <label for="user_name">Name</label>
                  <input type="user_name" name="user_name"  class="form-control" autocomplete="off">
                  <?php if (isset($err['user_name'])) { ?>
                    <span class="text-danger"> <?php echo $err['user_name']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="Password" name="password"  class="form-control" autocomplete="off">
                  <?php if (isset($err['password'])) { ?>
                    <span class="btn-danger"> <?php echo $err['password']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group text-center">
                <input type="submit" name="btnLogin" class="btn btn-success">
              </div>
            </form>
          </div>
          <div class="col-md-3 col-sm-4 col-4"></div>
        </div>
    </div>
</section>

    <?php require_once 'footer.php'; ?>
