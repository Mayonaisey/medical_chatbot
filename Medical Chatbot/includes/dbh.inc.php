<?php
   session_start();

$servername = "localhost";
$username = "root";
$password = "";
$DB = "lab3";

$conn = new mysqli($servername, $username, $password, $DB);


if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

