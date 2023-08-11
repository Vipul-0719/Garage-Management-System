<?php 
	include('form_validation.php'); 
?>
<html>
	<head>
		<title>Server Side Form Validation</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<style>.error { color: red;}</style>
	</head>
	<body>
		<div class="container">
		<form action="" method="post" name="emp_form">
		<div class="form-group">
			<label class="control-label col-sm-2" for="textinput">Employee Name</label>  
			<div  class="col-sm-8">
			<input id="textinput" name="name" placeholder="Enter your employee name" class="form-control input-md" type="text">
			<?php echo $error_empname; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="textinput">Email</label>  
			<div class="col-sm-8">
			<input id="textinput" name="name" placeholder="Enter your email address" class="form-control input-md" type="text">
			<?php echo $error_email; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="textinput">Phone</label>  
			<div class="col-sm-8">
			<input id="textinput" name="phone" placeholder="Enter your phone address" class="form-control input-md" type="text">
			<?php echo $error_ph; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="textinput">Username</label>  
			<div class="col-sm-8">
			<input id="textinput" name="phone" placeholder="Enter your username" class="form-control input-md" type="text">
			<?php echo $error_username; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="textinput">Password</label>  
			<div class="col-sm-8">
			<input type="password" name="password" value="<?php echo $password; ?>" />
			<?php echo $error_password; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="textinput">Confirm Password</label>  
			<div class="col-sm-8">
			<input type="password" name="confirm" value="<?php echo $confirm; ?>" />
			<?php echo $error_confirm; ?>
			</div>
		</div>
		<div class="form-group">		
			<input type="submit" name="Submit" value="Submit" />
		</div>
		</form>
		</div>
	</body>
</html>