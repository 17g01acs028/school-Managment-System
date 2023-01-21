<?php
$conn=mysqli_connect("localhost","root","","school");
$id=$_GET['id'];
    $query="DELETE FROM classes WHERE id='$id'";
    echo $query;
    $result=mysqli_query($conn,$query);

    echo "var c=$result";
   
    ?>