<!-- Modal -->
<div class="modal fade" id="officedeletemodal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="officedeletemodal-ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="officedeletemodal-ModalLabel">Delete Office</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form class="" action="components/delete-office-process.php" method="POST">
          <div class="form-group mt-3 mb-5">
            <input class="form-control mb-2" type="hidden" name="delete_office_id" id="delete_office_id">
            <p align="center">Access and data will be permanently removed.</p>
            <p align="center">Do you still want to proceed?</p>
          </div>

          <div class="form-group mb-3" align="center">
            <button type="button" data-bs-dismiss="modal" class="btn btn-outline-secondary btn-sm">No</button>
            <button type="submit" name="officedeletebtn" class="btn btn-outline-danger btn-sm">Yes</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
