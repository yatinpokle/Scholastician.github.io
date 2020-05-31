<?php

$link = mysqli_connect("localhost", "nihal", "12345", "account");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone_number']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$grade = mysqli_real_escape_string($link, $_REQUEST['grade']);
$user = mysqli_real_escape_string($link, $_REQUEST['username']);
$pass = mysqli_real_escape_string($link, $_REQUEST['password']);

// Attempt insert query execution
$sql = "INSERT INTO userinfo (Name, Email, PN, Grade, Username, Password, student) VALUES ('$name', '$email','$phone', '$grade', '$user', '$pass', '1')";
if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>alert('Succesfully Registered');</script>";
    session_start();
    $user = mysqli_real_escape_string($link, $_REQUEST['username']);
    $getInfo = "SELECT student FROM userinfo WHERE Username = '$user'";
    $query = mysqli_query($link, $getInfo);
    if(mysqli_num_rows($query) == 0)
    {
      echo "yes";
    }
    echo "no";
    echo "hello";
    $row = mysqli_fetch_array($query);
    $student = $row['student'];
    echo $user;
    $_SESSION['student'] = $student;
    echo $_SESSION['student'];
    $_SESSION['username'] = $user;
    echo $_SESSION['username'];


    header("Location: studentHomePage.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
