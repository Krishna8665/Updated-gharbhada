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
	<title>about</title>
	<style>
		.tag_menu
		{
			margin-top: 10px;
			border-radius: 30px;
		}
	</style>
</head>
<body>
<?php

?>
<link href="css/about.css" rel="stylesheet">
<section id="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="tag_menu" href="index.php">Home</a>
                        </li>
						<li>
                            <a class="tag_menu" href="#about">Contact</a>
                        </li>
                        <li>
                            <a class="tag_menu" href="about.php">About Us</a>
                        </li>
                    </ul>
					<ul class="nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){ ?>
                        <?php } else{
                ?>
                        <li>
                            <a class="tag_menu" href="login.php">Log In</a>
                        </li>
                        <li>
                            <a class="tag_menu" href="register.php">Register</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
<section id="center" class="clearfix center_about">
 <div class="container clearfix">
  <div class="row">
   <div class="center_about_1 text-center clearfix">
	<div class="col-sm-12">
	 <h1 class="mgt">About Us</h1>
	 <p>Who we are & our mission</p>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="about_page">
 <div class="container clearfix">
  <div class="row">
   <div class="about_page_1 clearfix">
	<div class="col-sm-6">
     <div class="about_page_1l clearfix">
	  <img src="img/img1.jpeg" class="iw" alt="abc">
	 </div>
	</div>
	<div class="col-sm-6">
     <div class="about_page_1r clearfix">
	  <h3 class="mgt">Our Company Objective</h3>
	  <h4>To search room or flat for rent</h4>
	</div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="team_pg">
 <div class="container">
  <div class="row">
   <div class="popular_1 text-center clearfix">
    <div class="col-sm-12">
	 <h1 class="mgt">Our Team Member</h1>
	 <p>Professional & Dedicated Team</p>
	</div>
   </div>
   <div id="carousel-example_1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item next left">
					<div class="col-sm-3">
						<div class="team_hi clearfix">
						  <a href="#"><img src="img/rajiv.png" class="iw" alt="abc"></a>
						  <div class="team_hi1 text-center clearfix">
						   <h4 class="mgt"><a href="#">Rajiv Parajuli</a></h4>
						   <h5>Frontend Manager</h5>
						  </div>
						</div>
					   </div>
					   <div class="col-sm-3">
						<div class="team_hi clearfix">
						  <a href="#"><img src="img/anil.png" class="iw" alt="abc"></a>
						  <div class="team_hi1 text-center clearfix">
						   <h4 class="mgt"><a href="#">Anil Ghimire</a></h4>
						   <h5>Backend Manager</h5>
						  </div>
						</div>
					   </div>
					   <div class="col-sm-3">
						<div class="team_hi clearfix">
						  <a href="#"><img src="img/krishna.png" class="iw" alt="abc"></a>
						  <div class="team_hi1 text-center clearfix">
						   <h4 class="mgt"><a href="#">Krishna Khatri KC</a></h4>
						   <h5>Backend Manager</h5>
						  </div>
						</div>
					   </div>
					   <div class="col-sm-3">
						<div class="team_hi clearfix">
						  <a href="#"><img src="img/supervisor.png" class="iw" alt="abc"></a>
						  <div class="team_hi1 text-center clearfix">
						   <h4 class="mgt"><a href="#">Ishowr Thapa </a></h4>
						   <h5>Supervisor</h5>
						  </div>
						</div>
					   </div>
					  </div>
                <div class="item active left">
				 <div class="col-sm-3">
					<div class="team_hi clearfix">
					  <a href="#"><img src="img/rajiv.png" class="iw" alt="abc"></a>
					  <div class="team_hi1 text-center clearfix">
					   <h4 class="mgt"><a href="#">Rajiv Parajuli</a></h4>
					   <h5>Frontend Manager</h5>
					  </div>
					</div>
				   </div>
				   <div class="col-sm-3">
					<div class="team_hi clearfix">
					  <a href="#"><img src="img/anil.png" class="iw" alt="abc"></a>
					  <div class="team_hi1 text-center clearfix">
					   <h4 class="mgt"><a href="#">Anil Ghimire</a></h4>
					   <h5>Backend Manager</h5>
					  </div>
					</div>
				   </div>
				   <div class="col-sm-3">
					<div class="team_hi clearfix">
					  <a href="#"><img src="img/krishna.png" class="iw" alt="abc"></a>
					  <div class="team_hi1 text-center clearfix">
					   <h4 class="mgt"><a href="#">Krishna Khatri KC</a></h4>
					   <h5>Backend Manager</h5>
					  </div>
					</div>
				   </div>
				   <div class="col-sm-3">
					<div class="team_hi clearfix">
					  <a href="#"><img src="img/supervisor.png" class="iw" alt="abc"></a>
					  <div class="team_hi1 text-center clearfix">
					   <h4 class="mgt"><a href="#">Supervidor</a></h4>
					   <h5>Supervisor</h5>
					  </div>
					</div>
				   </div>
                </div>
            </div>
        </div>
  </div>
 </div>
</section>

<section id="mission">
 <div class="container">
  <div class="row">
   <div class="popular_1 text-center clearfix">
    <div class="col-sm-12">
	 <h1 class="mgt">Our Mission & Vission</h1>
	</div>
   </div>
   <div class="mission_1 clearfix">
	<div class="col-sm-6">
     <div class="mission_1l clearfix">
	  <img src="img/img1.jpeg" class="iw" alt="abc">
	 </div>
	</div>
	<div class="col-sm-6">
     <div class="mission_1r clearfix">
      <div class="mission_1ri mgt clearfix">
	   <div class="col-sm-1 space_all">
	    <span><i class="fa fa-lock col_1"></i></span>
	   </div>
	   <div class="col-sm-11">
	    <h4 class="mgt">Fully Secure & 24x7 Dedicated Support</h4>
		<p>If you are an individual client, or just a business startup looking for good backlinks for your website.</p>
	   </div>
	  </div>
	  <div class="mission_1ri clearfix">
	   <div class="col-sm-1 space_all">
	    <span><i class="fa fa-twitter col_1"></i></span>
	   </div>
	   <div class="col-sm-1 space_all">
	    <span><i class="fa fa-copy col_1"></i></span>
	   </div>
	   <div class="col-sm-11">
	    <h4 class="mgt">Fully Secure & 24x7 Dedicated Support</h4>
		<p>We Are Very Hard Worker And Loving</p>
	   </div>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="about">
	<table id="tab" >
		<tr>
			<th>
				<h1 id="headings">
						<a href="index.php"><img src="img/logo.png" alt="ghar bhada logo" id="bottom" class="logo"></a><br>
					</h1>
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
					<div class="wrapper">
					  <div class="button">
						 <div class="icon">
							<a href=""><i class="fab fa-facebook-f"></i></a>
						 </div>
					  </div>
					  <div class="button">
						 <div class="icon">
							<a href=""><i class="fab fa-twitter"></i></a>
						 </div>
					  </div>
					  <div class="button">
						 <div class="icon">
							<a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
						 </div>
					  </div>
					  <div class="button">
						 <div class="icon">
							<a href="www.linkedin.com/in/rajiv-parajuli-39b449255"><i class="fab fa-linkedin"></i></a> 
						 </div>
					  </div>
				   </div>  
			</th>
			<th>
				<p class="describe">Based on pokhara valley, Ghar Bhada is a Room rental webapp</p>
				<p class="describe">that helps people find their desired accomodation.</p> 
			</th>
			<th>
				<h2 class="main">Contact us</h1>
				<p class="small">Masbar, Pokhara, Nepal</p>
				<p class="small">9999999999</p> 
				<p><a class="linkss" href="mailto: be2019ce11@gces.np">be2019ce11@gces.np</a></p>
			</th>
		</tr>
	</table>
</section>

</body>
</html>