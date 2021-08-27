
    <?php require_once 'navbar.php'; ?>
    <?php 
    
if (isset($_POST['btnLogin'])) {
  
  $err = [];
  $voter_id = $_POST['voter_id'];
  $Password = $_POST['password'];

 if (isset($_POST['voter_id']) && !empty($_POST['voter_id']) && trim($_POST['voter_id'])) {
    $voter_id = $_POST['voter_id'];
  } else {
    $err['voter_id'] = 'voter_id is required';
  }

  if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
    $password = $_POST['password'];
  } else {
    $err['password'] = 'Enter your password';
  }
}
  
?>
    
    <section id="form-info">
    <div class="container backup">
      <div>
            <h3 class="text-center">Voter Login</h3>
      </div>
        <div class="row"> 
          <div class="col-md-3 col-sm-4 col-4"></div>
          <div class="col-md-6 col-sm-6 col-6">
            <form id="voterRegister" method="post">
              <div class="form-group">
                  <label for="voter id">Voter ID</label>
                  <input type="text" name="voter_id"  class="form-control">
                  <?php if (isset($err['voter_id'])) { ?>
                    <span class="text-danger"> <?php echo $err['voter_id']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="Password" name="password"  class="form-control">
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
