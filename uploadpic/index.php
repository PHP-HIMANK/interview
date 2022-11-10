<?php
session_start();
require_once 'db_connection.php';
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

	<div class="container-fluid">
		<div class="row mb-3 mt-2">
			<div class="col-md-2">
				<a href="create-user.php" class="btn btn-sm btn-danger">Create User</a>
			</div>
			<div class="col-md-1">
				<?php
				if(isset($_SESSION['user_login'])) {
				?>
					<a href="logout.php" class="btn btn-sm btn-info">Logout</a>
				<?php } else { ?>
					<a href="login.php" class="btn btn-sm btn-info">Login</a>
				<?php } ?>
			</div>
			<div class="col-md-2">
				<a href="pics.php" class="btn btn-sm btn-info">Upload Image</a>
			</div>
			<div class="col-md-7"></div>
		</div>

		<div class="row">
			<div class="table-responsive">
				<table class="table table-hover table-stripped">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<th>User Name</th>
							<th>User Email</th>
							<th>User Image</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$qry = mysqli_query($db,'select * from users left join pics on users.email = pics.email');
							if(mysqli_num_rows($qry) > 0) {
							$i = 1;
							while($row = mysqli_fetch_array($qry,MYSQLI_ASSOC)) {
						?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $row['name']; ?></td>
								<td><?= $row['email']; ?></td>
								<td> <img src="images/<?= $row['filename']; ?>" style="max-width:50px;height:auto"> </td>
							</tr>
						<?php $i++; } } else { ?>
							<tr><td colspan="4" class="text-center">No Data Found</td></tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>
