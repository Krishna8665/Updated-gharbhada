<?php 
include("config/config.php");
 ?>

<section id="popular">
 <div class="container">
  <div class="row">
   <div class="popular_1 text-center clearfix">
    <div class="col-sm-12">
	 <h1 class="mgt">Properties</h1><br>
	</div>
   </div>

<?php 

$sql="SELECT * FROM add_property";
    $query=mysqli_query($db,$sql);

    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
        $property_id=$rows['property_id'];

?>


<?php


        $sql2="SELECT * FROM property_photo where property_id='$property_id'";
    $query2=mysqli_query($db,$sql2);

    if(mysqli_num_rows($query2)>0)
    {
      $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo'];
    }?>



	
	
   
<div class="col-sm-4">
     <div class="popular_2i clearfix">
	   <div class="popular_2i1 clearfix">
	    <a href="view-property.php?property_id=<?php echo $rows['property_id']; ?>"><img src="owner/<?php echo $photo; ?>" class="iw" alt="picture" style="height:200px;"></a>
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
    ?>
</div>
  </div>
 </div>
</section>