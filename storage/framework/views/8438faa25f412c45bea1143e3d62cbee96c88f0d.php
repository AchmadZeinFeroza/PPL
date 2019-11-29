<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Lahan
      <small>preview of simple tables</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover bg-white mb-5">
                <thead>
                  <tr>
                    <th>Lahan</th>
                    <th>Kadar Air Nira</th>
                    <th>Umur</th>
                    <th>Bobot</th>
                    <th>Tinggi</th>
                    <th>Luas</th>
                    <th>Stok</th>
                    <th>Kualitas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  ?>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($datas->get_lahan->lahan); ?></td>
                    <td><?php echo e($datas->kadar_brick); ?></td>
                    <td><?php echo e($datas->umur); ?></td>
                    <td><?php echo e($datas->bobot_tebu); ?></td>
                    <td><?php echo e($datas->tinggi); ?></td>
                    <td><?php echo e($datas->get_lahan->luas_lahan); ?> m</td>
                    <td><?php echo e($datas->get_lahan->stok); ?> kg</td>
                    <td>
                    <?php if($datas->kualitas > 85 ): ?>
                       <span class="label label-success">Baik</span>
                    <?php elseif($datas->kualitas > 60 &&  $datas->kualitas < 86): ?>
                        <span class="label label-warning">Sedang</span>
                    <?php elseif($datas->kualitas < 61): ?>
                        <span class="label label-danger">Buruk</span>
                    <?php endif; ?>  
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal<?php echo e($i); ?>">Ubah</button>
                      <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#exampleModalDelete<?php echo e($i); ?>">Hapus</button>
                     
                    </td>
                  </tr>
                   <!-- Modal -->
                   <div class="modal fade" id="exampleModalDelete<?php echo e($i); ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><?php echo e($datas->get_lahan->lahan); ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda Yakin Menghapus Data Ini ?
                        </div>
                        <div class="modal-footer d-inline">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <form action="<?php echo e(route('dataLahan.destroy' , $datas->id_tebu)); ?>" method="post">
                          <?php echo e(csrf_field()); ?><?php echo e(method_field('DELETE')); ?>

                          <button type="submit" class="btn btn-danger">Hapus</button>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal<?php echo e($i); ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><?php echo e($datas->get_lahan->lahan); ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo e(route('dataLahan.update' , $datas->id_tebu)); ?>" method="post">
                            <?php echo e(csrf_field()); ?><?php echo e(method_field('PATCH')); ?>

                            <div class="form-group">
                              <label for="kadar_brick">Kadar Brick</label>
                              <input name="kadar_brick"  class="form-control" id="kadar_brick"
                                value="<?php echo e($datas->kadar_brick); ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="umur">Umur</label>
                              <input name="umur" type="number" class="form-control" id="umur" value="<?php echo e($datas->umur); ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="bobot_tebu">bobot Tebu</label>
                              <input name="bobot_tebu" type="number" class="form-control" id="bobot_tebu"
                                value="<?php echo e($datas->bobot_tebu); ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="tinggi">tinggi</label>
                              <input name="tinggi" type="number" class="form-control" id="tinggi"
                                value="<?php echo e($datas->tinggi); ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <?php
                  $i++;
                  ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">Tambah</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content"> 
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Lahan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo e(route('dataLahan.store')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                          <label for="id_lahan">Lahan</label>
                          <select class="form-control" id="lahan" name="id_lahan" required>
                            <option>-- Pilih Lahan --</option>
                            <option value="1">Lahan 1</option>
                            <option value="2">Lahan 2</option>
                            <option value="3">Lahan 3</option>
                            <option value="4">Lahan 4</option>
                            <option value="5">Lahan 5</option>
                            <option value="6">Lahan 6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="kadar_brick">Kadar Brick</label>
                          <input name="kadar_brick" type="number" class="form-control" id="kadar_brick" required>
                        </div>
                        <div class="form-group">
                          <label for="umur">Umur</label>
                          <input name="umur" type="number" class="form-control" id="umur" required>
                        </div>
                        <div class="form-group">
                          <label for="bobot_tebu">bobot_tebu</label>
                          <input name="bobot_tebu" type="number" class="form-control" id="bobot_tebu" required>
                        </div>
                        <div class="form-group">
                          <label for="tinggi">tinggi</label>
                          <input name="tinggi" type="number" class="form-control" id="tinggi" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PPL\resources\views/admin/dataLahan.blade.php ENDPATH**/ ?>