<?php
$color =$_REQUEST['color'];
echo "You have choosen:" .$color;
setcookie("color",$color,time()+(86400*30));
echo $_COOKIE['color'];

?>