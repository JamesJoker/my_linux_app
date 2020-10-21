<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>
	<form action="/authtest/register" method="post">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="name">
		<input type="text" name="email" placeholder="email">
		<input type="text" name="password" placeholder="password">
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>