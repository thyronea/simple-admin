<!-- Admin Sidebar -->

<div class="container">
  <div class="row">
    <div class="row col-md-12">
      <div class="mt-2">
        <div class="">
          <div class="tab-content" id="v-pills-tabContent">

            <div class="">
              <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border-none text-decoration-none" style="color: black;"><i class="bi bi-list bi-lg py-2 p-2"></i></a>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="d-flex align-items-st">

                  <div class="container-fluid">
                      <div class="row flex-nowrap">

                          <!-- Sidebar Buttons-->
                          <div class="col-auto px-0">
                              <div id="sidebar" class="collapse collapse-horizontal border-none show"> <!-- ADD "show" TO DISPLAY AT REFRESH-->
                                  <div id="sidebar-nav" class="list-group border-0 rounded-0">

                                    <!-- Button Trigger add-office Modal -->
                                    <button type="button" class="nav-link focus-ring py-1 px-2 text-decoration-none border-none mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#add-office-Modal" style="text-align: left">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-building-add" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
                                        <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z"/>
                                        <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                                      </svg>
                                      <small class="m-1"><i></i></small>
                                    </button>

                                    <!-- Button Trigger add-user Modal -->
                                    <button type="button" class="nav-link focus-ring py-1 px-2 text-decoration-none border-none mb-2" data-bs-toggle="modal" data-bs-target="#add-user-Modal" style="text-align: left">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                      </svg>
                                      <small class="m-2"></small></i>
                                    </button>

                                    <!-- Button Trigger user-log Modal -->
                                    <button type="button" class="nav-link focus-ring py-1 px-2 text-decoration-none border-none" data-bs-toggle="modal" data-bs-target="#user-log-Modal" style="text-align: left">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                      </svg>
                                      <small class="m-2"></small></i>
                                    </button>

                                  </div>
                              </div>
                          </div>

                          <!-- Modal Content -->
                          <main class="col-md-12 mt-1">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="row row-cols-md-2 col d-flex justify-content-center" align="center">
                                    <?php include('content/office-table.php') ?>
                                    <?php include('content/group-map.php') ?>
                                    <?php include('content/user-data.php') ?>
                                    <?php include('content/user-table.php') ?>
                                    <?php include('modal/add-user.php'); ?>
                                    <?php include('modal/add-office.php'); ?>
                                    <?php include('modal/user-edit.php'); ?>
                                    <?php include('modal/user-delete.php'); ?>
                                    <?php include('modal/user-log.php'); ?>
                                    <?php include('modal/office-edit.php'); ?>
                                    <?php include('modal/office-delete.php'); ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </main>

                      </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
