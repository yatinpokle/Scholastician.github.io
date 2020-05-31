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


//check if username already exists
$sql = "SELECT  username  FROM userinfo WHERE username = ?";

 if($stmt = mysqli_prepare($link, $sql))
 {
   //echo "print 1";
   // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "s", $param_username);

              // Set parameters
              $param_username = $user;
          //    echo   $param_username;


  // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt))

          {
          //  echo "print 2";

              // Store result

              mysqli_stmt_store_result($stmt);

              // Check if username exists, if yes then verify password
                 if(mysqli_stmt_num_rows($stmt) >= 1)

                 {

                      header("Location: tutorRegistration.php");
                      echo "<script type='text/javascript'>alert('username taken');</script>";
                      exit();
                   }
          }
  }




// Attempt insert query execution
//echo "oooo";
$sql = "INSERT INTO userInfo (Name, Email, PN, SAT, Grade, ACT, Username, Password, student) VALUES ('$name', '$email','$phone', '$SAT', '$grade', '$ACT', '$user', '$pass','0')";
if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>alert('Succesfully Registered');</script>";
    session_start();
    $user = mysqli_real_escape_string($link, $_REQUEST['username']);
    $getInfo = "SELECT student FROM userInfo WHERE Username = '$user'";
    $query = mysqli_query($link, $getInfo);

    $row = mysqli_fetch_array($query);
    $student = $row['student'];
    $_SESSION['student'] = $student;
    echo $_SESSION['student'];
    $_SESSION['username'] = $user;
    header("Location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
