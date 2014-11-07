<?php
// Start session to check if they are logged in
session_start();
unset($_SESSION['email']);
header("Location:registerIntern.php");
?>