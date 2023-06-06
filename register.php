<?php
session_start();
include('components/header.php');
include('components/body.php');
?>


<div class="py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">

        <div class="card">
          <div class="card-body">

            <form class="" action="register-process.php" method="POST">

              <div class="mb-2">
                <small>Already have an account? <a href="login.php">Log in</a></small>
              </div>
              <div class="mb-4">
                <h4>Sign up for Admin</h4>
              </div>
              <div class="form-group mb-2">
                <input type="text" name="groupID" id="groupID" hidden>
              </div>
              <div class="form-group mb-2">
                <label for="">First Name</label>
                <input type="text" name="fname" placeholder="" class="form-control" required>
              </div>
              <div class="form-group mb-2">
                <label for="">Last Name</label>
                <input type="text" name="lname" placeholder="" class="form-control" required>
              </div>
              <div class="form-group mb-2">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="" class="form-control" required>
              </div>
              <div class="form-group mb-3" hidden>
                <label>Role</label>
                <input type="text" name="role" value="Admin" required>
              </div>
              <div class="form-group mb-2">
                <label>Password</label>
                  <a tabindex="0" role="button" style="color:red"
                  data-bs-toggle="popover"
                  data-bs-trigger="focus"
                  data-bs-title="Password format"
                  data-bs-content="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters."
                  ><b>!</b></a>
                <input type="password" name="password" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control"
                required>
              </div>
              <div class="form-group mb-3">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control"
                required>
              </div>
              <div class="form-group mb-2" align="center">
                <button type="submit" name="register_btn" class="btn btn-outline-secondary btn-sm">Register</button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!--Script to generate random Group ID-->
<script>
function randomNumber(len) {
  var randomNumber;
  var n = '';

  for (var count = 0; count < len; count++) {
    randomNumber = Math.floor((Math.random() * 5) + 1);
    n += randomNumber.toString();
  }
  return n;
}

document.getElementById("groupID").value = randomNumber(6);
</script>


<?php include('components/footer-bottom.php'); ?>
