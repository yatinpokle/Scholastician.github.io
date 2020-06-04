<?php

$link = mysqli_connect("localhost", "nihal", "12345", "account");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
// Escape user inputs for security
$class = mysqli_real_escape_string($link, $_REQUEST['class-select']);
$topics = mysqli_real_escape_string($link, $_REQUEST['topics']);
$times = mysqli_real_escape_string($link, $_REQUEST['times']);
echo $class;

echo "hello";
echo $_SESSION['id'];
$id = $_SESSION['id'];
$sql = "UPDATE userinfo SET $class = '1', topics = '$topics', times = '$times' WHERE id = $id";
if(mysqli_query($link, $sql)){

header("Location: matchedtutor.html");
    echo "done";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
