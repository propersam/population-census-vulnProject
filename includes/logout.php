
<?php
session_start();

$_SESSION['username'] = null;
$_SESSION['user_role'] = null;
$_SESSION['email'] = null;
//$_SESSION['userid'] = null;
$_SESSION['user_fullname'] = null;

header("Location: ../index.php");

?>