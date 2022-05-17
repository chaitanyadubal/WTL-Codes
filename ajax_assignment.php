<?php

$conn=new mysqli("localhost","root","Abhishek@1","mydb");
$rec=$_REQUEST['Rollno'];

$cmd="select * from record where Rollno=$rec";

$result=mysqli_query($conn,$cmd);
 while($row=mysqli_fetch_assoc($result)){
     $jsonArr[]=$row;
 }
 echo json_encode($jsonArr);
mysqli_close($conn);
?>