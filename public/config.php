<?php

$server = "localhost";
$Username = "root";
$password = "";
$database = "";

$conn = mysqli_connect($server , $Username , $password , $database);

if(!$conn)
{
    die("<script>alert('Connection failed.')</script>");
}

?>