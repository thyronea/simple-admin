<!-- Modal -->
<div class="modal fade" id="user-log-Modal" tabindex="-1" aria-labelledby="user-log-ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="user-log-ModalLabel">User Log</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <table class="table align-middle table-borderless table-sm table-hover text-nowrap">
          <thead>
            <th>User</th>
            <th>Date & Time</th>
          </thead>
          <tbody align="center" style="text-align: left">
            <?php
            $groupID = $_SESSION["group_id"]; // this code will only show users from the same groupID
            $query = "SELECT * FROM login WHERE groupID='$groupID' ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
              foreach($query_run as $login)
              {
                ?>
                <tr>

                  <td hidden><?= $login['id'];?></td>
                  <td><?= $login['email'];?></td>
                  <td ><?= $login['timestamp'];?></td>

                </tr>
                <?php
              }
            }
            else
            {
            ?>
                <tr>
                  <td colspan="6" align="center">No User Data Found</td>
                </tr>
            <?php
            }
            ?>
          </tbody>
        </table>


      </div>
    </div>
  </div>
</div>
