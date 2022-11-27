<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>gharbhada.com</title>
	<link rel="stylesheet" href="css/index.css">
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
 html
 {
  scroll-behavior: smooth;
 }
</style>
</head>
<body>
<body>
<?php
include('navbar.php');
?>
<section id="center" class="center_home clearfix">
<div class="center_home_m clearfix">
 <div class="container">
  <div class="row">
   <div class="center_home_1 clearfix">
    <h1 class="text-center col">Search the desired accomodation with location</h1>
	<div class="center_home_1i clearfix">
	<form action="search-property.php" method="POST">
	<div class="col-sm-2">
	</div>
	 <div class="col-sm-8">
	  <div class="center_home_1i1 clearfix">
	    <input placeholder="Enter Flat/Room & Location" name="search_property" class="form-control" type="text">
	  </div>
	 </div>
	</div>
	<div class="center_home_1i clearfix">
	 <div class="col-sm-10">
	  <div class="center_home_1i1 clearfix pull-right">
	    <h5 class="mgt text-center"><button class="button_1 block mgt" type="submit">Search Properties</button></h5>
	  </div>
	 </div>
	 <div class="col-sm-2">
	</div>
	</form>
	</div>
   </div>
  </div>
 </div>
</div>
</section>

<?php 

include "property-list.php";
include "footer.php";

 ?>
 
 
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

</body>
</body>
</html>