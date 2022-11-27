<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="css/detail.css" rel="stylesheet">
    <link href="css/element.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <title>register</title>
  <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
    width: 100%;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: url(img/img1.jpeg);
    background-size: cover;
    background-position: center;
}
nav{
    position: fixed;
}

h1
{
    text-align: center;
}
p
{
    text-align: center;
}
.buttons
{
    margin-left: 35%;
}
button
{
    background-color: rgba(36,160,237,0.4);
    border: none;
    padding: 9px 25px;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    position: relative;
}
button:hover
{
    background-color: rgb(123, 246, 232);
}
.btn
{
  margin-right: 10px;
}
.tag_menu 
{
  border-radius: 30px;
  margin-top: 10px;
}
.logo:hover
{
  filter: saturate(5);
}
html
{
  scroll-behavior: smooth;
}
.tag_menu
{
  border-radius: 30px;
  margin-top: 10px;
}
</style>
</head>
<body>
<?php
if(isset($_SESSION["email"])){
  header("location:index.php");
}
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
                            <a class="tag_menu" href="index.php">Home</a>
                        </li>

                        <li>
                            <a class="tag_menu" href="about.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
<section>
<section>
  <br><br><br><br><br><br><br>
<div class="bodies">
        <h1>How do you want to Register?</h1>
        <hr>
        <p>If you want to Register as a Renter click on Renter Register button otherwise click on Owner Register button.</p>
    </div><br>
    <div class="buttons">
      <button type="submit" class="btn btn-lg"  onclick="window.location.href='renter-register.php'" style="width:200px;">Renter Register</button>
      <button type="submit" class="btn btn-lg"  onclick="window.location.href='owner-register.php'" style="width:200px;">Owner Register</button>
    </div>
</section>

</body>
</html>




