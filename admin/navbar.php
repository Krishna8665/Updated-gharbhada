<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION["is_admin"])==true){
	header("location:../index.php");
  }
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
        <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
	  <style>
		.sidebar-header{
			height: 100px;
			width: 300px;
			
		}
		.img-fluid
		{
			height: 50px;
			width: 50px;
		}
		.sidebar-header h3 img {
    width: 160px;
    margin-right: 10px;
}
.img-fluid {
    height: auto;
    width: 50px;
}
.top-navbar
{
	background-color: #3cdfff;
}
.navbar
{
	background-color: #3cdfff;
}
.row
{
	background-color: #3cdfff;
}

.table-title
{
	background-color: #3cdfff;
}
input[type="search"] {
    background-color: gainsboro;
}
#sidebar
{
	background-color: #3cdfff;
}
.user
{
	width:70px; 
	border-radius:50%;
}

	  </style>

  </head>
<body>

<!doctype html>
<html lang="en">
 
  <body>
  <?php 
if(isset($_SESSION['msg']))
{
	$msg = $_SESSION['msg'];
	unset($_SESSION['msg']);
	echo '<script> alert("'.$msg.'"); </script>'; 
}
?>


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="../img/logo.png" class="img-fluid"/><span></span></h3>
		</div>
		<ul class="list-unstyled component m-0">
		  <li class="active">
		  <a href="view-properties.php" class="dashboard"><i class="material-icons">dashboard</i>View Properties </a>
		  </li>
      
		  <li class="">
		  <a href="view-booked.php" class=""><i class="material-icons">date_range</i>View Booked </a>
		  </li>
		  <li class="">
		  <a href="view-owner.php" class=""><i class="material-icons">date_range</i>View Owner </a>
		  </li>
		  <li class="">
		  <a href="view-renter.php" class=""><i class="material-icons">date_range</i>View Renter </a>
		  </li>
		  <li class="">
		  <a href="../logout.php" class=""><i class="material-icons">logout</i>Logout </a>
		  </li>
		
		</ul>
	 </div>
	 
   <!-------sidebar--design- close----------->
   
   
   
      <!-------page-content start----------->
   
      <div id="content">
	     
		  <!------top-navbar-start-----------> 
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div >
						</div>
					 </div>
					 <div class="col-10 col-md-6 col-lg-10 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto">
							   
							   <li class="dropdown nav-item">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								 </a>
								  <ul class="dropdown-menu small-menu">
								     <li></li>
									 
								  </ul>
							   </li>
							   
							   
							   </ul>
							</nav>
						 </div>
					 </div>
					 
				 </div>			 
				 
			 </div>
		  </div>
</body>
</html>