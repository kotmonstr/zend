<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE zend";

if ($conn->query($sql) === TRUE) {
    echo "DATABASE zend created successfully";
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error). '<br />';
    }
} else {
    echo  $conn->error .'<br />';
}
$dbname = "zend";


// add tables;
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS  users (
    id INTEGER  NOT NULL PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(32) NULL,
    password_salt VARCHAR(32) NULL,
    real_name VARCHAR(150) NULL)";
$conn->query($sql);
if ($conn->error) {
    echo "Table users created". '<br />';
}else{
    echo "Table users allredy exist". '<br />';
}





$conn->close();
die();
?>



