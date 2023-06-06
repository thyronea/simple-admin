<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="mt-2">
        <div class="">
          <div class="tab-content" id="v-pills-tabContent">

            <div class="mb-2">
              <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border-none text-decoration-none" style="color: black;"><i class="bi bi-list bi-lg py-2 p-1"></i></a>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="d-flex align-items-st">

                  <div class="container-fluid">
                      <div class="row flex-nowrap">
                          <div class="col-auto px-0">
                              <div id="sidebar" class="collapse collapse-horizontal show border-none">
                                  <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                                    <button class="nav-link active focus-ring py-1 px-2 text-decoration-none border" style="color: black;" id="v-pills-home-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home-dashboard" type="button" role="tab" aria-controls="v-pills-home-dashboard" aria-selected="false">
                                      Dashboard
                                    </button>

                                    <button class="nav-link focus-ring py-1 px-2 text-decoration-none border" style="color: black;" id="v-pills-analytics-tab" data-bs-toggle="pill" data-bs-target="#v-pills-analytics" type="button" role="tab" aria-controls="v-pills-analytics" aria-selected="false">
                                      Inventory
                                    </button>

                                    <button class="nav-link focus-ring py-1 px-2 text-decoration-none border" style="color: black;" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                      Report
                                    </button>
                                  </div>
                              </div>
                          </div>

                          <main class="col-md-12">

                              <?php include('home-dashboard/home-dashboard.php'); ?>
                              <?php include('analytics/analytics.php'); ?>
                              <?php include('messages/messages.php'); ?>

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
