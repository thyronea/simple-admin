<?php include('dbcon.php') ?>

<?php

  // Update User
  if(isset($_POST['update_btn']))
    {
      $id = $_POST['id'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $role = $_POST['role'];

      $query = "UPDATE users SET fname='$fname', lname='$lname', email='$email', role='$role'
      WHERE id='$id' ";

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
                  <p>You have successfully updated a user!</p>
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
