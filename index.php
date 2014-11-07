<?php
// Start session to check if they are logged in
session_start();
// if the session variable is not found in the cookie
// sent them to log in
if(!$_SESSION['email']){
header("Location:registerIntern.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>