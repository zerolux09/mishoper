<?php
require_once 'config.php';

$name = ($_POST['name']);
// $date = trim($_POST['date']);
$comment = ($_POST['comment']);
$time = ($_POST['time']);




if ($name =='' OR $comment=='' ){
    echo 2;
    die;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO comments (name, date, comment ) VALUES ('".$name."','".$time."' ,'". $comment ."')";

if ($conn->query($sql) === TRUE) {
    echo   1 ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();