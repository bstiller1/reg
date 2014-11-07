<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register User</title>
</head>

<body>
<h2>Register User</h2>
<p>
<?php
if($_POST){
// Check all POST variables and shortform them for processing
if($_POST['first']){
	$first = $_POST['first'];
}else{
	echo "Please enter your First Name.<br />";
}
if($_POST['last']){
	$last = $_POST['last'];
}else{
	echo "Please enter your last Name.<br />";
}
if($_POST['email']){
	$email = $_POST['email'];
	$domain = explode("@", $email);
	if(@getmxrr($domain[1], $mxhosts) == FALSE){
		echo "That Email Address is not valid.<br />";
	}
}else{
	echo "Please enter your Email Address.<br />";
}
if($_POST['password']){
	$password = $_POST['password'];
	// check that password is more than 6 characters
	if(strlen($password) < 6){
	echo "Your password needs to be 6 or more characters in length.<br />";	
	} // end length check
	// encrypt password using MD5
	$md5password = md5($password);
}else{
	echo "Please enter a Password.<br />";
}
if($_POST['password2']){
	// make sure the passwords match
	$password2 = $_POST['password2'];
	if($password2 != $password){
		echo "Your passwords do not match, please go <a href='javascript:history.go(-1);' title='Back'>back</a><br />";
		exit;
	}
}else{
	echo "Please confirm your password.<br />";
}
include('connectvars.php');
// Check to see if user exists
$chkquery = "SELECT * FROM interns WHERE email='$email';";
$chkresult = mysqli_query($db,$chkquery) or die(mysql_error());
// Mysql_num_row is counting table row
$count=mysqli_num_rows($chkresult);

// If result matched email, table row must be 1 row
// email address already exists
if($count==1){
	echo "That Email Address already exists, please go <a href='javascript:history.go(-1);' title='Back'>back</a> and enter a different Email Address";
	exit;
}

$query = "INSERT INTO interns VALUES ('','$email','$md5password','$first','$last');";
$result = mysqli_query($db,$query) or die(mysql_error());
if($result){
echo "Your info has been submitted, you may login now.<br /><a href='login.php' title='Login'>Login Page</a>";	
}
}
?>
</p>
</body>
</html>