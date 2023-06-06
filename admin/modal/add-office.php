<!-- Modal -->
<div class="modal fade" id="add-office-Modal" tabindex="-1" aria-labelledby="add-office-ModalLabel" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="add-office-ModalLabel">Add Office</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <small><span>Group ID: <b><?=$_SESSION["group_id"];?></b></span></small>

        <form class="" action="/HC/admin2/components/register-office-process.php" method="POST">
          <div class="form-group mb-2 mt-2">
            <input type="text" name="groupID" value="<?=$_SESSION['group_id'];?>" class="form-control" hidden required>
          </div>
          <div class="form-group mb-2 mt-2">
            <input type="text" name="name" placeholder="Name of Office" class="form-control" required>
          </div>
          <div class="form-group mb-2 mt-2">
            <input type="text" name="address1" placeholder="Address" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <input type="text" name="address2" placeholder="Address 2" class="form-control">
          </div>
          <div class="form-group mb-2">
            <input type="text" name="city" placeholder="City" class="form-control" required>
          </div>
          <div class="dropdown mb-2">
            <select class="form-select" name="state" required>
              <option class="dropdown-item" selected>CA</option>
              <option class="dropdown-item" value="AL">AL</option>
              <option class="dropdown-item" value="AK">AK</option>
              <option class="dropdown-item" value="AK">AZ</option>
              <option class="dropdown-item" value="AK">AR</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <input type="text" name="zip" placeholder="Zip" class="form-control" required>
          </div>
          <div class="form-group mb-4">
            <input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
          </div>
          <div class="form-group mb-4">
            <input type="text" name="email" placeholder="Email Address" class="form-control" required>
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
