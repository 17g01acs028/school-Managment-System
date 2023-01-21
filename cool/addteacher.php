<?php
$conn=mysqli_connect("localhost","root","","school");
$id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];

if(empty($id)||empty($name)||empty($email)||empty($gender||empty($phone)||empty($age))){
    echo "please Fill all Fields";
}else{
    $query="INSERT INTO `teachers`(`id`, `Name`, `Gender`, `Age`, `Phone`, `Email`, `StaffNumber`) VALUES 
    (null,'$name','$gender','$age','$phone','$email','$id')";
   // echo $query;
    $result=mysqli_query($conn,$query);

    if($result){

echo "Record Inserted Success Fully";

    }else{
        echo "Record Was Not Inserted";
    }
}
    ?>