<!-- Modal -->
<div class="modal fade" id="add-user-Modal" tabindex="-1" aria-labelledby="add-user-ModalLabel" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="add-user-ModalLabel">Add User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form class="" action="/HC/admin2/components/register-process.php" method="POST">
          <div class="form-group mb-2 mt-2">
            <input type="text" name="groupID" value="<?=$_SESSION['group_id'];?>" class="form-control" hidden required>
          </div>
          <div class="form-group mb-2 mt-2">
            <input type="text" name="fname" placeholder="First Name" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <input type="email" name="email" placeholder="Email Address" class="form-control" required>
          </div>
          <div class="dropdown mb-2">
            <select class="form-select" name="role">
              <option class="dropdown-item" disabled selected>Role</option>
              <option class="dropdown-item" value="User">User</option>
              <option class="dropdown-item" value="Admin">Admin</option>
            </select>
          </div>
          <div class="form-group mb-2">
            <input type="password" name="password" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control"
            placeholder="Password" required>
          </div>
          <div class="form-group mb-3">
            <input type="password" name="cpassword" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control"
            placeholder="Confirm Password" required>
          </div>
          <div class="form-group mb-3" align="center">
            <button type="reset" value="reset" class="btn btn-outline-secondary btn-sm">Clear</button>
            <button type="submit" name="register_btn" class="btn btn-outline-secondary btn-sm">Create</button>
          </div>
        </form>


      </div>
    </div>
  </div>
</div>
