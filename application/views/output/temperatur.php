<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <h1 class="h3 mb-0 text-gray-800 d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100">Data Temperatur</h1>

      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>
        Report <sup><span class="badge badge-success">Coming Soon</span></sup></!-->
    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <div class="row">
        <div class="col-md">
          <!-- chart -->
          <div class="row">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Waktu</h6>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
                </div>
                <hr>
                Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
              </div>
            </div>
          </div>
          <!-- chart -->
          <div class="row">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
                </div>
                <hr>
                Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
              </div>
            </div>
          </div>
          <!-- chart -->
          <div class="row">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
                </div>
                <hr>
                Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
              </div>
            </div>
          </div>
        </div>

        <!-- column tables -->
        <div class="col-md">
          <!-- Content Row Tables-->
          <div class="card shadow table-output">
            <div class=" card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dataset Temperatur</h6>
            </div>
            <div class="card-body">
              <!-- DataTales Example -->
              <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">Tanggal & Waktu</th>
                    <th scope="col">Suhu Air <sup>o</sup>C</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sektor_1 as $sektor1) : ?>
                    <tr>
                      <td><?= $sektor1['date'] . ',&nbsp;' . $sektor1['time']; ?></td>
                      <td><?= $sektor1['suhu_air'] . '<sup>o</sup>C'; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->