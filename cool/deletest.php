<?php
$conn=mysqli_connect("localhost","root","","school");
$id=$_GET['id'];
    $query="DELETE FROM streams WHERE id='$id'";
    echo $query;
    $result=mysqli_query($conn,$query);

    echo "var c=$result";
   
    ?>