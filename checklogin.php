<?php //Display all PHP errors
error_reporting(E_ALL);
ini_set('display_errors', '1');

$tbl_name="interns"; // Table name 

// Set the variables for the database access:
require_once('connectvars.php');

// To protect MySQL injection 
$email = stripslashes($_POST['email']);
$password = stripslashes($_POST['password']);

// encrypt password for validation
$md5password=md5($password);

// Query DB to see if the user exists
$query = "SELECT email, password_md5 FROM $tbl_name WHERE email='$email' AND password_md5='$md5password';";
$result = mysqli_query($db,$query) or die(mysql_error());

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $email and $password, table row must be 1 row
if($count==1){

// Register $email, $password and redirect to file "index.php"
session_start();
$_SESSION['email'] = $email;

header("Location:index.php");
}
else {

echo "<script>alert('Wrong Username or Password!');window.location = 'registerIntern.php';</script>";
}
?>