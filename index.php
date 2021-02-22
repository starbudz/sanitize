<!DOCTYPE html>
<html>
<head>
	<title>SANITIZE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	
<div class="container">
	<div class="card form form-login mx-auto login" style="max-width: 400px; margin-top: 100px;">
		<form method="post" action="testForm.php" class="form form-login">
			<div class="card-header">
				<h3>LOGIN</h3>
			</div>
			<div class="card-body">
				<legend for="name">Name</legend>
				<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
				<legend for="email">Email</legend>
				<input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
				<legend for="id">Website</legend>
				<input type="text" name="url" class="form-control" id="url" placeholder="Enter Website">
			</div>
			<div class="card-footer">
				<input type="submit" name="submit" value="submit" class="btn btn-warning pull-left">
				<input type="reset" name="reset" value="reset" class="btn btn-danger pull-right">				
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>