
<?php 
session_start();


$tenant_id='';
$full_name='';
$email='';
$password='';
$phone_no='';
$address='';
$id_type='';
$id_photo='';

$errors=array();

$db = new mysqli('localhost','root','','gharbhada');

if($db->connect_error){
	echo "Error connecting database";
}


if(isset($_POST['tenant_register'])){
	tenant_register();
}

if(isset($_POST['tenant_login'])){
	tenant_login();
}

if(isset($_POST['tenant_update'])){
	tenant_update();
}

function tenant_register(){
	if(isset($_FILES['id_photo']))
	{
$id_photo='tenant-photo/'.$_FILES['id_photo']['name'];

// echo $_FILES['image']['name'].'<br>';

if(!empty($_FILES['id_photo'])){
    $path = "tenant-photo/";
    $path=$path. basename($_FILES['id_photo']['name']);
        if(move_uploaded_file($_FILES['id_photo']['tmp_name'], $path))
        {
            echo"The file ". basename($_FILES['id_photo']['name']). " has been uploaded";
        }

        else{
            echo "There was an error uploading the file, please try again!";
        }
}

	}
	global $tenant_id,$full_name,$email,$password,$phone_no,$address,$id_type,$id_photo,$errors,$db;
	$full_name=validate($_POST['full_name']);
	$email=validate($_POST['email']);
	$password=validate($_POST['password']);
	$phone_no=validate($_POST['phone_no']);
	$address=validate($_POST['address']);
	$password = md5($password);
		$sql = "INSERT INTO tenant(full_name,email,password,phone_no,address,id_photo) VALUES('$full_name','$email','$password','$phone_no','$address','$path')";
		if($db->query($sql)===TRUE){
			$_SESSION['msg'] = "Renter register Successfully";
			header("location:renter-login.php");
	}
}



function tenant_login(){
	global $email,$db;
	$email=validate($_POST['email']);
	$password=validate($_POST['password']);

		$password = md5($password); 
		$sql = "SELECT * FROM tenant where email='$email' AND password='$password' LIMIT 1";
		$result = $db->query($sql);
		if($result->num_rows==1){
			$data = $result-> fetch_assoc();
			$logged_user = $data['email'];
			$_SESSION['email']=$email;
			$_SESSION['msg'] = "Renter login Successfully";
			header("location:index.php");
		}
		else{
			$_SESSION['msg'] = "Username or Password incorrect";
			header("location:renter-login.php");
		}
}



function tenant_update(){
	global $owner_id,$full_name,$email,$password,$phone_no,$address,$id_type,$id_photo,$errors,$db;
	$tenant_id=validate($_POST['tenant_id']);
	$full_name=validate($_POST['full_name']);
	$email=validate($_POST['email']);
	$phone_no=validate($_POST['phone_no']);
	$address=validate($_POST['address']);
	$password = md5($password); // Encrypt password
		$sql = "UPDATE tenant SET full_name='$full_name',email='$email',phone_no='$phone_no',address='$address' WHERE tenant_id='$tenant_id'";
		$query=mysqli_query($db,$sql);
		if(!empty($query)){
			$_SESSION['msg'] = "Profile updated Successfully";
			header("location:profile.php");

	}
}


function validate($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



 ?>