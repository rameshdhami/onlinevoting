<footer class="foot p-3 p-md-5 bg-light text-center text-sm-start">
  <div class="container">
    <div class="row">
      <div class="col-md-4 foot-link">
        <h6>
          contact us
        </h6>
        <a href="">9866508647</a>
        <p>
          <a href="">9864995686</a>
        </p>
      </div>
      <div class="col-md-4 foot-link">
        <h6>
          phone no:  
        </h6>
        <a href="">9866508647</a>
        <p>
          <a href="">9864995686</a>
        </p>     
      </div>


      <!-- footer  -->
<?php 
    
if (isset($_POST['btnSubmit'])) {
  
  $err = [];

  if (isset($_POST['Name']) && !empty($_POST['Name']) && trim($_POST['Name'])) {
    $Name = $_POST['Name'];
  } else {
    $err['Name'] = 'Enter your Name';
  }
}
  
?>
      <div class="col-md-4 foot-link">
        <h6>
         Feedback 
        </h6> <form>
              <div class="form-group text-left">
                  <label for="Name">Name</label>
                  <input type="text" name="Name" placeholder="Enter Name" class="form-control">
                  <?php if (isset($err['Name'])) { ?>
                    <span> <?php echo $err['Name']; ?></span>
                  <?php } ?>
              </div>
              <div class="form-group text-left">
                  <label for="comment">Comment</label>
                  <input type="text" name="comment" placeholder="Enter comment" class=" text-field form-control">
              </div>
              <div class="form-group text-center">
                <input type="submit" name="submit" class="btn btn-success">
              </div>
            </form>
      </div>
    </div>
  </div>
</footer>
 <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>

  </body>
</html>