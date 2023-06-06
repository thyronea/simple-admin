<?php include('dbcon.php') ?>

<?php

  // Update User
  if(isset($_POST['office_update_btn']))
    {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $address1 = $_POST['address1'];
      $address1 = $_POST['address1'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];

      $query = "UPDATE office SET name='$name', address1='$address1', address2='$address2', city='$city', state='$state', zip='$zip', phone='$phone', email='$email'
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
                  <p>You have successfully updated an office!</p>
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
