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

      <h1 class="h3 mb-0 text-gray-800 d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100">Dashboard</h1>

      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>
        Report <sup><span class="badge badge-success">Coming Soon</span></sup></!-->
    </nav>
    <!-- End of Topbar -->

    <!-- Main Content -->
    <div class="container-fluid">

      <!-- Card Value -->
      <div class="row">
        <!-- Temperature Card -->
        <div class="col-sm mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary mb-1">
                    Temperatur
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?=
                      // note : kenapa hanya s nama atributnya?
                      // coba liat query nya di getTemperature() model
                      $temperatur['suhu'];
                    ?>
                    <sup>o</sup>C
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-thermometer-half fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- pH Air Card -->
        <div class="col-sm mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success mb-1">
                    pH
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    8
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-fw fa-tint fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Amoniak Card -->
        <div class="col-sm mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info mb-1">
                    Amoniak
                  </div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                        8 ppm
                      </div>
                    </div>
                    <!-- <div class="col">
                      <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div> -->
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-radiation fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Dissolve Oxygen Card -->
        <div class="col-sm mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning mb-1">
                    DO
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    18 ppm
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-smog fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Volume Air Cards -->
        <div class="col-sm mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning mb-1">
                    Volume
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    1200 L
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-water fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Graph -->
      <div class="row">

        <div class="col-xl-8 col-lg-7">
          <!-- Area Chart -->
          <div class="card border-left-success shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="home-area-chart"></canvas>
              </div>
            </div>
          </div>
        </div>

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
          <div class="card border-left-danger shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body mt-3 mb-4">
              <div class="chart-pie pt-4">
                <canvas id="home-pie-chart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- DataTable -->
      <div class="row">
        <div class="col-lg">
          <div class="card">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dataset</h6>
            </div>
            <div class="card-body">
              <!-- DataTales Example -->
              <table id="dataTable" class="table table-responsive-sm table-striped table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">Watktu & Tanggal</th>
                    <th scope="col">Suhu Air (<sup>o</sup>C)</th>
                    <th scope="col">Keasaman (pH)</th>
                    <th scope="col">Amoniak (ppm)</th>
                    <th scope="col">DO Air (mg/l)</th>
                    <th scope="col">Volume Air (Liter)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sektor as $sektor1) : ?>
                    <tr>
                      <td>
                        <?=
                          substr($sektor1['data_waktu'], 11, 5) . ',&nbsp;' .
                            substr($sektor1['data_waktu'], 8, 2) . '/' .
                            substr($sektor1['data_waktu'], 5, 2) . '/' .
                            substr($sektor1['data_waktu'], 0, 4);
                        ?>
                      </td>
                      <td><?= $sektor1['suhu_air']; ?></td>
                      <td>7</td>
                      <td>1,2</td>
                      <td>8</td>
                      <td>1200</td>
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
  <!-- End Main Content -->

  <!--   
  * TODO: data card merupakan 1 data terbaru
  * TODO: data grafik dapat diubah berdasarkan kategori/parameter
  * TODO: data tabel menggunakan pagination 10 baris dan dimulai dari data terbaru -->