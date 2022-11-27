<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/detail.css" rel="stylesheet">
    <link href="css/element.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <title>searchproperty</title>
  <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
#tab
{
  width: 100%;
  height: 200px;
  border-collapse: 0px;
}
 .main
 {
    color: rgb(19, 43, 44);
   text-align:center;
   font-size: 30px;
   margin-bottom: 6px;
   text-decoration-line: underline;
   filter: saturate(20);
 }
 .small
 {
   
   text-align: center;
   font-size: small;
   font-size: 20px;
   margin: 5px;
   filter: saturate(20);
 }
#bottom
{
    margin-left: 100px;
}
.describe
{
  color: rgb(19, 43, 44);
  filter: saturate(20);
  text-align: center;
}
.linkss
{
  font-size: 20px;
  color:rgb(19, 43, 44);
  margin-top: 0px;
  margin-left: 50px;
}
.button
{
  border: none;
  border-radius: 30px;
  cursor: pointer;
}
html
{
  scroll-behavior: smooth;
}
 #about
 {
    background-color: #90e0ef;
 }
 #center
 {
    background-color: rgb(158, 228, 251);
 }
 .tag_menu
 {
	margin-top: 20px;
	border-radius: 30px;
 }
 .logo:hover
 {
	filter: saturate(10);
 }
 .logo
 {
	margin-top: 20px;
	margin-left: 10px;
 }
    .tag_menu
    {
      margin-top: 10px;
      border-radius: 30px;
    }
    .logo:hover
    {
      filter: saturate(10);
    }
  </style>
</head>
<body>
<?php 


isset($_SESSION["email"]);


 ?>

 <?php 
include("config/config.php");
 ?>
 <section id="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="tag_menu" id="home" href="index.php">Home</a>
                        </li>

                        <li>
                            <a class="tag_menu" href="about.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</section>
<br>
<section id="popular" class="center_list clearfix">
 <div class="container">
  <div class="row">
   <div class="popular_1 text-center clearfix">
    <div class="col-sm-12">
	 <h1 class="mgt">Searched Properties</h1>
   <br>
	</div>
   </div>
   <?php
   if(isset($_POST['search_property'])=="") {
    echo "<center><h3>Searched Property not found...</h3></center>";
   }
   else{
$q_string = $_POST['search_property'];
$sql="SELECT * FROM add_property where concat(zone,district,province,city,tole,property_type,country) like '%$q_string%'";
    $query=mysqli_query($db,$sql);
    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
        $property_id=$rows['property_id'];

        $sql2="SELECT * FROM property_photo where property_id='$property_id'";
        $query2=mysqli_query($db,$sql2);
    
        if(mysqli_num_rows($query2)>0)
        {
          $row=mysqli_fetch_assoc($query2); 
            $photo=$row['p_photo'];
        }
            ?>
<div class="col-sm-4">
     <div class="popular_2i clearfix">
	   <div class="popular_2i1 clearfix">
	    <a href="view-property.php?property_id=<?php echo $rows['property_id']; ?>"><img src="owner/<?php echo $photo; ?>" style="height:200px;" class="iw" alt="abc"></a>
	   </div>
	   <div class="popular_2i2 clearfix">
	    <h5 class="mgt"><a href="view-property.php?property_id=<?php echo $rows['property_id']; ?>"><?php echo $rows['city']; ?></a></h5>
	   </div>
	 </div>
	 <div class="popular_2i3 clearfix">
	    <h5 class="mgt"><a href="view-property.php?property_id=<?php echo $rows['property_id']; ?>"><?php echo $rows['property_type']; ?><i class="fa fa-check-square col_1"></i></a></h5>
		<h4 class="col_1">Rs <?php echo $rows['estimated_price']; ?> / <span class="col_2">Month</span></h4>
		<h6><i class="fa fa-hotel col_1"></i> <?php echo $rows['bedroom']; ?> Beds <span><i class="fa fa-home col_1"></i> <?php echo $rows['bathroom']; ?> Bath</span> <span><i class="fa fa-home col_1"></i> <?php echo $rows['kitchen']; ?> Kitchen</span> <span><i class="fa fa-home col_1"></i> <?php echo $rows['living_room']; ?> Living Room</span></h6>
	   </div>
	</div>


  <?php 

}
    }

    else{
    	echo "<center><h3>Searched Property not found...</h3></center>";
    }
  }
    ?>
	
   </div>
  </div>
 </div>
</section>


<?php include 'footer.php'; ?>

</body>
</html>