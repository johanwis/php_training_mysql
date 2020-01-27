<?php


 $servername="localhost";
$username="root";
$password="";
$dbnom="reunion_island";
$conn = new mysqli($servername,$username,$password);


if($conn ->connect_error){
    echo"Connection failed: " . $conn->connect_error;
}else{

    $conn->select_db($dbnom);
}