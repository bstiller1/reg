<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register User</title>
</head>

<body>
<h2>Register</h2>
<p>New users, please complete the top form to register as a new user. Returning users, please complete the <a href="login.php" title="Login">login form</a> to log in.</p>
<hr />
<h3>New Intern Registration</h3>
<form name="register" method="post" action="register.php">
<p>Enter your name:<br /> First
<input type="text" name="first" value="" />
Last: <input type="text" name="last" /></p>
<p>Enter your e-mail address:
<input type="text" name="email" /></p>
<p>Enter a password for your account:
<input type="password" name="password" /></p>
<p>Confirm your password:
<input type="password" name="password2" /></p>
<p><em>(Passwords are case-sensitive and must be 6 characters long)</em></p>
<input type="reset" name="reset" value="Reset Registration Form" />
<input type="submit" name="register" value="Register" onClick="register.submit();" />
</form>
<hr />
<h3>Returning Intern Login</h3>
<form name="login" method="post" action="checklogin.php">
<p>Enter your email address:
<input type="text" name="email" /></p>
<p>Enter your password:
<input type="password" name="password" /></p>
<p><em>(Passwords are case-sensitive and must be 6 characters long)</em></p>
<input type="reset" name="reset" value="Reset Login form" />
<input type="submit" name="login" value="Log In" onClick="login.submit();" />
</form>
<hr />
</body>
</html>