<?php
$conn=mysqli_connect("localhost","root","","school");
$id=$_POST['id'];
$Phone=$_POST['phone'];
$Name=$_POST['name'];
$Gender=$_POST['select'];
$Age=$_POST['age'];
$Email=$_POST['email'];
$StaffNumber=$_POST['staffNumber'];
    $query="UPDATE `teachers` SET `Name`='$Name',
    `Gender`='$Gender',`Age`='$Age',`Phone`=$Phone,`Email`='$Email',
    `StaffNumber`='$StaffNumber' WHERE id='$id'";
    echo $query;
    $result=mysqli_query($conn,$query);

    if($result){
        header('location:teachers.php');
    }
   
    ?>