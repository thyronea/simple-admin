
      <div class="card m-1 shadow" style="width: 20rem; height: auto;">
        <div class="card-body mt-2">

          <table class="table align-middle table-borderless table-sm table-hover text-nowrap">
            <tbody align="center" style="text-align: left">
              <?php
              $groupID = $_SESSION["group_id"]; // this code will only show users from the same groupID
              $query = "SELECT * FROM users WHERE groupID='$groupID' ";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0)
              {
                foreach($query_run as $user)
                {
                  ?>
                  <tr>

                    <td hidden><?= $user['id'];?></td>
                    <td><?= $user['fname'];?></td>
                    <td hidden><?= $user['lname'];?></td>
                    <td hidden><?= $user['email'];?></td>
                    <td hidden><?= $user['role'];?></td>

                    <td>
                      <button type="button" name="user-edit" class="btn btn-outline-secondary-borderless focus-ring btn-md editbtn" data-bs-toggle="modal" data-bs-target="#editmodal">
                        <i class="bi bi-gear" ></i>
                      </button>
                    </td>
                    <td>
                      <button type="button" class="btn focus-ring border-none userdeletebtn" data-bs-toggle="modal" data-bs-target="#userdeletemodal">
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
                    <td colspan="6">No Record Found</td>
                  </tr>
              <?php
              }
              ?>
            </tbody>
          </table>

        </div>
      </div>
