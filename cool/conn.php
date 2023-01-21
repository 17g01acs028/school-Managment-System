<?php
$conn=mysqli_connect("localhost","root","","school");

    if(isset($_POST['subsr'])){
        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $adm=$_POST['adm'];
        $class=$_POST['class'];
        $stream=$_POST['stream'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $street=$_POST['street'];
        $pone=$_POST['pone'];
        $address=$_POST['address'];  
        $query="INSERT INTO `students`(`adm`, `fname`, `lname`, `class`, `stream`, `gender`, `age`, `phone`, `address`, `city`) VALUES ('$adm','$fname','$lname','$class','$stream','$gender','$age','$pone','$address','$city')";    
  
        $result=mysqli_query($conn,$query);

        echo "in";

        if($result){
        header('location:students.php');

        }else{
            echo "erro";
        }
    
    }
    if(isset($_POST['subtr'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $tno=$_POST['adm'];
        $type=$_POST['class'];
        $email=$_POST['stream'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $street=$_POST['street'];
        $pone=$_POST['pone'];
        $address=$_POST['address'];  
        $query="INSERT INTO `teachers`(`tno`, `fname`, `lname`, `email`, `type`, `age`, `gender`, `phone`, `city`, `address`) VALUES ('$tno','$fname','$lname','$email','$type','$age','$gender','$pone','$city','$address')";    
  
        $result=mysqli_query($conn,$query);

        echo "in";

        if($result){
        header('location:teachers.php');

        }else{
            echo "erro";
        }
    
    }
    
?>