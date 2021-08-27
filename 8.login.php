<?php 
if (isset($_POST['btnSave'])) {
	
	$err = [];

	if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
		$name = $_POST['name'];
	} else {
		$err['name'] = 'Enter your name';
	}

	if (isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address'])) {
		$address = $_POST['address'];
	} else {
		$err['address'] = 'Enter your address';
	}

	if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
		$email = $_POST['email'];
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$err['email'] = 'Please enter valid email';
		}
	} else {
		$err['email'] = 'Enter your email';
	}

	if (isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])) {
		$username = $_POST['username'];
		if (strlen($username) < 8) {
			$err['username'] = 'Username must be 8 character';
		} else if (strlen($username) > 20) {
			$err['username'] = 'Username can not exceed 20 character';
		} else if(!preg_match('/^[a-zA-Z]+[0-9]+/', $username)){
			$err['username'] = 'Username must be valid alpha numeric';
		}
	} else {
		$err['username'] = 'Enter your username';
	}

	if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
		$password = $_POST['password'];
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);
		if (strlen($password) < 8) {
			$err['password'] = 'password must be 8 character';
		} else if (strlen($password) > 20) {
			$err['password'] = 'password can not exceed 20 character';
		} else if(!$uppercase || !$lowercase || !$number || !$specialChars) {
    		$err['password'] =   'Password should include at least one upper case letter, one number, and one special character.';
		}
	} else {
		$err['password'] = 'Enter your password';
	}

	if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
		$email = $_POST['email'];
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$err['email'] = 'Please enter valid email';
		}
	} else {
		$err['email'] = 'Enter your email';
	}

	if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])) {
		$phone = $_POST['phone'];
		if (strlen($phone) < 9) {
			$err['phone'] = 'phone must be 9 digit';
		} else if (strlen($phone) > 10) {
			$err['phone'] = 'phone can not exceed 10 digit';
		} else if (!filter_var($phone,FILTER_VALIDATE_INT)) {
			$err['phone'] = 'Please enter valid phone';
		}
	} else {
		$err['phone'] = 'Enter your phone';
	}

	if (isset($_POST['country']) && !empty($_POST['country']) && trim($_POST['country'])) {
		$country = $_POST['country'];
	} else {
		$err['country'] = 'Enter select country';
	}

	if (isset($_POST['gender']) && !empty($_POST['gender']) && trim($_POST['gender'])) {
		$gender = $_POST['gender'];
	} else {
		$err['gender'] = 'Please select gender';
	}

	if (isset($_POST['subjects']) && count($_POST['subjects']) > 0) {
		$subjects = $_POST['subjects'];
	} else {
		$err['subjects'] = 'Please select subjects';
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/8.login_form.css">
</head>
<body>
<h1>Login Form</h1>
<form action="" method="post">
	<div class="form-control">
		<label for="name">Name</label>
		<input type="text" name="name" placeholder="Enter name" value="<?php echo isset($name)?$name:'';  ?>">
		<?php if (isset($err['name'])) { ?>
			<span class="error"> <?php echo $err['name']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<label for="address">Address</label>
		<input type="text" name="address" placeholder="Enter address" value="<?php echo isset($address)?$address:'';  ?>">
		<?php if (isset($err['address'])) { ?>
			<span class="error"> <?php echo $err['address']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<label for="email">Email</label>
		<input type="text" name="email" placeholder="Enter email"  value="<?php echo isset($email)?$email:'';  ?>" >
		<?php if (isset($err['email'])) { ?>
			<span class="error"> <?php echo $err['email']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<label for="username">Username</label>
		<!-- for old value print :value="<?php echo isset($username)?$username:'';  ?>" -->
		<input type="text" name="username" placeholder="Enter username" value="<?php echo isset($username)?$username:'';  ?>" >
		<!-- for message print -->
		<?php if (isset($err['username'])) { ?>
			<span class="error"> <?php echo $err['username']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<label for="password">Password</label>
		<input type="password" name="password" placeholder="Enter password" value="<?php echo isset($password)?$password:'';  ?>">
		<?php if (isset($err['password'])) { ?>
			<span class="error"> <?php echo $err['password']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<label for="phone">Phone</label>
		<input type="text" name="phone" placeholder="Enter phone" value="<?php echo isset($phone)?$phone:'';  ?>">
		<?php if (isset($err['phone'])) { ?>
			<span class="error"> <?php echo $err['phone']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<label for="country">Country</label>
		<select name="country">
			<option value="">Select Country</option>
			<option value="np" <?php echo isset($country) && $country=='np'?'selected':''; ?> >Nepal</option>
			<option value="in" <?php echo isset($country) && $country=='in'?'selected':''; ?>>India</option>
			<option value="ch" <?php echo isset($country) && $country=='ch'?'selected':''; ?>>China</option>
		</select>
		<?php if (isset($err['country'])) { ?>
			<span class="error"> <?php echo $err['country']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<label for="gender">Gender</label>
		<?php if (isset($gender) && $gender == 'male') { ?>
			<input type="radio" name="gender" value="male" checked="checked"> Male
			<input type="radio" name="gender" value="female" > Female
		<?php } else if (isset($gender) && $gender == 'female') {  ?>
			<input type="radio" name="gender" value="male" > Male
			<input type="radio" name="gender" value="female" checked="checked"> Female
		<?php } else { ?>
			<input type="radio" name="gender" value="male" > Male
			<input type="radio" name="gender" value="female"> Female
		<?php } ?>

		<?php if (isset($err['gender'])) { ?>
			<span class="error"> <?php echo $err['gender']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<label for="gender">Subjects</label>
		<input type="checkbox" name="subjects[]" value="java"> Java
		<input type="checkbox" name="subjects[]" value="php" checked="checked"> PHP
		<input type="checkbox" name="subjects[]" value="php"> JavaScript
		<?php if (isset($err['subjects'])) { ?>
			<span class="error"> <?php echo $err['subjects']; ?></span>
		<?php } ?>
	</div>
	<div class="form-control">
		<input type="submit" name="btnSave" value="Register">
		<input type="reset" name="btnReset" value="Clear">
	</div>
</form>
<br>

</body>
</html>