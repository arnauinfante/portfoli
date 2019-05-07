<?php $__env->startSection('title','Index'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="parallax-container">
                <div class="parallax"><img src="<?php echo e(url('img/parallax.jpg')); ?>"></div>
            </div>
            <div class="section grey lighten-3">
                <div class="row container">
                    <div class="card large">
                        <div class="card-content">
                               <a name='Incio'></a> <span class="card-title">Presentación</span>
                        </div>
                    </div>
                    <div class="card large">
                        <div class="card-content">
                                <a name='Proyectos'></a> <span class="card-title">Proyectos</span>
                        </div>
                    </div>
                    <div class="card large">
                        <div class="card-content">
                                <a name='Curriculum'></a> <span class="card-title">Curriculum</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/portfoli/resources/views/index.blade.php ENDPATH**/ ?>