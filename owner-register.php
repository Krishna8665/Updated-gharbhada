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
  <title>ownerregister</title>
  <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        body {
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
        .contains{
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            margin-top: 250px;
            height: auto;
        }
        .contains .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }
        .login_1  form .account-box {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }
        form .account-box .form-group {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }
        form .form-group span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .account-box .form-group input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        button 
        {
            background-color: rgba(36, 160, 237, 0.4);
            border: none;
            position: relative;
            padding: 9px 50px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }
        button:hover 
        {
            background-color: rgb(64, 143, 246);
        }
        button 
        {
            border: none;
        }
        .logo:hover
        {
          filter: saturate(10);
        }
        .tag_menu
        {
          margin-top: 10px;
          border-radius: 30px;
        }
        .renter
        {
          cursor: pointer;
        }
        .renter:hover
        {
          color: orange;
        }
    </style>
</head>
<body>
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
    <section id="login" class="center_about">
    <div class="contains clearfix">
        <div class="row">
        <div class="title">Owner Registration</div>
            <div class="login_1 clearfix">
                <form method="POST" action="owner-auth.php" enctype="multipart/form-data">
                <div class="account-box">
    <div class="form-group">
      <label for="full_name">Full Name:</label>
      <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password1">Password:</label>
      <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="password" required>
    </div>
    <div class="form-group">
      <label for="password2">Confirm Password:</label>
      <input type="password" class="form-control" id="password2" placeholder="Enter Password Again" required>
    </div>
    <div class="form-group">
      <label for="phone_no">Phone No.:</label>
      <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone No." name="phone_no" required>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
    </div>
    <div class="form-group">
      <label for="id_type">Type of ID:</label>
      <select class="form-control" name="id_type" required>
        <option>Citizenship</option>
        <option>Driving Licence</option>
      </select>
    </div>
    <div class="form-group">
      <label for="card_photo">Upload your Selected Card:</label>
      <input type="file" class="form-control" placeholder="Enter password" name="id_photo" accept="image/*" onchange="preview_image(event)" required>
    </div>
    <br><br>
    </div>
    <div class="form-group">
      <label>Your selected File:</label><br>
      <img src="" id="output_image"/ height="200px">
    </div>
    <hr>
    <center><button id="submit" name="owner_register" class="btn btn-primary btn-block" onclick="return Validate()">Register</button></center><br>
    <div class="form-group text-right">
      <label class="renter">Register as a Renter<a href="renter-register.php"></a>?</label><br>
    </div>
  </form>
                
            </div>
        </div>
    </div>
</section>


<script type='text/javascript'>
function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
<script type="text/javascript">
function Validate() {
    var password = document.getElementById("password1").value;
    var confirmPassword = document.getElementById("password2").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}
</script>
</body>
</html>