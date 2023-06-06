<?php
include('login-process.php');
include('components/header.php');
?>

   <div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
          <div class="card">
           <div class="card-body">

             <div class="mb-2">
               <?php if ($is_invalid): ?>
               <em style="color:red">Invalid login</em>
             <?php endif; ?>
             </div>

              <form method="post">
              <div class="mb-4">
                <h4 align="center">Log in to Admin</h4>
              </div>

              <div class="form-group mb-2">
                <label for="">Group ID</label>
                <input type="text" name="groupID" placeholder="" class="form-control">
              </div>

              <div class="form-group mb-2">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="" class="form-control" required>
              </div>

              <div class="form-group mb-3">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="" class="form-control" required>
              </div>

              <div class="form-group mb-2" align="center">
                <button type="submit" name="login" class="btn btn-outline-secondary btn-sm">Login</button>
              </div>

              <div class="mt-4">
                <small>Don't have an account? <a href="register.php">Register</a></small><br>
                <small>Forgot <a href="#">Password?</a></small>
              </div>

           </div>
          </div>
        </div>
      </div>
              </form>
    </div>
   </div>

<?php include('components/footer-bottom.php'); ?>
