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

    <!-- Main Content -->
    <div class="container-fluid">

      <!-- Main Content -->
      <div class="row">

        <div class="col-sm">
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
                  <canvas id="charts"></canvas>
                </div>
                <hr>
                Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
              </div>
            </div>
          </div>

          <!-- charts -->
          <script>
            var ctx = document.getElementById('charts').getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: [<?php foreach ($data_grafik as $sektor1) : ?>
                    <?= "'" . $sektor1['date'] . '-' . $sektor1['time'] . "'" . ',';  ?>
                  <?php endforeach  ?>
                ],
                // '24/03/2020', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'black', 'red'
                datasets: [{
                  label: '# of Votes',
                  data: [
                    <?php foreach ($data_grafik as $sektor1) : ?>
                      <?= $sektor1['suhu_air'] . ',';  ?>
                    <?php endforeach  ?>
                    // 12, 19, 3, 5, 2, 3, 5, 3, 1
                  ],
                  backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                },
                animation: {
                  duration: 1200,
                  easing: 'easeOutBounce'
                }
              }
            });
          </script>

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
        <div class="col-sm">
          <!-- Content Row Tables-->
          <div class="card shadow table-output">
            <div class=" card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dataset Temperatur</h6>
            </div>
            <div class="card-body">
              <!-- DataTales Example -->
              <table id="" class="table table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">Tanggal & Waktu</th>
                    <th scope="col">Suhu Air <sup>o</sup>C</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sektor_1 as $sektor1) : ?>
                    <tr>
                      <td><?= $sektor1['date']; ?></td>
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