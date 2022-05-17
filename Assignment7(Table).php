<?php
$n = $_REQUEST['num'];

for($i=1;$i<=10;$i++)
{   
    $t = $i * $n;
    echo "$n  *  $i = $t<br>";
}

?>