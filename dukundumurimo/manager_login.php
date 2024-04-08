<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<title>login...</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
	}
	.container{
		position: relative;
		top: 60px;
		height: 250px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	}
	 button{
		width: 95%;
		margin-left: 20px;
	}
</style>
<body>
	<form action="login_check.php" method="POST">
		<div class="container bg-light w-50">
		<h1 class="text-center">admin login</h1>
		<div class="form-group m-3">
			<input type="text" class="form-control" name="username" placeholder="username" required>
		</div>
		<div class="form-group m-3">
			<input type="password" class="form-control" name="password" placeholder="password" required>
		</div>
		<button class="btn btn-primary" type="submit" name="submit">login</button>
	</div>
	</form>
</body>
</html>