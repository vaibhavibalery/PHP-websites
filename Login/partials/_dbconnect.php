<?php

$username="root";
$server="localhost";
$password="";
$database="Users";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Error" . mysqli_connect_error());
}
?>