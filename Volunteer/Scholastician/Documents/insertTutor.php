<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "nihal", "1234", "account");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone_number']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$grade = mysqli_real_escape_string($link, $_REQUEST['grade']);
$SAT = mysqli_real_escape_string($link, $_REQUEST['SAT']);
$ACT = mysqli_real_escape_string($link, $_REQUEST['ACT']);
$user = mysqli_real_escape_string($link, $_REQUEST['username']);
$pass = mysqli_real_escape_string($link, $_REQUEST['password']);
// Attempt insert query execution
$sql = "INSERT INTO userInfo (Name, Email, PN, SAT, Grade, ACT, Username, Password) VALUES ('$name', '$email','$phone', '$SAT', '$grade', '$ACT', '$user', '$pass')";
if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>alert('Succesfully Registered');</script>";
    include("tutorHomePage.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
