<!-- Modal -->
<div class="modal fade" id="office-edit" tabindex="-1" data-bs-backdrop="static" aria-labelledby="office-edit-ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="office-edit-ModalLabel">Edit Office</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3" align="center">
          <small><span>Group ID: <b><?=$_SESSION["group_id"];?></b></span></small>
        </div>

        <form class="" action="components/office-edit-process.php" method="POST">
          <div class="form-group mb-2">
            <input type="text" name="id" id="office_id" class="form-control" hidden required>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="address1" id="address1" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="address2" id="address2" class="form-control">
          </div>
          <div class="form-group mb-2">
            <input type="text" name="city" id="city" class="form-control" required>
          </div>
          <div class="dropdown mb-2">
            <select class="form-select" name="state" id="state" required>
              <option class="dropdown-item" disabled>select one</option>
              <option class="dropdown-item" value="CA">CA</option>
              <option class="dropdown-item" value="AL">AL</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <input type="text" name="zip" id="zip" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="phone" id="phone" class="form-control" required>
          </div>
          <div class="form-group mb-4">
            <input type="text" name="email" id="office_email" class="form-control" required>
          </div>

          <div class="form-group mb-3" align="center">
            <button type="reset" value="reset" class="btn btn-outline-secondary btn-sm">Clear</button>
            <button type="submit" name="office_update_btn" class="btn btn-outline-secondary btn-sm">Update</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
