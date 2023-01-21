<!DOCTYPE html>
<html lang="en">
<?php include('au.php');?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>School management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
<link href="font/css/all.css" rel="stylesheet">
<link href="font/css/all.min.css" rel="stylesheet">
<link href="font/css/solid.css" rel="stylesheet">
</head>

<body>

  
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Student Name</th>
      <th scope="col">RegNo</th>
      <th scope="col">Class</th>
      <th scope="col">Stream</th>
      <th scope="col">Attendance</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <div id="res">
    <?php
  
     function r(){
      $sub=$_POST['sub'];
      $stream=$_POST['stream'];
      $clas=$_POST['clas'];
      $date=$_POST['date'];
      if(empty($date)){echo "Please Choose Date, Date Cannot be Empty!";}else{
      echo "Attendance List for class: ".$clas." ,Stream: ".$stream." ,Subject: ".$sub." Date ".$date;
     
     
      $conn=mysqli_connect("localhost","root","","school");
      $query="select id from streams where Name='$stream' ";
      $result=mysqli_query($conn,$query);
      while($mum=mysqli_fetch_assoc($result)){
        $str1=  $mum['id'];
      }
  $query="select id from classes where Name='$clas'";
  $result=mysqli_query($conn,$query);
  while($mum1=mysqli_fetch_assoc($result)){
    $str= $mum1['id'];
  }
  

 
  $query="select * from students where stream='$str1' and Class='$str'";
  $result=mysqli_query($conn,$query);
  //check for results
 
 
  $rs=mysqli_num_rows($result);
  
  if($rs>0){
    $i=0;
      while($rows=mysqli_fetch_assoc($result)){
       $i++;
        ?>
 
    <tr class="record">
   <td> <?php  echo $sub;?></td>
   <td> <?php  echo $rows["FullName"] ?></td>
   <td> <?php  echo $rows["RegNo"] ?></td>
   <td> <?php  echo $clas ?></td>
   <td> <?php  echo $stream ?></td>
   <td> <select name="" id="" style="width:100%;padding:5px; outline:none;font-size:12px;">
     <option value="Present"style="outline:none;">Present</option>
     <option value="Absent"style="outline:none;">Absent</option>
     <option value="Sick"style="outline:none;">Sick</option>
     <option value="Late"style="outline:none;">Late</option>

   </select></td>
  
     
   <td style="width:20%;"><button id="<?php echo $rows["RegNo"]?>"class="op1" title="delete Record"><i class="fa fa-recycle" aria-hidden="true"></i></button>
   <a  title="Click To Edit Customer" rel="facebox" href="editteacher.php?id=1030"><button class="edit" id="<?php echo $rows["StaffNumber"]?>" onclick=""  title="Edit Record"><i class="fa fa-user-edit" aria-hidden="true"></i></button></a>
   <button id="op2" title="Profile"><i class="fa fa-street-view" aria-hidden="true"></i></button><button id="op3" title="settings"><i class="fa fa-sun" aria-hidden="true"></i></button></td>
   
 </tr> 
    <?php
      }}}
  }
  r();
  ?>
  </div>
  </tbody>
</table>
<div id="save">
<button style="width:80%; padding:10px;margin:10px; color:white;  background-color: #11c26d;border:none; border-radius:10px;outline:none; "><i style="margin-right:2px;margin-top:5px;"class="fa fa-save" aria-hidden="true"></i>save</button>
</div>

</body>

</html>
