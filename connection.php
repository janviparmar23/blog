<?php
$servername="localhost:8889";
$username="root";
$password="root";
$dbname="Blog";
$conn= mysqli_connect($servername, $username, $password,$dbname);
if(!$conn)
{
    die("connection failed");
}

?>