<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form action="/authtest" method="post">
		{{ csrf_field() }}
		<input type="text" name="email">
		<input type="text" name="password">
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>