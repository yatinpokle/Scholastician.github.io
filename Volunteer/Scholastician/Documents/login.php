
<?php
session_start();
$link = mysqli_connect("localhost", "nihal", "12345", "account");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
  echo "connected to database";
}


$user = mysqli_real_escape_string($link, $_REQUEST['username']);
$pass = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "SELECT  username  FROM userinfo WHERE username = ?";

 if($stmt = mysqli_prepare($link, $sql)){
   // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "s", $param_username);

              // Set parameters
              $param_username = $user;
              echo   $param_username;


  // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt))
          {
              // Store result

              mysqli_stmt_store_result($stmt);

              // Check if username exists, if yes then verify password
                 if(mysqli_stmt_num_rows($stmt) >= 1)
                 {
                   echo "Username found";
                   $sql1 =   "SELECT Username, Password FROM userinfo WHERE Username=? and Password=?";


                   if($stmt1 = mysqli_prepare($link, $sql1))
                   {


                     mysqli_stmt_bind_param($stmt1,"ss", $param_username, $param_password);
                     //   mysqli_stmt_bind_param($stmt1, "s",$param_password);

                       $param_username=$user;
                       $param_password=$pass;


                       if(mysqli_stmt_execute($stmt1))
                       {
                       mysqli_stmt_store_result($stmt1);
                       if(mysqli_stmt_num_rows($stmt1) >= 1)
                                {

                                  echo "password found";
                                    echo "<script type='text/javascript'>alert('Succesfully logged in');</script>";


                                    session_start();
                                    $user = mysqli_real_escape_string($link, $_REQUEST['username']);
                                    $getInfo = "SELECT student FROM userinfo WHERE Username = '$user'";
                                    $query = mysqli_query($link, $getInfo);
                                    if(mysqli_num_rows($query) == 0)
                                    {
                                      echo "yes";
                                    }

                                    $row = mysqli_fetch_array($query);
                                    $student = $row['student'];
                                    $_SESSION['student'] = $student;
                                    $user = mysqli_real_escape_string($link, $_REQUEST['username']);
                                    $getInfo = "SELECT id FROM userinfo WHERE Username = '$user'";
                                    $query = mysqli_query($link, $getInfo);

                                    $row = mysqli_fetch_array($query);
                                    $id = $row['id'];
                                    $_SESSION['id'] = $id;
                                    $_SESSION['username'] = $user;
                                    echo $_SESSION['username'];
                                    header("Location: index.php");
                                }
                        else
                        {
                          echo "<script>alert('Username or Password is incorrect'); document.location='loginpage.php'</script>";
                          die;
                        }



                       }



                   }




                  }
                  else{
                    echo "<script>alert('Username or Password is incorrect'); document.location='loginpage.php'</script>";
                    die;
                  }
}
}
?>
