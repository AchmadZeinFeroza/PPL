<?php $__env->startSection('content'); ?>
<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">Selamat Datang di E-PCP.com</div>
      <div class="intro-heading text-uppercase">
        <a href="" class="typewrite" data-period="2000"
          data-type='[ "E-PCP.COM" ,"Tebu Berkualitas", "Cepat , Gak Ribet", "Dan Tepat"  ]'></a>
        <span class="wrap"></span></div>
      <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#services">Let's Go</a>
    </div>
  </div>
</header>


<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase"> PRoduk Kami</h2>
        <h3 class="section-subheading text-muted">Ranking kualitas produk kami</h3>
      </div>
    </div>
    <?php
    $j=1;
    ?>
    
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tebu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row">
      <div class="container py-3">
        <div class="card">
          <div class="row ">
            <div class="col-md-2 text-center" style="background-color:#fed136;">
              <h1 class="w-100  text-center pt-5" style="color:white; margin-top:30%;font-size:100px;"><?php echo e($j); ?></h1>
            </div>
            <div class="col-md-10 px-3 py-3">
              <div class="card-block px-3">
                <h4 class="card-title"><?php echo e($tebu->get_lahan->lahan); ?></h4>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Kadar Air Nira</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo e($tebu->kadar_brick); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Bobot</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo e($tebu->bobot_tebu); ?>">
                      </div>
                    </div>
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Tinggi</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo e($tebu->tinggi); ?>">
                      </div>
                    </div>
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Umur</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo e($tebu->umur); ?>">
                      </div>
                    </div>
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Kualitas</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo e($tebu->kualitas); ?>">
                        <?php if($tebu->kualitas > 85 ): ?>
                       <span class="label label-success">Baik</span>
                             <?php elseif($tebu->kualitas > 60 &&  $tebu->kualitas < 86): ?>
                        <span class="label label-warning">Sedang</span>
                       <?php elseif($tebu->kualitas < 61): ?>
                        <span class="label label-danger">Buruk</span>
                        <?php endif; ?>  
                      </div>
                    </div>
                <a data-toggle="modal" href="#portfolioModal1<?php echo e($j); ?>" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    $j++;
    ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

  </div>
  </div>

</section>

<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2009-2011</h4>
                <h4 class="subheading">Our Humble Beginnings</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius
                  sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                  dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>March 2011</h4>
                <h4 class="subheading">An Agency is Born</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius
                  sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                  dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>December 2012</h4>
                <h4 class="subheading">Transition to Full Service</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius
                  sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                  dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>July 2014</h4>
                <h4 class="subheading">Phase Two Expansion</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius
                  sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                  dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Be Part
                <br>Of Our
                <br>Story!</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Team -->
<section class="bg-light" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
          <h4>Achmad Zein Feroza</h4>
          <p class="text-muted">Programmer</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
          <h4>Indana Zulva</h4>
          <p class="text-muted">Project Manager</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
          <h4>Alifvian Marco</h4>
          <p class="text-muted">Designer</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam
          veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
    </div>
  </div>
</section>

<!-- Clients -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
        </a>
      </div>
    </div>
  </div>
</section>




<!-- Portfolio Modals -->

<?php
  $k=1;
?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tebus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1<?php echo e($k); ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-12">
            <h2><?php echo e($tebus->get_lahan->lahan); ?></h2>
            <div class="form-group ">
              <?php if((int)$tebus->kadar_brick <= 18 || (int)$tebus->bobot_tebu <=7 || (int)$tebus->tinggi <= 3): ?>
              <div class="col-md-5 d-inline-block">
                <h1>Penyakit</h1>
                <ul class="list-group list-group-flush text-left">
                      <?php if((int)$tebus->kadar_brick <= 18): ?>
                             <?php $__currentLoopData = $air_nira; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brick): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <li class="list-group-item"><?php echo e($brick->penyakit); ?></li>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?> 
                      <?php if((int)$tebus->bobot_tebu <=7): ?>
                        <?php $__currentLoopData = $bobot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="list-group-item"><?php echo e($berat->penyakit); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                      <?php if((int)$tebus->tinggi <= 3): ?>
                          <?php $__currentLoopData = $tinggi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li class="list-group-item"><?php echo e($t->penyakit); ?></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>  
                </ul>
              </div>
              <div class="col-md-5 d-inline-block">
                <h2>Perawatan</h2>
                <ul class="list-group list-group-flush text-left">
                    <?php if((int)$tebus->kadar_brick <=19.75): ?>
                    <?php $__currentLoopData = $air_nira; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brick): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="list-group-item"><?php echo e($brick->tips); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?> 
                   <?php if((int)$tebus->bobot_tebu <=7): ?>
                   <?php $__currentLoopData = $bobot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li class="list-group-item"><?php echo e($berat->tips); ?></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <?php endif; ?>
                   <?php if((int)$tebus->tinggi <= 3): ?>
                      <?php $__currentLoopData = $tinggi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <li class="list-group-item"><?php echo e($t->tips); ?></li>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>  
                </ul>
              </div>
              <?php else: ?>
              <h1>Tidak ditemukan penyakit</h1>
              <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $k++;
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript">
  $('#cekbarang').on('click', function () {
    $('#rekomendasi').html('');
    $value1 = $('#kadar_brix').val();
    $value2 = $('#umur').val();
    $value3 = $('#sukrosa').val();
    $value4 = $('#glukosa').val();
    $.ajax({
      type: 'get',
      url: '<?php echo e(route('search')); ?>',
      data: {
        'kadar_brix': $value1,
        'umur': $value2,
        'sukrosa': $value3,
        'glukosa': $value4,
      },
      success: function (data) {
        $('#rekomendasi').html(data);
      }
    })
  })
</script>

<script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken': '<?php echo e(csrf_token()); ?>' } });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PPL\resources\views/beranda.blade.php ENDPATH**/ ?>