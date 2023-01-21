<?php
$conn=mysqli_connect("localhost","root","","school");
$id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$clas=$_POST['clas'];
$stream=$_POST['stream'];
$dob=$_POST['dob'];

if(empty($id)||empty($name)||empty($clas)||empty($gender)||empty($stream)||empty($age)||empty($dob)){
    echo "please Fill all Fields";
}else{
    $query="INSERT INTO `students`(`id`, `FullName`, `Gender`, `DOB`, `RegNo`, `Class`, `Stream`,  `DOJ`,`AcademicYear`) VALUES 
    (null,'$name','$gender','$age','$id','$clas','$stream','$dob',0)";
    
   // echo $query;
    $result=mysqli_query($conn,$query);

    if($result){

echo "Record Inserted Success Fully";

    }else{
        echo "Record Was Not Inserted";
    }
}
    ?>