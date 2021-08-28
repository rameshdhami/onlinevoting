 <?php require_once 'checkadmin.php'; ?>

 <?php require_once 'navbar.php'; ?>
 <?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1,maximum-scale=1">
	<title> Admin Dashboard</title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">

</head>
<body>
			<input type="checkbox" id="nav-toggle">
		<div class="sidebar">
				<div class="sidebar-brand">
				<h1><span class="las la-admindashboard">Admin dashboard</span></h1>
				</div>
				<div class="sidebar-menu">
				<?php require_once 'adminmenu.php'; ?>
				</div>
		</div>
</body>
</html>
<?php require_once 'footer.php'; ?>