<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="woodpick";

$conn=mysqli_connect($servername,$username,$password,$dbname);
// if($conn)
// {
//     echo "You are connected Now";
// }
// else
// {
//     echo "You are not connected";
// }

?>