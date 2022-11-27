<?php 
isset($_SESSION["email"]);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>viewproperty</title>
	<style>
		.tag_menu
		{
			border-radius: 30px;
			margin-top: 10px;
		}
		.logo:hover
		{
			filter: saturate(10);
		}
	</style>
</head>
<body>


<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
   <style>
     #mapid { height: 180px; }
   </style>
</head>
<body>




<?php 
include('config/config.php');
include('navbar.php');
include('booking-backend.php');
?>

<?php


	$property_id=$_GET['property_id'];
    $sql="SELECT * from add_property where property_id='$property_id'";
	$query=mysqli_query($db,$sql);
  $row = mysqli_fetch_array($query, MYSQLI_ASSOC);


    
?>

<section>
<section id="list_detail" style="margin-top:80px;">
 <div class="container clearfix">
  <div class="row">
   <div class="list_detail_1 clearfix">
    <div class="col-sm-4">
    <div id="carousel" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <?php 
                $sql2="SELECT * FROM property_photo where property_id='$property_id'";
                $query2=mysqli_query($db,$sql2);
                ?>
                
              <?php
              $slide = 0;
               while($row_getImage = mysqli_fetch_array($query2)){
                ?>
                <div data-slide-no="<?php echo $slide; ?>" class="item carousel-item <?php if($slide == 0){ echo 'active'; } ?>">
                <img src="owner/<?php echo $row_getImage['p_photo']; ?>" alt="" style="height:400px;">
              </div>
              
              <?php
            $slide++;
            } ?>
              
            </div>
            <a class="left carousel-control kb_control_left" href="#carousel" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> 
            <a class="right carousel-control kb_control_right" href="#carousel" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
          </div>
		  <br>
		  <?php 
      
	  if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
		
	  ?>
	  <form method="POST">
	  <div class="row">
		<div class="col-sm-6">
		  <?php
		  $booked=$row['booked'];
	  
		  if ($booked=='No'){ ?>
			<input type="hidden" name="property_id" value="<?php echo $rows['property_id']; ?>">
		  <input type="submit" class="btn btn-lg btn-success" name="book_property" style="width: 100%" value="Book Property">
		<?php } else { ?>
		  <input type="submit" class="btn btn-lg btn-danger" style="width: 100%" value="Property Booked" disabled>
		<?php } ?>
		</div>
	  </form>
	  </div>
	  
	  <?php }
	  else{
		echo "<center><h3>You should login to book property.</h3></center>";
	  }
	   ?>
    </div>
    <div class="col-sm-8">
	 <div class="list_detail_1l clearfix">
	  <div class="list_detail_1l1 clearfix">
		
	   <h3 class="mgt"><?php echo $row['property_type']; ?></h3><br>
	   <h4 class="mgt">Rs <?php echo $row['estimated_price']; ?> / <span class="span_1">Monthly</span></h3>
	   <p><i class="fa fa-map-marker"></i> <?php echo $row['country']; ?>, <?php echo $row['city']; ?> , <?php echo $row['zone']; ?> , <?php echo $row['district']; ?> </p>
	  </div>
	  <div class="list_detail_1l2 clearfix">
      <h4 class="mgt">Property Info</h4>
	  <hr>
	  <div class="list_detail_1l2i clearfix">
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Bedrooms</h5>
		<h6 class="col_1"><?php echo $row['bedroom']; ?></h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Bathrooms</h5>
		<h6 class="col_1"><?php echo $row['bathroom']; ?></h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Kitchen</h5>
		<h6 class="col_1"><?php echo $row['kitchen']; ?></h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Living Room</h5>
		<h6 class="col_1"><?php echo $row['living_room']; ?></h6>
	   </div>
	  </div>
	  <div class="list_detail_1l2i clearfix">
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Type</h5>
		<h6 class="col_1"><?php echo $row['property_type']; ?></h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">price</h5>
		<h6 class="col_1">Rs <?php echo $row['estimated_price']; ?></h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Ward No</h5>
		<h6 class="col_1"><?php echo $row['ward_no']; ?></h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Tole</h5>
		<h6 class="col_1"><?php echo $row['tole']; ?></h6>
	   </div>
     <div class="list_detail_1l2i clearfix">
     <div class="col-sm-3 space_left">
	    <h5 class="mgt">VDC/Municipility</h5>
		<h6 class="col_1"><?php echo $row['vdc_municipality']; ?></h6>
	   </div>
     <div class="col-sm-3 space_left">
	    <h5 class="mgt">Contact</h5>
		<h6 class="col_1"><?php echo $row['contact_no']; ?></h6>
	   </div>
       </div> 
	  </div>
	  </div>
	  <div class="list_detail_1l2 clearfix">
      <h4 class="mgt">Description</h4>
	  <hr>
      <p><?php echo $row['description']; ?></p>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

  



</body>
</html>



</body>
</html>