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

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item mx-1">
          <a class="nav-link" href="<?= base_url('configuration');  ?>" id="alertsDropdown" role="button">
            <i class="fas fa-cog fa-fw"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- End of Topbar -->

    <!-- Main Content -->
    <div class="container-fluid">

      <!-- Card Value -->
      <div class="row">
        <!-- Temperature Card -->
        <div class="col-sm mb-4">
          <div class="card parameter-actual shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold mb-1">
                    Temperatur
                  </div>
                  <div class="h5 mb-0 font-weight-bold">
                    <?=
                      // note : kenapa hanya s nama atributnya?
                      // coba liat query nya di getTemperature() model
                      $suhu_air['suhu'];
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
                        <?= $amoniak['amoniak'];  ?> ppm
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
                    5.2 mg/L
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
                    <?php
                    $volumeCalc = ($setValue['field_length'] * $setValue['field_width'] * ($setValue['field_height'] - $volume_air['volume'])) / 1000;
                    ?>
                    <!-- volume_air = pxlxt(air)
                          t(air) = t(kolam)-s    -->
                    <?= $volumeCalc ?> L
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
        <div class="col-xl-12 col-lg-12">
          <!-- Area Chart -->
          <div class="card border-left-success shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-lg-9">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="suhu-tab" data-toggle="tab" href="#suhu" role="tab" aria-controls="suhu" aria-selected="true">Suhu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="amoniak-tab" data-toggle="tab" href="#amoniak" role="tab" aria-controls="amoniak" aria-selected="false">Amoniak</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="volume-tab" data-toggle="tab" href="#volume" role="tab" aria-controls="volume" aria-selected="false">Volume</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="ph-tab" data-toggle="tab" href="#ph" role="tab" aria-controls="ph" aria-selected="false">pH <sup><span class="badge badge-danger">?</span></sup></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="do-tab" data-toggle="tab" href="#do" role="tab" aria-controls="do" aria-selected="false">DO <sup><span class="badge badge-danger">?</span></sup></a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <div class="dropdown d-inline-block float-right">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Urutkan
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Harian <sup><span class="badge badge-danger">Coming soon</span></sup></a>
                      <a class="dropdown-item" href="#">Mingguan <sup><span class="badge badge-danger">Coming soon</span></sup></a>
                      <a class="dropdown-item" href="#">Bulanan <sup><span class="badge badge-danger">Coming soon</span></sup></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="suhu" role="tabpanel" aria-labelledby="suhu-tab">
                  <div class="chart-area">
                    <canvas id="home-area-chart-suhu"></canvas>
                  </div>
                </div>
                <div class="tab-pane fade" id="ph" role="tabpanel" aria-labelledby="ph-tab">
                  <img class="img-fluid rounded mx-auto d-block mb-2" src="<?php base_url(); ?>assets/img/undraw_clean_up_ucm0.svg" alt="maintenance" style="height: 250px;">
                  <h3 class="text-center">Coming Soon!</h3>
                </div>
                <div class="tab-pane fade" id="amoniak" role="tabpanel" aria-labelledby="amoniak-tab">
                  <div class="chart-area">
                    <canvas id="home-area-chart-amoniak"></canvas>
                  </div>
                </div>
                <div class="tab-pane fade" id="do" role="tabpanel" aria-labelledby="do-tab">
                  <img class="img-fluid rounded mx-auto d-block mb-2" src="<?php base_url(); ?>assets/img/undraw_clean_up_ucm0.svg" alt="maintenance" style="height: 250px;">
                  <h3 class="text-center">Coming Soon!</h3>
                </div>
                <div class="tab-pane fade" id="volume" role="tabpanel" aria-labelledby="volume-tab">
                  <div class="chart-area">
                    <canvas id="home-area-chart-volume"></canvas>
                  </div>
                </div>
                <!-- ./.Last tab content -->
              </div>
            </div>
          </div>
        </div>

        <!-- Donut Chart -->
        <!-- <div class="col-xl-4 col-lg-5">
          <div class="card border-left-danger shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
            </div>

            <div class="card-body mt-3 mb-4">
              <div class="chart-pie pt-4">
                <canvas id="home-pie-chart"></canvas>
              </div>
            </div>
          </div>
        </div> -->
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
                      <td><?= $sektor1['amoniak']; ?></td>
                      <td>5.2</td>
                      <?php
                      $volumeCalc = ($setValue['field_length'] * $setValue['field_width'] * ($setValue['field_height'] - $volume_air['volume'])) / 1000;
                      ?>
                      <td><?= $volumeCalc; ?></td>
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
    * TODO: data grafik dapat diubah berdasarkan kategori/parameter
    * TODO: data tabel menggunakan pagination 10 baris dan dimulai dari data terbaru 
  -->