<?php

$link = mysqli_connect("localhost", "nihal", "12345", "account");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
// Escape user inputs for security
$class = mysqli_real_escape_string($link, $_REQUEST['class-select']);


echo $class;

echo "hello";
echo $_SESSION['id'];
$id = $_SESSION['id'];
$sql = "UPDATE userinfo SET $class = '1' WHERE id = $id";
if(mysqli_query($link, $sql)){

header("Location: matchedClasses.php");
    echo "done";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
