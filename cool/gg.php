<?php
 
$dataPoints = array();
$dataPoint = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
  /*  $link = new \PDO(   'mysql:host=your-hostname;dbname=your-db;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );*/
	
	$conn=mysqli_connect("localhost","root","","school");
	$query="select * from classes";
	$result=mysqli_query($conn,$query);
      

	
    //$handle = $link->prepare(''); 
    //$handle->execute(); 
    //$result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
   while($rows=mysqli_fetch_assoc($result)){
    $cid=$rows['id'];
    $query1="select count(*) from Students where Class='$cid' ";
    $result1=mysqli_query($conn,$query1);
    while($row=mysqli_fetch_assoc($result1)){
    $no=$row["count(*)"];
    }
       $name=$rows['Name'];
    array_push(  $dataPoints ,
        array("y" => $no, "label" => "$name")
       
    );
  
    }
    
    $query="select * from classes";
	$result=mysqli_query($conn,$query);
      

	
    //$handle = $link->prepare(''); 
    //$handle->execute(); 
    //$result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
   while($rows=mysqli_fetch_assoc($result)){
    $cid="present";
    $query1="select count(*) from classattendance where Attended='$cid' ";
    $result1=mysqli_query($conn,$query1);
    while($row=mysqli_fetch_assoc($result1)){
    $no1=$row["count(*)"];
    }
    $cid="absent";
    $query1="select count(*) from classattendance where Attended='$cid' ";
    $result1=mysqli_query($conn,$query1);
    while($row=mysqli_fetch_assoc($result1)){
    $no2=$row["count(*)"];
    }
    $cid="late";
    $query1="select count(*) from classattendance where Attended='$cid' ";
    $result1=mysqli_query($conn,$query1);
    while($row=mysqli_fetch_assoc($result1)){
    $no3=$row["count(*)"];
    }
    $cid="sick";
    $query1="select count(*) from classattendance where Attended='$cid' ";
    $result1=mysqli_query($conn,$query1);
    while($row=mysqli_fetch_assoc($result1)){
    $no4=$row["count(*)"];
    echo $no4;
    }
      
  
  
    }
    array_push(  $dataPoint ,
    array("y" => $no1, "label" => "Present")
    
);

array_push(  $dataPoint ,
array("y" => $no2, "label" => "absent")

);

array_push(  $dataPoint ,
array("y" => $no3, "label" => "late")

);

array_push(  $dataPoint ,
array("y" => $no4, "label" => "Sick")

);
 
   
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
	
?>
  