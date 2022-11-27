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
    <title>renterlogin</title>
    <style>
        
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat',sans-serif;
}
body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: url(img/img1.jpeg);
    background-size: cover;
    background-position: center;
}
.logo:hover
{
    filter: saturate(5);
}
.contains{
  margin-left: 100px;
  width: 70%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}

.contains .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
  margin: 0% 25%;
}
form .user-details .form-group{
    display: inline;
    margin-bottom: 15px;
    justify-content: space-between;
    width: calc(100% / 2 - 20px);
}
.user-details .form-group input{
  height: 45px;
  width: 100%;
  margin: 10px;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.button
{
    background-color: rgba(36,160,237,0.4);
    border: none;
    position: relative;
    padding: 9px 50px;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    margin: 0px 30% ;
    margin-bottom: 10px;
}
button:hover
{
    background-color: rgb(64, 143, 246);
}
.buttom
{
    background-color: rgba(36,160,237,0.4);
    border: none;
    position: relative;
    padding: 9px 50px;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    margin: 0px 30% ;
    margin-bottom: 10px;
}
.buttom:hover
{
    background-color: rgb(64, 143, 246);
}
.links
{
    color: rgb(219, 128, 128);
}
.links:hover
{
    color: red;
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


include "navbar.php";


 ?>
 
    <section id="login" class="center_about">
    <div class="contains">
        <div class="title">Renter Login</div>
        <form class="form-signin" action="renter-backend.php" method="POST">
            <div class="user-details">
              <div class="form-group">
                <input type="text" placeholder="Enter Email" name="email" required autofocus="">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="login">
                <button class="buttom" name="tenant_login" type="submit" value="login">Login</button>
                
                <div class="signup">
                    Not a member? <a class="links" href="renter-register.php">Signup now</a>  
             </div>
          </form>
</section>
</body>
</html>