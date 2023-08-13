<?php 
$host='localhost';
$username='root';
$password="";
$database='employees';

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
 die("Could not connect to server" . mysqli_connect_error());
}

?>