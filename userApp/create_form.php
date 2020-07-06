<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
	<!-- <script type="text/javascript" src="process.js"></script> -->
</head>
<body>
	<form id='create-user-form' action='create.php' method='post' border='0'>
		<table class='table table-hover table-responsive table-bordered'>
		<tr>
		<td>User Name</td>
		<td><input type='text' name='name' class='form-control' required /></td>
		</tr>
		<tr>
		<td>Email </td>
		<td><input type="email" name="email" class="form-control" required /></td>
		</tr>
		<tr>
		<td>Password</td>
		<td><input type='password' name='password' class='form-control' required /></td>
		</tr>
		<tr>
		<td></td>
		<td>
		<button type='submit' class='btn btn-primary float-right'>
		 Insert
		</button>

		</td>
		</tr>
		</table>
	</form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
</body>
</html>