<?php
include('config/dbcon.php');

$is_invalid = false;

if(isset($_POST['login']))
{
  $login = mysqli_real_escape_string($con, $_POST['login']);
  $groupID = htmlspecialchars($_POST['groupID']);
  $email = htmlspecialchars($_POST['email']);

  // insert User login timestamp
  $query1 = "INSERT INTO login (groupID, email)
  VALUES ('$groupID', '$email')";
  $query_run1 = mysqli_query($con, $query1);
  //----------------------------------------//

  $query = "SELECT * FROM users WHERE email='$email' ";
  $query_run = mysqli_query($con, $query);

  $user = mysqli_fetch_assoc($query_run);

  if ($user) {

    if (password_verify($_POST["password"], $user["password"])) {

        session_start();

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["group_id"] = $user["groupID"];
        $_SESSION["fname"] = $user["fname"];
        $_SESSION["lname"] = $user["lname"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["role"] = $user["role"];

        if($_SESSION["role"] == 'Admin')
        {
          header("Location: admin/index.php");
          exit(0);
        }
        elseif($_SESSION["role"] =='User') {
          // code...
        }
        header("Location: index.php");
        exit(0);
    }
  }

  $is_invalid = true;
}

?>
