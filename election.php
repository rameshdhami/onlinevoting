
    <?php require_once 'navbar.php'; ?>
    <?php require_once 'connection.php'; ?>

    <?php 
    
if (isset($_POST['btnLogin'])) {
  
  $err = [];
   $name = $_POST['name'];
  $start_date= $_POST['start_date'];
   $end_date = $_POST['end_date'];
  
  
 if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
    $name = $_POST['name'];
  } else {
    $err['name'] = 'name is required';
  }

  if (!isset($_POST['start_date']) || empty($start_date) || !trim($start_date)) {
    $err['start_date'] = 'Start Date is required';
  }

  if (!isset($_POST['end_date']) || empty($end_date) || !trim($end_date)) {
    $err['end_date'] = 'End Date is required';
  }

  if (count($err) == 0) {
    
     $sql="INSERT INTO `election`(`name`,`start_date`,`end_date`) VALUES ('$name','$start_date','$end_date')";
    $query= mysqli_query($con,$sql);
    if ($con->affected_rows == 1 && $con->insert_id > 0) {
     echo "<script>alert('Inserted Success');</script>";
     header('admindashboard.php');
    } else {
      echo "<script>alert('Inserted Failed');</script>";
    }
  }
}
  
?>
    
    <section id="form-info">
    <div class="container backup">
      <div>
            <h3 class="text-center">Add Election</h3>
      </div>
        <div class="row"> 
          <div class="col-md-3 col-sm-4 col-4"></div>
          <div class="col-md-6 col-sm-6 col-6">
            <form id="voterRegister" method="post">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="name" name="name"  class="form-control">
                  <?php if (isset($err['name'])) { ?>
                    <span class="btn-danger"> <?php echo $err['name']; ?></span>
                  <?php } ?>
              </div>
               <div class="form-group">
                  <label for="start_date"> Start Date</label>
                  <input type="start_date" name="start_date"  class="form-control">
                  <?php if (isset($err['start_date'])) { ?>
                    <span class="text-danger"> <?php echo $err['start_date']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group">
                  <label for="end_date"> End Date</label>
                  <input type="end_date" name="end_date"  class="form-control">
                  <?php if (isset($err['end_date'])) { ?>
                    <span class="text-danger"> <?php echo $err['end_date']; ?></span>
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
