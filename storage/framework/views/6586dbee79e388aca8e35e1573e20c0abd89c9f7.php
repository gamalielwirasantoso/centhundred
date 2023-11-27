<header id="header" class="header grey d-flex justify-content-between">
    <div class="top-left grey">
        <div class="navbar-header grey">
            <a class="navbar-brand" href="#"><img src="<?php echo e(url('images/logo-cent-panjang.png')); ?>" alt="Logo"
                    style="width: 70px; height: 30px;" /></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>

    <form class="px-4 py-0" , action="<?php echo e(url('logout')); ?>" , method="POST">
        <?php echo csrf_field(); ?>
        <img src="https://ui-avatars.com/api/?name=<?php echo e($user->name); ?>" alt="foto" width="40" , class="mr-2 rounded-circle">
        <span class="navbar-text mr-3 align-middle">
            Hello, <?php echo e($user->name); ?>

        </span>
        <button type="submit" class="btn btn-primary btn-sm" style="height: 70%; margin-top:5px; padding: auto;">Log
            Out</button>
    </form>
</header>
<?php /**PATH E:\Hallo Dek\Cent\resources\views/includes/navbar.blade.php ENDPATH**/ ?>