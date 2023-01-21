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
<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 30px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}
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
	  
 
      <div class="container-fluid" id="mainc">
        <h2><a href="index.php">Dashboard</a></h2>
        <hr>
	  <div class="row">
  <div class="col" id="col1">
  <div id="col1_inner">
    <div id="inn">
    <p>Students</p>
    <h1><?php
    include 'fetch.php';
    count1();
    ?></h1>
    <i class="fa fa-user" aria-hidden="true">Students</i><br>
    <hr>
    <a href="students.php"><i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>View</a>
 </div>
</div>
  </div>

  <div class="col" id="col2">
  <div id="col2_inner">
      <div id="inn">
     <p>Classes</p>
     <h1><?php
  
  count4();
    ?></h1></h1>
     <i class="fa fa-history" aria-hidden="true">Classes</i><br>
     <hr>
    <a href="class.php"><i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>View</a>
 </div>
</div>
  </div>
  <div class="col" id="col3">
  <div id="col1_inner">
      <div id="inn">
     <p>Teachers</p>
     <h1><?php
  
    count3();
    ?></h1>
     <i class="fa fa-user-astronaut" aria-hidden="true">Teachers</i><br>
     <hr>
    <a href="teachers.php"><i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>View</a>
 </div>
</div>
  </div>
  <hr>
  
 </div>

        <hr style="margin-top:0px;margin-bottom:0px;background-color:green">
	  <div class="row">
  <div class="col" id="col1">
  <div id="col1_inner">
    <div id="inn">
    <p>Streams</p>
    <h1><?php
    
    count1();
    ?></h1>
    <i class="fa fa-user" aria-hidden="true">Streams</i><br>
    <hr>
    <a href="students.php"><i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>View</a>
 </div>
</div>
  </div>

  <div class="col" id="col2">
  <div id="col2_inner">
      <div id="inn">
     <p>Attendance</p>
     <h1><?php
  
  count4();
    ?></h1></h1>
     <i class="fa fa-history" aria-hidden="true">Attendance</i><br>
     <hr>
    <a href="class.php"><i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>View</a>
 </div>
</div>
  </div>
  <div class="col" id="col3">
  <div id="col1_inner">
      <div id="inn">
     <p>Subjects</p>
     <h1><?php
  
    count3();
    ?></h1>
     <i class="fa fa-user-astronaut" aria-hidden="true">Subjects</i><br>
     <hr>
    <a href="teachers.php"><i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>View</a>
 </div>
</div>
  </div>
  
  

      </div>
      
    </div>
    <center><footer style="color:blue" >&copy <small>Copyright 2019 by Steve Mutio</small> </footer></center>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
 


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
// When the user clicks on div, open the popup

</script>
  <!-- Menu Toggle Script -->
  <script>
  function ff() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
