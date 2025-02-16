<?php
$servername="localhost";
$password="";
$dbname="swastik";
$conn=new mysqli(hostname: $servername, $username, $password,$dbname);
if (!$conns) {
    die("connection failed! " . mysqli_connect_error());
}