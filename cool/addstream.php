<?php
$conn=mysqli_connect("localhost","root","","school");
$name=$_POST['name'];


if(empty($name)){
    echo "please Fill all Fields";
}else{
    $query="INSERT INTO `streams`( id,`Name`) VALUES 
    (null,'$name')";
   // echo $query;
    $result=mysqli_query($conn,$query);

    if($result){

echo "Record Inserted Success Fully";

    }else{
        echo "Record Was Not Inserted";
    }
}
    ?>