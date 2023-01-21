

    <?php
     function r1(){
       
  $conn=mysqli_connect("localhost","root","","school");
  $id=1;
  $query="select * from classes where `id`='$id'";
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
       <label for=""><i class="fa fa-galactic-senate" aria-hidden="true"></i></label>
       <input type="text" name="id" id="name" value="<?php  echo $rows["Name"] ?>">
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

