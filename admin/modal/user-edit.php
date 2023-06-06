<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editmodal-ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editmodal-ModalLabel">User Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3" align="center">
          <small><span>Group ID: <b><?=$_SESSION["group_id"];?></b></span></small>
        </div>

        <form class="" action="components/user-edit-process.php" method="POST">
          <div class="form-group mb-2">
            <input type="text" name="id" id="id" class="form-control" hidden required>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="fname" id="fname" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="lname" id="lname" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="dropdown mb-3">
            <select class="form-select" name="role" id="role" required>
              <option class="dropdown-item" disabled selected>select one</option>
              <option class="dropdown-item" value="User">User</option>
              <option class="dropdown-item" value="Admin">Admin</option>
            </select>
          </div>

          <div class="form-group mb-3" align="center">
            <button type="reset" value="reset" class="btn btn-outline-secondary btn-sm">Clear</button>
            <button type="submit" name="update_btn" class="btn btn-outline-secondary btn-sm">Update</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
