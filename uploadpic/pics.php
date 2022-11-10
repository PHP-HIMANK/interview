<?php
session_start();
if(!isset($_SESSION['user_login'])) {
	header('login.php');
}
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
			<form method="post" enctype="multipart/form-data" action="upload.php">
				<div class="row">
					<div class="col-auto mb-2 position-absolute top-50 start-50 translate-middle">
						<input type="file" name="imagefile" class="form-control" accept="image/*">
						<button class="btn btn-xl btn-primary mt-3" name="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
