<?php $__env->startSection('content'); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Ends-->
    <div class="tab-content">


      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="d-flex">
                    <div class="wrapper">
                      <h3 class="mb-0 font-weight-semibold">299</h3>
                      <h5 class="mb-0 font-weight-medium text-primary">Siswa</h5>
                      <p class="mb-0 text-muted">2 Tahun</p>
                    </div>
                    <div class="wrapper my-auto ml-auto ml-lg-4">
                      <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                  <div class="d-flex">
                    <div class="wrapper">
                      <h3 class="mb-0 font-weight-semibold">20</h3>
                      <h5 class="mb-0 font-weight-medium text-primary">Mata Pelajaran</h5>
                      <p class="mb-0 text-muted">2019</p>
                    </div>
                    <div class="wrapper my-auto ml-auto ml-lg-4">
                      <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                  <div class="d-flex">
                    <div class="wrapper">
                      <h3 class="mb-0 font-weight-semibold">2</h3>
                      <h5 class="mb-0 font-weight-medium text-primary">Admin</h5>
                      <p class="mb-0 text-muted">2019</p>
                    </div>
                    <div class="wrapper my-auto ml-auto ml-lg-4">
                      <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                  <div class="d-flex">
                    <div class="wrapper">
                      <h3 class="mb-0 font-weight-semibold">15</h3>
                      <h5 class="mb-0 font-weight-medium text-primary">Guru</h5>
                      <p class="mb-0 text-muted">2019</p>
                    </div>
                    <div class="wrapper my-auto ml-auto ml-lg-4">
                      <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">Jumlah User</h4>
              <canvas class="mt-4" height="100" id="market-overview-chart"></canvas>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PPL\resources\views/beranda-admin.blade.php ENDPATH**/ ?>