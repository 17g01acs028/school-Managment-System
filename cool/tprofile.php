

    <?php
     function r1(){
       
  $conn=mysqli_connect("localhost","root","","school");
  $id=$_POST['id'];
  $query="select * from teachers where `id`='$id'";
  $result=mysqli_query($conn,$query);
  //check for results
 
  $rs=mysqli_num_rows($result);
  
  if($rs>0){
      
      while($rows=mysqli_fetch_assoc($result)){
        ?>
        


        <div class="card" style="width:50%;">


    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Teacher Profile</strong>
    </h5>
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
        <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
      <!-- Form -->
     <form action="editt.php" method="post">
     
     <br><br>
       
       <label for="">Full Name: </label>
        <?php  echo $rows["Name"] ?>
        <hr style="margin-bottom:0px;margin-top:1px">
        <hr style="margin-top:1px">
       <label for="">Email:</label>
       <?php  echo $rows["Email"]?>
       <hr style="margin-bottom:0px;margin-top:1px">
        <hr style="margin-top:1px">
       <label for="">StaffNumber:</label>
       <?php  echo $rows["StaffNumber"] ?>
       <hr style="margin-bottom:0px;margin-top:1px">
        <hr style="margin-top:1px">
       <label name="gender" for="">Gender:</label>
       <?php  echo $rows["Gender"]?>
       <hr style="margin-bottom:0px;margin-top:1px">
        <hr style="margin-top:1px">
       <label for="">Phone:</label>
       <?php  echo $rows["Phone"]?>
       <hr style="margin-bottom:0px;margin-top:1px">
        <hr style="margin-top:1px">
       <label for="">Age:</label>
       <?php  echo $rows["Age"]?>
       <hr style="margin-bottom:0px;margin-top:1px">
        <hr style="margin-top:1px">
      
     </form>
      </div>
      </div>
      
      
    
      <!-- Form -->
      <?php
      }}
  }
  r1();
  ?>

