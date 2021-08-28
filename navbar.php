<!-- header -->
<!-- <?php 
    session_start();
   // $username=$_SESSION['user_name'];
   // var_dump($username);
?>
 -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/all.css">

    <title>Home Page</title>
  </head>
  <body>
    <div class="header">
    <div class="container-fluid">
      <div class="row" style="width: 100%; height: auto; background-color: #c3c3c3">
        <ul style="width: 100%">

          <li><h3 class="font-weight-bold website-title">Online voting system </h3></li>
          <li style="float: right; margin-right: 10px;">
          	<div>
            <!-- icone name  -->
              <ul class="social-media" >
                <li> <i class="fab fa-facebook-f"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-google"></i></li>
                <li><i class="fab fa-instagram"></i></li>
              </ul>
          	</div>
        	</li>
      	</ul>
    	</div>
  	</div>
    </div>
<!-- header end  -->
<!-- navbar -->
    <div class="menu">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php require_once 'menu.php'; ?>

            </div>
          </nav>
    </div>