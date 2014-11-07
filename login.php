<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Intern Login</title>
</head>

<body>
<h3>Intern Login</h3>
<form name="login" method="post" action="checklogin.php">
<p>Enter your email address:
<input type="text" name="email" /></p>
<p>Enter your password:
<input type="password" name="password" /></p>
<p><em>(Passwords are case-sensitive and must be 6 characters long)</em></p>
<input type="reset" name="reset" value="Reset Login form" />
<input type="submit" name="login" value="Log In" onClick="login.submit();" />
</form>
</body>
</html>