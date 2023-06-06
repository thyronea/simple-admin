<?php
session_start();
include('dbcon.php');



if(isset($_POST['userdeletebtn']))
{
  $user_id = mysqli_real_escape_string($con, $_POST['delete_id']);
  $query = "DELETE FROM users WHERE id='$user_id' ";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    ?>

    <?php
    include('header.php');
    ?>

      <div class="container">
        <div class="py-5">
          <div class="row justify-content-center mt-5">
            <div align="center">
              <p>You have successfully deleted a user!</p>
              <a class="btn btn-outline-secondary btn-sm" href="/HC/admin/admin.php"><small>Back</small></a>
            </div>
          </div>
        </div>
      </div>

    <?php
    include('footer.php');
    ?>

    <?php
  }
  else
  {
    echo "Error";
    header("location: admin.php");
  }
}
?>
