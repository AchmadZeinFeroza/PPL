<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Permintaan
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
                    <th>Pabrik</th>
                    <th>Alamat</th>
                    <th>Bobot</th>
                    <th>Kadar_brix</th>
                    <th>Sukrosa</th>
                    <th>Glukosa</th>
                    <th>Kualitas</th>
                    <th>Dikirim</th>
                    <th>Perkiraan Tiba</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  ?>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permintaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>Jaya</td>
                    <td>Bandung</td>
                    <td><?php echo e($permintaan->bobot_stok); ?></td>
                    <td><?php echo e($permintaan->kadar_brix); ?></td>
                    <td><?php echo e($permintaan->sukrosa); ?></td>
                    <td><?php echo e($permintaan->glukosa); ?></td>
                    <td>
                    <?php if($permintaan->kualitas > 85 ): ?>
                       <span class="label label-success">Baik</span>
                    <?php elseif($permintaan->kualitas > 60 &&  $permintaan->kualitas < 86): ?>
                        <span class="label label-warning">Sedang</span>
                    <?php else: ?>
                        <span class="label label-danger">Buruk</span>
                    <?php endif; ?> 
                    </td>
                    <td><?php echo e($permintaan->dikirim); ?></td>
                    <td><?php echo e($permintaan->perkiraan_tiba); ?></td>
                    <td><?php echo e($permintaan->umur); ?></td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal<?php echo e($i); ?>">Ubah</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#exampleModalDelete<?php echo e($i); ?>">Hapus</button>
                     
                    </td>
                  </tr>
                  <div class="modal fade" id="exampleModalDelete<?php echo e($i); ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><?php echo e($permintaan->bobot_stok); ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda Yakin ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <form action="<?php echo e(route('dataPermintaan.destroy' , $permintaan->id_permintaan)); ?>" method="post"
                        class="d-inline">
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
                          <h4 class="modal-title">Ubah Data</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo e(route('dataPermintaan.update' , $permintaan->id_permintaan)); ?>" method="post">
                            <?php echo e(csrf_field()); ?><?php echo e(method_field('PATCH')); ?>

                            <div class="form-group">
                              <label for="bobot_stok">Bobot</label>
                              <input name="bobot_stok" type="text" class="form-control" id="bobot_stok"
                                value="<?php echo e($permintaan->bobot_stok); ?>">
                            </div>
                            <div class="form-group">
                              <label for="kadar_brix">Kadar Brix</label>
                              <input name="kadar_brix" type="text" class="form-control" id="kadar_brix"
                                value="<?php echo e($permintaan->kadar_brix); ?>">
                            </div>
                            <div class="form-group">
                              <label for="sukrosa">sukrosa</label>
                              <input name="sukrosa" type="number" class="form-control" id="sukrosa"
                                value="<?php echo e($permintaan->sukrosa); ?>">
                            </div>
                            <div class="form-group">
                              <label for="glukosa">glukosa</label>
                              <input name="glukosa" type="number" class="form-control" id="glukosa"
                                value="<?php echo e($permintaan->glukosa); ?>">
                            </div>
                            <div class="form-group">
                              <label for="umur">umur</label>
                              <input name="umur" type="number" class="form-control" id="umur"
                                value="<?php echo e($permintaan->umur); ?>">
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PPL\resources\views/admin/dataPermintaan.blade.php ENDPATH**/ ?>