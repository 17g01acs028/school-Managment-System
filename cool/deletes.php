<?php
$conn=mysqli_connect("localhost","root","","school");
$id=$_GET['id'];
    $query="DELETE FROM `students` WHERE RegNo='$id'";
    echo $query;
    $result=mysqli_query($conn,$query);

    echo "var c=$result";
   
    ?>