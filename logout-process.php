<?php

  session_start();
  require "config/dbcon.php";

  $email = mysqli_real_escape_string($con, $_SESSION['email']);
  $groupID = $_SESSION['groupID'];

  // insert User logout timestamp
  $query1 = "INSERT INTO logout (groupID, email)
  VALUES ('$groupID', '$email')";
  $query_run1 = mysqli_query($con, $query1);
  //----------------------------------------//

  session_destroy();
  header("Location: logout.php");
  exit(0);

?>
