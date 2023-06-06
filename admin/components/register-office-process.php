<?php
session_start();
include('dbcon.php');


// Check if email exist
$checkaddress = "SELECT * FROM office WHERE address1='$address1'";
$checkaddress_run = mysqli_query($con, $checkaddress);

// If email exist
if(mysqli_num_rows($checkaddress_run) > 0){
  include('admin.php'); // will show as error but if the code is moved after "}" the file will run //
}

// If email does not exist, create new account //

  //Insert to users table//
  $sql = "INSERT INTO office (groupID, name, address1, address2, city, state, zip, phone, email)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

  //PDO bro//
  $stmt = $con ->stmt_init();

  if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $con->connect_error);
  }

  $stmt->bind_param("sssssssss",
                      $_POST['groupID'],
                      $_POST['name'],
                      $_POST['address1'],
                      $_POST['address2'],
                      $_POST['city'],
                      $_POST['state'],
                      $_POST['zip'],
                      $_POST['phone'],
                      $_POST['email']);

  $stmt->execute();
?>

<?php
include('header.php');
?>

  <div class="container">
    <div class="py-5">
      <div class="row justify-content-center mt-5">
        <div align="center">
          <p>You have successfully registered your office!</p>
          <a class="btn btn-outline-secondary btn-sm" href="/HC/admin/admin.php"><small>Back</small></a>
        </div>
      </div>
    </div>
  </div>

<?php
include('footer.php');
?>
