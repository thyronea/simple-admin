
      <div class="card m-1 shadow" style="width: 20rem; height: auto;">
        <div class="card-body mt-3 mb-3">

          <table class="table align-middle table-borderless table-sm table-hover text-nowrap">
            <tbody align="center" style="text-align: left">
              <?php
              $groupID = $_SESSION["group_id"]; // this code will only show users from the same groupID
              $query = "SELECT * FROM office WHERE groupID='$groupID' ";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0)
              {
                foreach($query_run as $office)
                {
                  ?>
                  <tr>

                    <td hidden><?= $office['id'];?></td>
                    <td><?= $office['name'];?></td>
                    <td hidden><?= $office['address1'];?></td>
                    <td hidden><?= $office['address2'];?></td>
                    <td hidden><?= $office['city'];?></td>
                    <td hidden><?= $office['state'];?></td>
                    <td hidden><?= $office['zip'];?></td>
                    <td hidden><?= $office['phone'];?></td>
                    <td hidden><?= $office['email'];?></td>

                    <td>
                      <button type="button" name="office-edit" class="btn btn-outline-secondary-borderless focus-ring btn-md office-editbtn" data-bs-toggle="modal" data-bs-target="#office-edit">
                        <i class="bi bi-gear" ></i>
                      </button>
                    </td>
                    <td>
                      <button type="button" class="btn focus-ring border-none officedeletebtn" data-bs-toggle="modal" data-bs-target="#officedeletemodal">
                        <i class="bi bi-trash"></i>
                      </button>
                    </td>

                  </tr>
                  <?php
                }
              }
              else
              {
              ?>
                  <tr>
                    <td colspan="6" align="center">No Office Data Found</td>
                  </tr>
              <?php
              }
              ?>
            </tbody>
          </table>

        </div>
      </div>
