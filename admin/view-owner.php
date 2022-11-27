<?php
include 'navbar.php';
if (!isset($_SESSION["email"])) {
    header("location:../index.php");
  }

?>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">

                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">View Owner</h2>
                        </div>
                    </div>
                </div>

                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                    <tr class="header">
                  <th>Id</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Encrypted Password</th>
                  <th>Phone No.</th>
                  <th>Address</th>
                  <th>Id Photo</th>
                </tr>
                    </thead>

                    <tbody>
                    <?php 
        include("../config/config.php");

        $sql="SELECT * from owner";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
                <tr>
                  <td><?php echo $rows['owner_id'] ?></td>
                  <td><?php echo $rows['full_name'] ?></td>
                  <td><?php echo $rows['email'] ?></td>
                  <td><?php echo $rows['password'] ?></td>
                  <td><?php echo $rows['phone_no'] ?></td>
                  <td><?php echo $rows['address'] ?></td>
                  <td><img id="myImg" src="../<?php echo $rows['id_photo'] ?>" width="50px"></td>
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
                </tr>
              <?php }} ?>
                    </tbody>


                </table>
            </div>
        </div>

    </div>
</div>
<?php 
include 'footer.php';
?>