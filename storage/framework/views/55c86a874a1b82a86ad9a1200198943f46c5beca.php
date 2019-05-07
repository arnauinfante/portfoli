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
    <div id="modal1" class="modal">
        <div class="container">
            <div class="card medium">
                <div class="modal-content">
                    <h4 class="card-title">Login</h4>
                    <form action="<?php echo e(action('Auth\LoginController@login')); ?>" class="col m12" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="input-field">
                                <input id="username" name="username" type="text" class="validate">
                                <label for="username">username</label>
                            </div>
                            <div class="input-field">
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">password</label>
                            </div>
                        </div>
                        <div class="row white-text">
                                <a href="#!" class="modal-close waves-effect btn grey">cancelar</a>
                                <input type="submit" class="modal-close waves-green btn waves-effect" value="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/portfoli/resources/views/auth/index.blade.php ENDPATH**/ ?>