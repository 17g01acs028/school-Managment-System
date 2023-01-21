

    <?php
     function r1(){
       
  $conn=mysqli_connect("localhost","root","","school");
  $id=$_POST['id'];
  $query="select * from students where `id`='$id'";
  $result=mysqli_query($conn,$query);
  //check for results
 
  $rs=mysqli_num_rows($result);
  
  if($rs>0){
      
      while($rows=mysqli_fetch_assoc($result)){
        $po=$rows['Stream'];
        ?>
        <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
      <!-- Form -->
     <form action="editts.php" method="post">
     <label name="id" value="<?php echo $rows["id"]?>">Edit Student on ID:</label>
     <div id="kl">
       <label for=""><i class="fa fa-user" aria-hidden="true"></i></label>
       <input type="text" name="id1" id="id1" placeholder="Id"  value="<?php echo $rows['id']?>" readonly>
       </div>
     <div id="kl">
       <label for=""><i class="fa fa-user" aria-hidden="true"></i></label>
       <input type="text" name="name" id="name" placeholder="Full Name"  value="<?php echo $rows['FullName']?>">
       </div>
       <div id="kl">
       <label for=""><i class="fa fa-monument" aria-hidden="true"></i></label>
       <input type="text"name="id" id="id" placeholder="RegNo" value="<?php echo  $rows['RegNo']?>">
       </div>
       <?php
  $conn=mysqli_connect("localhost","root","","school");
  $po=$rows['Class'];
  $query22="select * from classes where id='$po'";
  $result22=mysqli_query($conn,$query22);
   while($row22=mysqli_fetch_assoc($result22)){
    $ko=$row22['Name'];
    ?>
       <div id="kl">
       <label for=""><i class="fa fa-mail-bulk" aria-hidden="true"></i></label>
       <select name="class" id="class" selected="<?php echo $row22['Name']?>">
        <option value="">Class</option>
        <?php
   }?>
    <?php
  $conn=mysqli_connect("localhost","root","","school");

  $query2="select * from classes ";
  $result2=mysqli_query($conn,$query2);
   while($row2=mysqli_fetch_assoc($result2)){
    ?>
  
    <option value="<?php echo $row2['id'];?>" <?php if ($ko == $row2['Name']) echo ' selected="selected"'; ?>><?php echo $row2['Name'];?></option> 
     <?php
      }?>
      </select>
       </div>
       <?php
  
  $conn=mysqli_connect("localhost","root","","school");
  $query1="select * from streams where id='$po'";
  $result1=mysqli_query($conn,$query1);
   while($row=mysqli_fetch_assoc($result1)){
     
   $yo=$row['Name'];
     ?>
       <div id="kl">
       <label for=""><i class="fa fa-blender-phone" aria-hidden="true"></i></label>
       <select name="stream" id="stream" selected="<?php echo $row['Name'];?>" >
        <option value="" >Stream</option>

        <?php
   }?>
        <?php
   $conn=mysqli_connect("localhost","root","","school");

  $query17="select * from streams";
  $result17=mysqli_query($conn,$query17);
   while($row7=mysqli_fetch_assoc($result17)){
     ?>
 <option value="<?php  echo $row7['id'];?>"  <?php if ($yo == $row7['Name']) echo ' selected="selected"'; ?>><?php echo $row7['Name'];?></option> 
  <?php
  
   }?>
      </select>
    </div>
 
       <div id="kl">
       
       <label for=""><i class="fa fa-gavel" aria-hidden="true"></i></label>
      <select name="gender" id="gender" selected="<?php echo $rows['Gender'];?>">
      <option value="">Gender</option>
        <option value="Male" <?php if ($rows['Gender'] == 'Male') echo ' selected="selected"'; ?>>Male</option>
        <option value="Female" <?php if ($rows['Gender'] == 'Female') echo ' selected="selected"'; ?>>Female</option>
      </select>
       </div>
       
       <div id="kl">
       <label for=""><i class="fa fa-democrat" aria-hidden="true"></i></label>
       <input onblur="(this.type='Date of Birth')" onfocus="(this.type='Date')" placeholder="Date of Birth" id="age" name="age" style="width:70%;height:40px" value="<?php echo $rows['DOB'];?>">
       </div>
       <div id="kl">
       <label for=""><i class="fa fa-democrat" aria-hidden="true"></i></label>
       <input onblur="(this.type='Date of Addmisson')" onfocus="(this.type='Date')" id="dob"placeholder="Date Of Admission" id="age" style="width:70%;height:40px" value="<?php echo $rows['DOJ'];?>">
       </div>
       <div id="btnsub">
         <button id="op1"  class="add" onclick="submit" style="background-color: #11c26d;color:white;margin-right:20px;width:100px;border-radius:30px;text-align:center;padding:0px;height:40px">Save</button>

       </div>
       <div id="resp"></div><br>
     </form>
     
      <!-- Form -->
      <?php
      }}
  }
  r1();
  ?>

