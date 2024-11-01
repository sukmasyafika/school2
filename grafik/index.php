<?= $this->extend('layoutAdmin/index'); ?>

<?= $this->section('admin-content'); ?>

<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800 fw-bold">Charts</h1>
  <div class="row">
    <div class="col-lg-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-center">Data Jurusan</h6>
        </div>
        <div class="card-body">
          <div class="chart-area d-flex justify-content-center">
            <canvas id="barChart"></canvas>
          </div>
          <!-- <hr>
          Styling for the area chart can be found in the
          <code>/js/demo/chart-area-demo.js</code> file. -->
        </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-center">Data Siswa</h6>
        </div>
        <div class="card-body">
          <div class="chart-bar d-flex justify-content-center">
            <canvas id="lineChart"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-center">Data Tenaga</h6>
        </div>
        <div class="card-body">
          <div class="chart-pie d-flex justify-content-center">
            <canvas id="doughnutChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>