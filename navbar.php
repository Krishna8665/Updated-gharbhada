<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GharBhada</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="css/detail.css" rel="stylesheet">
    <link href="css/element.css" rel="stylesheet">
</head>

<body>
<?php 
if(isset($_SESSION['msg']))
{
	$msg = $_SESSION['msg'];
	unset($_SESSION['msg']);
	echo '<script> alert("'.$msg.'"); </script>'; 
}
?>	
    <section id="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="tag_menu" href="index.php">Home</a>
                        </li>

                        <li>
                            <a class="tag_menu" href="about.php">About Us</a>
                        </li>

                        <li>
                            <a class="tag_menu" href="#about">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){ ?>

                        <li class="dropdown">
                            <a class="dropdown-toggle tag_menu" data-toggle="dropdown" href="#"><span
                                    class="glyphicon glyphicon-user"></span> My Profile
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="booked-property.php">Booked Property</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>

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
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </section>

</body>
<html>