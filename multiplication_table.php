<!DOCTYPE html>
<html>
  
<body>
    <center>  
        <form method="POST">
            Enter a number: 
            <input type="text" name="number">
              
            <input type="Submit" 
                value="Get Multiplication Table">
        </form>
    </center>
</body>
  
</html>
  
<?php
if($_POST) {
    $num = $_POST["number"];
  
    echo("<p 
        Multiplication Table of $num: </p>
    ");
          
    for ($i = 1; $i <= 10; $i++) {
        echo ("<p style='text-align: center;'>$num"
            . " X " . "$i" . " = " 
            . $num * $i . "</p>
        ");
    }
}
?>