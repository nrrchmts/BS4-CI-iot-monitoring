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

      <!-- <h1 class="h3 mb-0 text-gray-800 d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100">Preferences</h1> -->

    </nav>
    <!-- End of Topbar -->

    <!-- Main Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Preferences</h1>
      <p class="mb-4">Penilitian ini dibuat untuk mengembangkan dan ingin dikembangkan agar memudahkan bidang terkait untuk komoditas hewan yang menggunakan air sebagai habitat.</p>

      <form action="<?= base_url('configuration/updateDataValue');  ?>" method="post">

        <div class="row">
          <!-- DS18B20 -->
          <div class="col-lg">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Sensor suhu DS18B20
                </h6>
              </div>
              <div class="card-body">
                <!-- <p>Menampilkan peringatan pada field data aktual di halaman utama.</p> -->

                <div class="form-group">
                  <label for="temp_min">Suhu Minimal</label>
                  <input type="text" class="form-control" name="temp_min" value="<?= $setValue['temp_min'];  ?>">
                </div>
                <div class="form-group">
                  <label for="suhu_max">Suhu Maksimal</label>
                  <input type="text" class="form-control" name="temp_max" value="<?= $setValue['temp_max']  ?>">
                </div>
              </div>
            </div>
          </div>
          <!-- MQ-135 -->
          <div class="col-lg">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Sensor amoniak MQ-135
                </h6>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="amoniak_min">Batas Minimal</label>
                  <input type="text" class="form-control" name="amoniak_min" value="<?= $setValue['amoniak_min'];  ?>">
                </div>
                <div class="form-group">
                  <label for="amoniak_max">Batas Maksimal</label>
                  <input type="text" class="form-control" name="amoniak_max" value="<?= $setValue['amoniak_max']  ?>">
                </div>
              </div>
            </div>
          </div>
          <!-- Sensor pH -->
          <div class="col-lg">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Sensor pH
                </h6>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="ph_min">pH Minimal</label>
                  <input type="text" class="form-control" name="ph_min" value="<?= $setValue['ph_min'];  ?>">
                </div>
                <div class="form-group">
                  <label for="ph_max">pH Maksimal</label>
                  <input type="text" class="form-control" name="ph_max" value="<?= $setValue['ph_max']  ?>">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- HC-SR04 -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Sensor ultraosnik HC-SR04
                </h6>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="field_length">Panjang kolam</label>
                      <input type="text" class="form-control" name="field_length" value="<?= $setValue['field_length'];  ?>">
                    </div>
                    <div class="form-group">
                      <label for="field_width">Lebar Kolam</label>
                      <input type="text" class="form-control" name="field_width" value="<?= $setValue['field_width']  ?>">
                    </div>
                    <div class="form-group">
                      <label for="field_height">Tinggi Kolam</label>
                      <input type="text" class="form-control" name="field_height" value="<?= $setValue['field_height']  ?>">
                    </div>
                  </div>
                  <div class="col-lg">
                    <div class="form-group">
                      <label for="height_min">Tinggi Minimal</label>
                      <input type="text" class="form-control" name="height_min" value="<?= $setValue['height_min'];  ?>">
                    </div>
                    <div class="form-group">
                      <label for="height_max">Tinggi Maksimal</label>
                      <input type="text" class="form-control" name="height_max" value="<?= $setValue['height_max']  ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Sensor DO -->
          <div class="col-lg">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Sensor DO
                </h6>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="">DO Minimal</label>
                  <input type="text" class="form-control" name="" value="4.3">
                </div>
                <div class="form-group">
                  <label for="">DO Maksimal</label>
                  <input type="text" class="form-control" name="" value="7.2">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
          <div class="col-lg">
            <button type="submit" class="btn btn-outline-success btn-lg btn-block">Perbaharui</button>
          </div>
        </div>

      </form>

    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->