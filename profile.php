<?php 
include('navbar.php');

if(!isset($_SESSION["email"])){
  header("location:index.php");
}
 ?>
<?php 
        include("config/config.php");
        $u_email= $_SESSION["email"];

        $sql="SELECT * from tenant where email='$u_email'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
<style>
  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>
<br><br><br><br><b><br><br>
</b>
<section id="center" class="clearfix center_about">
 <div class="container clearfix">
  <div class="row">
   <div class="center_agent_1 clearfix">
   <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center"><br>
								<img src="<?php echo $rows['id_photo']; ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo $rows['full_name']; ?></h4>
									<p class="text-muted font-size-sm"><?php echo $rows['address']; ?></p>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">Email</h6>
									<span class="text-secondary"><?php echo $rows['email']; ?></span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">Phone Number</h6>
									<span class="text-secondary"><?php echo $rows['phone_no']; ?></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body" style="margin:10px;">
            <form method="POST" action="renter-backend.php">
                <div class="form-group">
                  <label for="full_name">Full Name:</label>
                  <input type="hidden" value="<?php echo $rows['tenant_id']; ?>" name="tenant_id">
                  <input type="text" class="form-control" id="full_name" value="<?php echo $rows['full_name']; ?>" name="full_name">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" value="<?php echo $rows['email']; ?>" name="email" readonly>
                </div>
                <div class="form-group">
                  <label for="phone_no">Phone No.:</label>
                  <input type="text" class="form-control" id="phone_no" value="<?php echo $rows['phone_no']; ?>" name="phone_no">
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" class="form-control" id="address" value="<?php echo $rows['address']; ?>" name="address">
                </div>
                <hr>
                <center><button id="submit" name="tenant_update" class="btn btn-primary btn-block">Update</button></center><br>
                
              </form>
            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
   </div>
  </div>
 </div>
</section>
<?php }} ?>