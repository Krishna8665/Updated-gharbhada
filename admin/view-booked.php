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
                            <h2 class="ml-lg-2">View Booked</h2>
                        </div>
                    </div>
                </div>

                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                    <tr class="header">
                  <th>Booked Id</th>
                  <th>Booked By</th>
                  <th>Booker Address</th>
                  <th>Property Province</th>
                  <th>Property District</th>
                  <th>Property Zone</th>
                  <th>Property Ward No</th>
                  <th>Property Tole</th>
                  <th>Property Owner</th>
                  <th>Owner Address</th>

                </tr>
                    </thead>

                    <tbody>
                    <?php 
        include("../config/config.php");
        

        $sql="SELECT * from booking";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
                <tr>
                  <td><?php echo $rows['id'] ?></td>
                  
        <?php 
        $tenant_id=$rows['tenant_id'];
        $property_id=$rows['property_id'];
        $sql1="SELECT * from tenant where tenant_id='$tenant_id'";
        $result1=mysqli_query($db,$sql1);

        if(mysqli_num_rows($result1)>0)
      {
          while($row=mysqli_fetch_assoc($result1)){
          
       ?>


        <td><?php echo $row['full_name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <?php 
        $sql2="SELECT * from add_property where property_id='$property_id'";
        $result2=mysqli_query($db,$sql2);

        if(mysqli_num_rows($result2)>0)
      {
          while($ro=mysqli_fetch_assoc($result2)){
          
       ?>


                  <td><?php echo $ro['province']; ?></td>
                  <td><?php echo $ro['district']; ?></td>
                  <td><?php echo $ro['zone']; ?></td>
                  <td><?php echo $ro['ward_no']; ?></td>
                  <td><?php echo $ro['tole']; ?></td>
            <?php 
            $owner_id=$ro['owner_id'];
            $sql3="SELECT * from owner where owner_id='$owner_id'";
            $result3=mysqli_query($db,$sql3);

            if(mysqli_num_rows($result3)>0)
          {
              while($rowss=mysqli_fetch_assoc($result3)){
              
           ?>
                  <td><?php echo $rowss['full_name']; ?></td>
                  <td><?php echo $rowss['address']; ?></td>
                </tr>
              <?php }}}}}}}} ?>
                    </tbody>


                </table>
            </div>
        </div>

    </div>
</div>
<?php 
include 'footer.php';
?>