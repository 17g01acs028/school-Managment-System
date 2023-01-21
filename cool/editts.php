<?php
$conn=mysqli_connect("localhost","root","","school");
$id=$_POST['id'];
$id1=$_POST['id1'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$clas=$_POST['class'];
$stream=$_POST['stream'];
$dob=$_POST['dob'];

    $query="UPDATE `students` SET `FullName`='$name',`Gender`='$gender',`DOB`='$age',
    `RegNo`='$id',`Class`='$clas',`Stream`='$stream',`DOJ`='$dob',`AcademicYear`=0 WHERE id='$id1'";
    echo $query;
    $result=mysqli_query($conn,$query);

    if($result){
        header('location:students.php');
    }
   
    ?>