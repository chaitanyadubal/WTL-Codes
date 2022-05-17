<?php
$conn = new mysqli("localhost","root","Abhishek@1","mydb");

$cmd= "select * from record";
$result = $conn->query($cmd);

if($result->num_rows >0){
while($r= $result->fetch_assoc()){
    echo "RollNo:" .$r['Rollno'].  "   Name: " .$r['Name']. "<br>";
}

}
else{
    echo "0 results";
}
$conn->close();

?>