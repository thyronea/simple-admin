<?php
session_start();
include('dbcon.php');



if(isset($_POST['officedeletebtn']))
{
  $office_id = mysqli_real_escape_string($con, $_POST['delete_office_id']);
  $query = "DELETE FROM office WHERE id='$office_id' ";
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
              <p>You have successfully deleted an office!</p>
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
