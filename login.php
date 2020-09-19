<html>
<head>
	<title>User login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
</head>
<body>

<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="co-md-6" login-left>
		<h2> Login here</h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary"> login </button>
		</form>
	</div>

	<div class="co-md-6" login-right>
		<h2> Register here</h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary"> Register </button>
		</form>
	</div>
</div>
</div>




	
</body>

</html>