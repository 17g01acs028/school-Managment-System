<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>School management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
  <link href="css/simple-sidebar.css" rel="stylesheet">
<link href="font/css/all.css" rel="stylesheet">
<link href="font/css/all.min.css" rel="stylesheet">
<link href="font/css/solid.css" rel="stylesheet">
<style>
#op1{
  color:red;
}
#op1:hover{

        opacity:0.5;
}
#op1 i:hover{
  -webkit-transform: rotateZ(-360deg);
        -ms-transform: rotateZ(-360deg);
        transform: rotateZ(-360deg);
        transition:1s ease;
}
#op2:hover,#op3:hover,#op4:hover{

opacity:0.5;
}
#op2 i:hover,#op3 i:hover,#op4 i:hover{
-webkit-transform: rotateZ(-360deg);
-ms-transform: rotateZ(-360deg);
transform: rotateZ(-360deg);
transition:1s ease;
}

</style>
</head>

<body>
 
<table class="table">
  <thead class="thead-light" id="resultTable" data-responsive="table">
    <tr>
      
      <th scope="col">ADM No</th>
      <th scope="col">Full Name</th>
      <th scope="col">Class</th>
      <th scope="col">Gender</th>
      <th scope="col">Stream</th>
      <th scope="col">Date Of Addmission</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  <div id="res">
    <?php
     function r(){
      $conn=mysqli_connect("localhost","root","","school");
  
  $query="select * from students";
  $result=mysqli_query($conn,$query);
  //check for results
 
 
  $rs=mysqli_num_rows($result);
  
  if($rs>0){
      
      while($rows=mysqli_fetch_assoc($result)){
        
        ?>
  <?php
  $id=$rows["Stream"];

  $query1="select * from streams where id='$id'";
  $result1=mysqli_query($conn,$query1);
   while($row=mysqli_fetch_assoc($result1)){
  $k=$row['Name'];
   }
  ?>
   <?php
  $idd=$rows["Class"];

  $query2="select * from classes where id='$idd'";
  $result2=mysqli_query($conn,$query2);
   while($row=mysqli_fetch_assoc($result2)){
  $s=$row['Name'];
  
   }
  ?>
    <tr class="record">
   

   <td> <?php  echo $rows["RegNo"] ?></td>
   <td> <?php  echo $rows["FullName"] ?></td>
   <td> <?php  echo $s?></td>
   <td> <?php  echo $rows["Gender"]?> </td>
   <td> <?php  echo $k?> </td>
   <td> <?php  echo $rows["DOJ"]?></td>
   <td> <?php  echo $rows["DOB"]?></td>
       
     
   <td><button id="<?php echo $rows["RegNo"]?>"class="op1" title="delete Record"><i class="fa fa-recycle" aria-hidden="true"></i></button>
   <a  title="Click To Edit Customer" rel="facebox" href="editteacher.php?id=1030"><button class="edit" id="<?php echo $rows["StaffNumber"]?>" onclick=""  title="Edit Record"><i class="fa fa-user-edit" aria-hidden="true"></i></button></a>
   <button id="op2" title="Profile"><i class="fa fa-street-view" aria-hidden="true"></i></button><button id="op3" title="settings"><i class="fa fa-sun" aria-hidden="true"></i></button></td>
   
 </tr> 
    <?php
      }}
  }
  r();
  ?>
  </div>
  </tbody>
</table>


<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<!-- <script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }else if(event.target == modal1){
    modal.style.display = "none";
  }
}

</script> -->
<script type="text/javascript">
$(function(){
  $(".op1").click(function(){

    var element =$(this);
    var del_id=element.attr('id');
    var info='id=' +del_id;
    console.log(info);
    if(confirm("Are you sure you want to delete this record? You can Not Undo!")){
      $.ajax({
        type:"GET",
        url:"deletet.php",
        data:info,
        success:function(){
          
         
        }
      });
      
      document.refresh();
   }
    return false;
  });
  $(".edit").click(function(){

var element =$(this);
var del_id=element.attr('id');
var info='&id=' +del_id;

console.log(info);

  $.ajax({
    type:"GET",
    url:"teachers.php",
    data:info,
    success:function(info){
      document.getElementById('id03').style.display='block'
    }
  });
 

return false;
});
});

</script>
<script src="js/main.js" type="text/javascript"></script>

    
<script src="js/main.js" type="text/javascript"></script>
</div>
</body>

</html>
