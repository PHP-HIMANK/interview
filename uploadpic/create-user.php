<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload Picture</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row mt-3">
		<div class="col-md-11"></div>
		<div class="col-md-1">
			<a href="index.php" class="btn btn-sm btn-success">Home</a>
		</div>
	</div>
	<div class="row">
	<?php
	if(isset($_SESSION['user_validation_error']) and $_SESSION['user_validation_error'] != '') {
		echo "<h4 class='text-center text-danger'>".$_SESSION['user_validation_error']."</h4>";
		unset($_SESSION['user_validation_error']);
	}
	?>
	<form method="post" enctype="multipart/form-data" action="makeuser.php">
		<div class="row mt-3">
			<div class="col-md-6 offset-md-3">
				<div class="mb-2">
					<label class="form-label">Name</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="mb-2">
					<label class="form-label">Email</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="mb-2">
					<label class="form-label">Password</label>
					<input type="text" name="password" class="form-control" required>
				</div>
				<div class="mb-2">
					<label class="form-label">Confirm Password</label>
					<input type="text" name="confirm_password" class="form-control" required>
				</div>
				<div class="mb-4 text-center">
					<input type="submit" name="submit" class="btn btn-sm btn-primary align-self-center">
				</div>
			</div>
		</div>
	</form>
	</div>
</div>
</body>
</html>
