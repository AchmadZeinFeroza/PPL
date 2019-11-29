<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
<div class="container col-md-4 mx-auto">
    <form action="<?php echo e(route('dataLahan.store')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

        <label for="nama_lahan">Lahan</label>
        <input type="text" name="nama_lahan" id="nama_lahan">
       <br>
        <label for="kadar">Kadar Air</label>
        <input type="text" name="kadar" id="kadar">
       <br>
        <label for="tinggi">Tinggi</label>
        <input type="text" name="tinggi" id="tinggi">
       <br>
        <label for="bobot">Bobot</label>
        <input type="text" name="bobot" id="bobot">
       <br>
        <label for="umur">Umur</label>
        <input type="text" name="umur" id="umur">
       <br>
        <label for="warna">Warna</label>
        <input type="text" name="warna" id="warna">
        <div>
        <button type="submit" class="btn btn-success">Tambah</button>
        </div>
    </form>
   
</div>
</div>
</div>

<?php $__env->stopSection(); ?>







<?php echo $__env->make('templates.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PPL\resources\views/admin/tambahLahan.blade.php ENDPATH**/ ?>