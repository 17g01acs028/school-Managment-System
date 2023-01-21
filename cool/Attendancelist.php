<!DOCTYPE html>
<html lang="en">
<?php include('au.php');?>
<head>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover{opacity:0.5}
.dropdown:hover .dropdown-content {margin-left:-130px;display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
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

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading" styel="text-align:center;"><i title="Links" class="fa fa-link" aria-hidden="true"></i><p>Links</p></div>
      <div class="list-group list-group-flush" id="list">
	  
      <a href="index.php" class="list-group-item list-group-item-action bg-light" title="Dashboard"><i class="fa fa-tachometer-alt" aria-hidden="true"></i><p>Dashboard</p></a>
        <a href="students.php"   class="list-group-item list-group-item-action bg-light" title="Add Student"><i class="fa fa-plus" aria-hidden="true"></i><p>Students</p></a>
        <a href="teachers.php"  style="width:auto;" class="list-group-item list-group-item-action bg-light" title="Add Stuff"><i class="fa fa-plus" aria-hidden="true"></i><p>Stuff</p></a>
        <a href="class.php"  class="list-group-item list-group-item-action bg-light" title="Add Student"><i class="fa fa-plus" aria-hidden="true"></i><p>Class</p></a>
        <a href="stream.php" class="list-group-item list-group-item-action bg-light" title="Details"><i class="fa fa-asterisk" aria-hidden="true"></i><p>Streams</p></a>
        <a href="Attendance.php" class="list-group-item list-group-item-action bg-light" title="Profile"><i class="fa fa-users" aria-hidden="true"></i><p>Attendance</p></a>
        <a href="Details.php" class="list-group-item list-group-item-action bg-light" title="Status"><i class="fa fa-file" aria-hidden="true"></i><p>Reports</p></a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <div class="sidebar-heading" id="head"><p>School Mangement System</p></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
		 
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		   
            <li class="nav-item active">
              <a class="nav-link" href="#"> <i class="fa fa-bell" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="#"><i class="fa fa-comment" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item dropdown">
            <div class="dropdown">
            <a class="nav-link" onclick="ff();"> <i class="fa fa-user" aria-hidden="true"></i></a>
  <div class="dropdown-content">
    <p style="margin:5px; text-align:center;">Your Logged in as </p>
    <p  style="margin:5px; text-align:center;"><?php 
   echo  $_SESSION['user'];
    ?></p>
    <hr style="background-color:red;width:1px;">
    <a href="logout.php" style="text-align:center; background-color:#65798b">Log out</a>
  </div>
</div>
            
            </li>
          </ul>
        </div>
      </nav>
	  
 
     <br>
       
	   
            <div class="row" id="ceck">
                <div class="col">
                        <h2><a href="Attendance.php">Attendance List</a>/ <i class="fa fa-plus"></i> ADD</h2>
                       
                </div>
                <div class="col">
                        <div class="row" id="rk" style="margin: 10px; color: ivory; text-align: center;">
                                <div class="col" id="col" style="width:5%; ">
                                       <small style="width:100px; background-color: #11c26d; padding: 10px; float:right;">Print</small> 
                                       
                                </div>
                                
                                        
                                           
                                       
                            </div>
                    </div>
                   
            </div>
            <hr>
            <div class="col">
            <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Select Subject</th>
      <th scope="col">Select Class</th>
      <th scope="col">Select Stream</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <div id="res">
    <?php
     
  $conn=mysqli_connect("localhost","root","","school");
  $query="select * from subjects";
  $result=mysqli_query($conn,$query);
  //check for results
 
 
  $rs=mysqli_num_rows($result);
  
  if($rs>0){
    $i=0;
     
        ?>
 
    <tr class="record">
   <td><select name=""id="subject" style="width:100%;padding:5px; outline:none;font-size:12px;">
   <?php
    while($rows=mysqli_fetch_assoc($result)){
      $i++;
   ?>
     <option  value="<?php echo $rows['Name']?>"style="outline:none;"><?php echo $rows['Name']?></option>
     <?php
      }}
  
  ?>

   </select></td>
   <td> <select name=""id="class" style="width:100%;padding:5px; outline:none;font-size:12px;">
   <?php
   $conn=mysqli_connect("localhost","root","","school");
   $query="select * from classes";
   $result=mysqli_query($conn,$query);
   //check for results
  
  
   $rs=mysqli_num_rows($result);
   
   if($rs>0){
     $i=0;
      
    while($rows=mysqli_fetch_assoc($result)){
      $i++;
   ?>
     <option  value="<?php echo $rows['Name']?>"style="outline:none;"><?php echo $rows['Name']?></option>
     <?php
      }}
  
  ?>

   </select></td>
   <td> <select name="" id="stream" style="width:100%;padding:5px; outline:none;font-size:12px;">
   <?php
   $conn=mysqli_connect("localhost","root","","school");
   $query="select * from streams";
   $result=mysqli_query($conn,$query);
   //check for results
  
  
   $rs=mysqli_num_rows($result);
   
   if($rs>0){
     $i=0;
      
    while($rows=mysqli_fetch_assoc($result)){
      $i++;
   ?>
     <option  value="<?php echo $rows['Name']?>"style="outline:none;"><?php echo $rows['Name']?></option>
     <?php
      }}
  
  ?>
     

   </select></td>
   
   <td "> <input type="date" id="date" style="width:100%;"></td>
       
   <td ">  <button id="op3" onclick="tablek();"title="settings"><i class="fa fa-sun" aria-hidden="true"></i>Load Attendance list</button></td>
   
 </tr> 
  
  </div>
  </tbody>
</table>

                </div>
   
    

  
<script>
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

</script>
       <div id="responce">
<div>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<script src="js/main.js" type="text/javascript"></script>
</body>

</html>
