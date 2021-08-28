
    <?php require_once 'navbar.php'; ?>
    <?php require_once 'connection.php'; ?>

    <?php 

if (isset($_POST['btnCandidate'])) {
  
  $err = [];
  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $date_of_birth = $_POST['date_of_birth'];
  $permanent_address = $_POST['permanent_address'];
  $temporary_address = $_POST['temporary_address'];
  $citizenship_number = $_POST['citizenship_number'];
  $contact_number = $_POST['contact_number'];
  $gender = isset($_POST['gender']) ? $_POST['gender'] : '';  //ternary operator used as if else operator
  $marital_status = isset($_POST['marital_status']) ? $_POST['marital_status']:'';
   $election = isset($_POST['election']) ? $_POST['election']:'';


  if (empty($add_candidate) || !trim($add_candidate)) {
    $err['add_candidate'] = 'Select add_candidate';
  }  

  if (!isset($_POST['first_name']) || empty($first_name) || !trim($first_name)) {
    $err['first_name'] = 'First name is required';
  }
  // exit;
  // if (isset($_POST['middle_name']) || empty($_POST['middle_name']) || trim($_POST['middle_name'])) {
  //   $middle_name = $_POST['middle_name'];
  // } 
 
  if (!isset($_POST['last_name']) || empty($last_name) || !trim($last_name)) {
    $err['last_name'] = 'Last name is required';
  }
 
  if (!isset($_POST['date_of_birth']) || empty($date_of_birth) || !trim($date_of_birth)) {
    $err['date_of_birth'] = 'date of birth is required';
  }
   
  if (!isset($_POST['permanent_address']) || empty($permanent_address) || !trim($permanent_address)) {
     $err['permanent_address'] = 'Permanent address is required';
  } 

  if (!isset($_POST['temporary_address']) || empty($temporary_address) || !trim($temporary_address)) {
    
  } 
  
  if (!isset($_POST['citizenshipNo']) || empty($citizenship_number) || !trim($citizenship_number)) {
      $err['citizenshipNo'] = 'CitizenshipNo is required';  
    } 


    if (!isset($_POST['contact_number']) || empty($contact_number) || !trim($contact_number)&& strlen($contact_number)== 10) {
    $err['contact_number'] = 'Contact number is required and must be of 10 characters';
  } 
  
  if (!isset($_POST['email']) || empty($email) || !trim($email)) {
   $err['email'] = 'Email is required';
    if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)){
      $err['email'] = 'Invalid email address';
    }
  } 
  
  if (empty($gender) || !trim($gender)) {
    $err['gender'] = 'Select gender';
  }
    

   if (empty($marital) || !trim($marital)) {
    $err['marital'] = 'Select marital';
  }  

  if (empty($election) || !trim($election)) {
    $err['election'] = 'Select election';
  }  

  if (count($err) == 0) {
    
     $sql="INSERT INTO `candidate`(`id`, `first_name`, `middle_name`, `last_name`, `permanent_address`, `temporary_address`, `dob`, `citizenship_number`, `contact_number`, `email`, `gender`, `election`, `marital_status`) VALUES ('$first_name','$middle_name','$last_name','$dob','$permanent_address','$temporary_address','$citizenship_number','$contact_number','$email','$gender','$election','$marital_status')";
    $query= mysqli_query($con,$q);
    if ($con->affected_rows == 1 && $con->insert_id > 0) {
     echo "<script>alert('Inserted Success');</script>";
     header('admindashboard.php');
    } else {
      echo "<script>alert('Inserted Failed');</script>";
    }
  }
}

?>
<?php
  $sql= "SELECT * FROM `election` ORDER BY name";
  $result=$con->query($sql);

?>
    <section id="form-info">
    <div class="container backup">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">Add Candidate</h3>
          </div>
          <div class="col-md-3 col-sm-3 col-3">
          </div>
          <div class="col-md-6 col-sm-6 col-6">
            <form id="add_candidat" method="post">
              <div class="election">
                <div class="form-group">
                  <label for="contact number">Election</label><br>
                 <select class="form-select" aria-label="Default select example" name="election">
                      <option selected>Open this select menu</option>
                      <?php 
                          while($row=$result -> fetch_assoc()){
                      ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name']?></option>
                  <?php } ?>
                    </select><br> 
                    <?php if (isset($err['election'])) { ?>
                    <span> <?php echo $err['election']; ?></span>
                  <?php } ?>
              </div>
              </div>
               <div class="form-group">
                  <label for="first name">First name</label>
                  <input type="text" name="first_name" class="form-control">
                  <?php if (isset($err['first_name'])) { ?>
                    <span class="text-danger"> <?php echo $err['first_name']; ?></span>
                  <?php } ?>
              </div>
               <div class="form-group">
                  <label for="middle name">Middle Name</label>
                  <input type="text" name="middle_name" class="form-control">
              </div>
               <div class="form-group">
                  <label for="last name">Last name</label>
                  <input type="text" name="last_name" class="form-control">
                  <?php if (isset($err['last_name'])) { ?>
                    <span class="text-danger"> <?php echo $err['last_name']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group">
                  <label for="username">Date Of Birth</label>
                  <input type="date" name="date_of_birth"  class="form-control">
                  <?php if (isset($err['date_of_birth'])) { ?>
                    <span class="text-danger"> <?php echo $err['date_of_birth']; ?></span>
                  <?php } ?>
              </div>
               <div class="form-group">
                  <label for="permanent address">Permanent Address</label>
                  <input type="text" name="permanent_address" class="form-control">
                  <?php if (isset($err['permanent_address'])) { ?>
                    <span class="text-danger"> <?php echo $err['permanent_address']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group">
                  <label for="temporary Address">Temporary Address</label>
                  <input type="text" name="temporary_address" class="form-control">
              </div>
               <div class="form-group">
                  <label for="citizenship_number.">Citizenship Number</label>
                  <input type="text" name="citizenship_number" class="form-control">
                  <?php if (isset($err['citizenship_number'])) { ?>
                    <span class="text-danger"> <?php echo $err['citizenship_number']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group">
                  <label for="contact number">Contact Number</label>
                  <input type="text" name="contact_number" class="form-control">
                  <?php if (isset($err['contact_number'])) { ?>
                    <span class="text-danger"> <?php echo $err['contact_number']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control">
                  <?php if (isset($err['email'])) { ?>
                    <span class="text-danger"> <?php echo $err['email']; ?></span>
                  <?php } ?>
              </div>
              <div class="gender">
                 <label for="gender">Gender</label>
                 <br>
                <input type="radio" class="btn-check" name="gender" id="btnradio1" value="male">
                 <label class="" for="male">Male</label>

                <input type="radio" class="btn-check" name="gender" id="btnradio2" value="female" >
                <label class="" for="female">Female</label>
                <?php if (isset($err['gender'])) { ?>
                    <span class="text-danger"> <?php echo $err['gender']; ?></span>
                  <?php } ?>
              </div>
              <div class="marital">
                <div class="form-group">
                  <label for="marital_status">Marital Status</label><br>
                 <select class="form-select" aria-label="Default select example" name="marital_status">
                      <option selected>Open this select menu</option>
                      <option value="1">Married</option>
                      <option value="2">Unmarried</option>
                    </select><br> 
                    <?php if (isset($err['marital'])) { ?>
                    <span> <?php echo $err['marital']; ?></span>
                  <?php } ?>
              </div>
              </div>
              <div class="form-group text-center">
                <input type="submit" name="btnCandidate" class="btn btn-success">
              </div>
            </form>
              </div>
              
          </div>
          <div class="col-md-3 col-sm-3 col-3">
          </div>

          
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
