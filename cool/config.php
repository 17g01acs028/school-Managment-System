<?php
session_start();
$name=$_POST['name'];
$pass=$_POST['pass'];
if(isset($_POST['submit'])){
      $conn=mysqli_connect("localhost","root","","school");
  
  $query="select * from users where name='$name' and password='$pass'";
  $result=mysqli_query($conn,$query);
  //check for results
 
 if($rs=mysqli_num_rows($result)>0){
$_SESSION['user']=$name;
header('location:index.php');
      }}
        ?>