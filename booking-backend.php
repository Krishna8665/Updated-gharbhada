<?php 
error_reporting(0);

session_start();

include("config/config.php");

if(isset($_POST['book_property'])){
	

if(isset($_SESSION["email"])){
	global $db,$property_id;
  $u_email=$_SESSION["email"];

$property_id=$_GET['property_id'];
  
$sql="SELECT * FROM tenant where email='$u_email'";
    $query=mysqli_query($db,$sql);

    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
      	$tenant_id=$rows['tenant_id'];


      	$sql1="UPDATE add_property SET booked='Yes' WHERE property_id='$property_id'";
      	$query1=mysqli_query($db,$sql1);

      	$sql2="INSERT INTO booking(property_id,tenant_id) VALUES ('$property_id','$tenant_id')";
      	$query2=mysqli_query($db,$sql2);

      	if($query2)
		{
      $_SESSION['msg'] = "Property booked successfully";
      header("Location:view-property.php?property_id=$property_id");
		}

      }

  


} }}

?>