<?php

session_start();

$admin_id='';
$email='';
$password='';

$errors=array();

$db = new mysqli('localhost','root','','gharbhada');

if($db->connect_error){
	echo "Error connecting database";
}

if(isset($_POST['admin_login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$email = trim($email);
	$email = stripcslashes($email);
	$email = htmlspecialchars($email);
	$password = trim($password);
	$password = stripcslashes($password);
	$password = htmlspecialchars($password);

		$sql = "SELECT * FROM admin where email='$email' AND password='$password' LIMIT 1";
		$result = $db->query($sql);
		if($result->num_rows==1){
			$data = $result-> fetch_assoc();
			$logged_user = $data['email'];
			$_SESSION['email']=$email;
			$_SESSION['is_admin']=true;
			$_SESSION['msg'] = "Login successful";
			header('location:admin/admin-index.php');
    

		}
		else{
				$_SESSION['msg'] = "Username or password is incorrect";
				header('location:admin-login.php');	
			}
}



 ?>