<?php
session_start();
include('config/dbcon.php');

//Password encryption//
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Check if email exist
$checkemail = "SELECT * FROM users WHERE email='$email'";
$checkemail_run = mysqli_query($con, $checkemail);

// If email exist
if(mysqli_num_rows($checkemail_run) > 0){
  include('messages/email-exist.php'); // will show as error but if the code is moved after "}" the file will run //
}

// If email does not exist, create new account //

  //Insert to users table//
  $sql = "INSERT INTO users (groupID, fname, lname, email, role, password)
  VALUES (?, ?, ?, ?, ?, ?)";

  //PDO bro//
  $stmt = $con ->stmt_init();

  if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $con->connect_error);
  }

  $stmt->bind_param("ssssss",
                      $_POST['groupID'],
                      $_POST['fname'],
                      $_POST['lname'],
                      $_POST['email'],
                      $_POST['role'],
                      $password_hash);

  $stmt->execute();

include('messages/register-success.php');
?>
