<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
$_SESSION['is_owner'] = false;
header("location:index.php"); //to redirect back to "index.php" after logging out

?>