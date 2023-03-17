<?php
$localhost="localhost";
$username="root";
$pass="dhanveer@";
$db="dhannu";
$sql=mysqli_connect($localhost,$username,$pass,$db);
if($sql){
    echo "Connected";
}else{
    Echo "Not Connected";
}
?>