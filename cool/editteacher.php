

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
        <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
      <!-- Form -->
     <form action="editt.php" method="post">
     <label name="id" value="<?php echo $rows["id"]?>">Edit Stuff on ID: <?php echo $rows["id"]?></label>
     <div id="kl">
       <label for=""><i class="fa fa-galactic-senate" aria-hidden="true"></i></label>
       <input type="text" name="id" id="name" value="<?php  echo $rows["id"] ?>">
       </div>
       <div id="kl">
       <label for=""><i class="fa fa-user" aria-hidden="true"></i></label>
       <input type="text" name="name" id="name" value="<?php  echo $rows["Name"] ?>">
       </div>
       <div id="kl"> <label for=""><i class="fa fa-mail-bulk" aria-hidden="true"></i></label>
       <input type="email" name="email" id="email" value="<?php  echo $rows["Email"]?>">
       </div>
       <div id="kl">
       <label for=""><i class="fa fa-monument" aria-hidden="true"></i></label>
       <input type="text" value="<?php  echo $rows["StaffNumber"] ?>" id="id" name="staffNumber" >
       </div>
       <div id="kl">
       <label for=""><i class="fa fa-gavel" aria-hidden="true"></i></label>
      <select name="select" id="gender" value=" <?php  echo $rows["Gender"]?> ">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
       </div>
       <div id="kl">
       <label for=""><i class="fa fa-blender-phone" aria-hidden="true"></i></label>
       <input type="text"  name="phone"id="phone" value="<?php  echo $rows["Phone"]?>">
       </div>
       <div id="kl">
       <label for=""><i class="fa fa-democrat" aria-hidden="true"></i></label>
       <input type="text" name="age" value="<?php  echo $rows["Age"]?>" id="age">
       </div>
       <div id="btnsub">
         <button id="op1"  class="add" value="submit" >Save Changes</button>
       </div>
       <div id="responce"></div><br>
     </form>
     
      <!-- Form -->
      <?php
      }}
  }
  r1();
  ?>

