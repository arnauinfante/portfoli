<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo e(asset('libs/materialize/css/materialize.min.css')); ?>"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/master.css')); ?>"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="<?php echo e(asset('libs/jQuery/jquery-3.3.1.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('libs/popper/popper.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('libs/bootstrap/js/bootstrap.min.js')); ?>"></script>
      <title><?php echo $__env->yieldContent('title'); ?></title>

    </head>

    <body>
        <div class="navbar-fixed">
            <nav class="white-text transparent z-depth-0">
                <div class="nav-wrapper">
                    <a href="<?php echo e(url('/')); ?>" class="brand-logo" style="padding: 0px 10px;">Logo</a>
                    <a href="#" class="sidenav-trigger" data-target="#mobile-nav">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="<?php echo e(url('/')); ?>">Inicio</a></li>
                        <li><a href="#Proyectos">Proyectos</a></li>
                        <li><a href="#Curriculum">Curriculum</a></li>
                        <?php if(Auth::check()): ?>
                            <li><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo e(Auth::user()->name); ?><i class="material-icons right">arrow_drop_down</i></a></li>
                        <?php else: ?>
                            <li><a class="modal-trigger" href="#modal1">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
        <ul class="sidenav white-text year-text" id="#mobile-nav">
            <li><div class="user-view">
                    <div class="background">
                    </div>
                </div>
            </li>
            <li><a href="sass.html">Inicio</a></li>
            <li><a href="badges.html">Proyectos</a></li>
            <li><a href="collapsible.html">Curriculum</a></li>
            <?php if(Auth::check()): ?>
                <li><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo e(Auth::user()->name); ?><i class="material-icons right">arrow_drop_down</i></a></li>
            <?php else: ?>
                <li><a class="modal-trigger" href="#modal1">Login</a></li>
            <?php endif; ?>
        </ul>
        <ul id='dropdown1' class='dropdown-content'>
                <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
            </ul>
          <?php echo $__env->yieldContent('content'); ?>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo e(asset('libs/materialize/js/materialize.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('js/events.js')); ?>"></script>
    </body>
  </html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/portfoli/resources/views/templates/master.blade.php ENDPATH**/ ?>