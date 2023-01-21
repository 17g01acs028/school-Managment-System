<?php
  

function students(){
    $limit=10;


    $conn=mysqli_connect("localhost","root","","school");
$query="select * from students limit $limit";
$result=mysqli_query($conn,$query);
//check for results
$rs=mysqli_num_rows($result);

if($rs>0){
    $i=1;
    while($rows=mysqli_fetch_assoc($result)){
   echo "<tr>";
    echo "<th>";
    
        echo $i;
        $i++;
    echo "</th>";
    echo "<td>".$rows["adm"]." </td>";
     echo "<td>".$rows["fname"]." ".$rows["lname"]." </td>";
    
      echo "<td>".$rows["class"]." </td>";
      echo "<td>".$rows["stream"]." </td>";
     
     echo "<td id=\"tdin\"><i class=\"fa fa-recycle\" aria-hidden=\"true\"></i><i class=\"fa fa-user-edit\" aria-hidden=\"true\"></i><i class=\"fa fa-street-view\" aria-hidden=\"true\"></i><i class=\"fa fa-sun\" aria-hidden=\"true\"></i></td>";
   echo "</tr>"; 
  
    }
}}

   
function class1(){
    $conn=mysqli_connect("localhost","root","","school");
    $query="select * from class";
    $result=mysqli_query($conn,$query);
    //check for results
    $rs=mysqli_num_rows($result);
    
    if($rs>0){
        $i=1;
        while($rows=mysqli_fetch_assoc($result)){
       echo "<tr>";
        echo "<th>";
        
            echo $i;
            $i++;
          echo "</th>";
          echo "<td>".$rows["Name"]." </td>";
         echo "<td>".$rows["noofstreams"]." </td>";
         echo "<td>".$rows["StreamName"]." </td>";
         echo "<td id=\"tdin\"><i class=\"fa fa-recycle\" aria-hidden=\"true\"></i><i class=\"fa fa-user-edit\" aria-hidden=\"true\"></i><i class=\"fa fa-street-view\" aria-hidden=\"true\"></i><i class=\"fa fa-sun\" aria-hidden=\"true\"></i></td>";
         echo "</tr>"; 
      
        }
    }

}
function count1(){
    $conn=mysqli_connect("localhost","root","","school");
    $query="select count(*) from students";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_assoc($result);
     
    echo $rows["count(*)"];
}
function count3(){
    $conn=mysqli_connect("localhost","root","","school");
    $query="select count(*) from teachers";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_assoc($result);
     
    echo $rows["count(*)"];
}
function count4(){
    $conn=mysqli_connect("localhost","root","","school");
    $query="select count(*) from classes";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_assoc($result);
     
    echo $rows["count(*)"];
}
?>