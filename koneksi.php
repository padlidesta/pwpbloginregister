<?php 

$server = "localhost";
$dbuser = "root";
$dbpass ="";
$dbname = "dbpwpb";

$conn = mysqli_connect($server,$dbuser,$dbpass,$dbname);

if (!$conn) {
    die("<script>alert('Connection Failed')</script>");
}

?>