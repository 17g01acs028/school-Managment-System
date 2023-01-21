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
  <script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
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
                        <h2><a href="index.php">Dashboard</a>/Class</h2>
                       
                </div>
                <div class="col">
                        <div class="row" id="rk" style="margin: 10px; color: ivory; text-align: center;">
                                <div class="col" id="col" style="width:80%; padding: 10px; background-color: #11c26d;background-color: #11c26d; border-right: 2px solid green;">
                                       <small onclick="printIt(document.getElementById('table').innerHTML)">Print</small> 
                                       
                                </div>
                                <div class="col" style="width: 80%; padding: 10px;background-color: #11c26d;background-color: #11c26d; border-right: 2px solid green;">
                                       <small >Import</small>
                                       
                                    </div>
                                    <div class="col" style="width: 80%; padding: 10px;background-color: #11c26d; border-right: 2px solid green;">
                                            <small onclick="javascript:demoFromHTML()">Export</small> 
                                           
                                        </div>
                                        <div class="col" style="width: 80%; padding: 10px;background-color: #11c26d;">
                                           <small onclick="document.getElementById('id02').style.display='block'" style="width:auto;" >AddClass</small>    
                                               
                                            </div>
                                           
                                       
                            </div>
                    </div>
                   
            </div>
            <hr>
            <div class="col">
                    <div class="row" id="rk" style="margin: 10px;">
                            <div class="col" id="col" >
                                   <h3>Class List</h3>
                                   
                            </div>
                            <div class="col">
                                    <form method ="post" action="students.php">
                                    <div class="row" id="rk" style="margin: 10px; color: ivory;">
                                        
                                            <div class="col" id="col" >
                                                <div id="div1" class="div11">
                                                   <input id="filter"  type="text"  placeholder="search....">
                                                </div>
                                                <div id="div1" class="div12">
                                                        <i class="fa fa-search" aria-hidden="true"></i></a>
                                                     </div>
                                            </div>
                                            <div class="col">
                                                    <select name="lim" id="select" onchange="this.form.submit()">
                                                        <option value="">1</option>
                                                        <option <?php error_reporting(0); if($_POST['lim']=='2')echo 'selected="selected"';?>value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                        <option value="">5</option>
                                                    </select>
                                                   
                                                </div>
                                                
                                                 
                                                   
                                        </div>
                                    </form> 
                                </div>
                                
                                       
                                   
                        </div>
                </div>
   
    


                <div id="id02" class="modal">
<a href="class.php">   <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span></a> 
   <!-- Material form login -->
  <div id="prod">
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Regester Class</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  <div id="res">
      <!-- Form -->
     <form action="post">
       <div id="kl">
       <label for=""><i class="fa fa-user" aria-hidden="true"></i></label>
       <input type="text" id="name" placeholder="Class Name">
       </div>
      
       <div id="btnsub">
         <button id="op1"  class="add" onclick="return false" onmousedown="add1();" style="background-color: #11c26d;color:white;margin-right:20px;width:100px;border-radius:30px;text-align:center;padding:0px;height:40px">Register</button>
         <input type="reset" value="Clear Fields" style="background-color: #11c26d;color:white;width:100px;margin-left:20px;border-radius:30px;text-align:center;padding:0px;height:40px">
       </div>
       <div id="responce"></div><br>
     </form>
      <!-- Form -->
      </div>
    </div>
  </div>
  </div>
  </div>
      <div id="table">
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col"></th>
      <th scope="col">Class Identity</th>
      
      <th scope="col" id="ops">Operation</th>
    </tr>
  </thead>
  <tbody>
  <div id="res">
    <?php
     function r(){
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
 
    <tr class="record">
   <td><?php echo $i?></td>

   <td id="ops"> <?php  echo $rows["Name"] ?></td>
   
       
     
   <td style="width:20%;"><button   id="<?php echo $rows["id"]?>" class="op1" title="delete Record"><i class="fa fa-recycle" aria-hidden="true"></i></button>
   <a  title="Click To Edit Customer" rel="facebox" href="editclass.php? id=1"><button class="edit" id="<?php echo $rows["id"]?>" onclick=""  title="Edit Record"><i class="fa fa-user-edit" aria-hidden="true"></i></button></a>
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
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
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
        url:"deleteclass.php",
        data:info,
        success:function(){

        }
      });
      
      $(this).parents(".record").animate({background:"#fbc7c7"},"fast").animate({opacity:"hide"},"slow");
   }
    return false;
  });
  
});
</script>
<script type="text/javascript">
  var win=null;
  function printIt(printThis)
  {
   
    win = window.open();
    self.focus();
    win.document.open();
    
    win.document.write('<'+'html'+'><'+'head'+'><'+'style'+'>');
    win.document.write('body, td { font-family: Verdana; font-size: 20px;} '+'<'+'/'+'style'+'>');
	win.document.write('<'+'link '+' href ="vendor/bootstrap/css/bootstrap.min.css"'+'rel="stylesheet"'+'>');
    win.document.write('<'+'/'+'head'+'><'+'body'+'>');
  
    win.document.write(printThis);
    win.document.write('<'+'/'+'body'+'><'+'/'+'html'+'>');
    win.document.close();
   
    win.print();
    win.close();
   
  }
</script>
<script>
function import() {
  var x = document.createElement("INPUT");
  x.setAttribute("type", "file");
  document.body.appendChild(x);
}
</script>
<script type="text/javascript">
        function demoFromHTML() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            // source can be HTML-formatted string, or a reference
            // to an actual DOM element from which the text will be scraped.
            source = $('#table')[0];

            // we support special element handlers. Register them with jQuery-style 
            // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
            // There is no support for any other type of selectors 
            // (class, of compound) at this time.
            specialElementHandlers = {
                // element with id of "bypass" - jQuery style selector
                '#bypassme': function(element, renderer) {
                    // true = "handled elsewhere, bypass text extraction"
                    return true
                }
            };
            margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
            };
            // all coords and widths are in jsPDF instance's declared units
            // 'inches' in this case
            pdf.fromHTML(
                    source, // HTML string or DOM elem ref.
                    margins.left, // x coord
                    margins.top, {// y coord
                        'width': margins.width, // max width of content on PDF
                        'elementHandlers': specialElementHandlers
                    },
            function(dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('Test.pdf');
            }
            , margins);
        }
    </script>
<script src="js/main.js" type="text/javascript"></script>
</body>

</html>
