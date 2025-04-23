<?php 
$server="127.0.0.1";
$username="root";
$password="";
$db="yat";

$conn=mysqli_connect($server,$username,$password,$db);

if (!$conn) {
    echo "Error connecting to DB";
}else{
    echo "Connected";
}
?>