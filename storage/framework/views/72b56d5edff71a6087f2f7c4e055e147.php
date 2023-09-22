<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Registeration Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">


            <!-- this code for make a logo like button or name it will take away to as direction as -->
            <a href="<?php echo e(URL('/')); ?>" class="navbar-brand">Custom Login Register</a>

            <!-- below code will make menu button icon in header -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- below code for make dropdown links -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('login')); ?>" class="nav-link <?php echo e((request()->is('login')) ? 'active' : ''); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('register')); ?>" class="nav-link <?php echo e((request()->is('register')) ? 'active' : ''); ?>">Register</a>
                    </li>
                    <?php else: ?>

                    <!-- below code for logout button or icon when user would be logged in -->
                    <li class="nav-itm dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo e(Auth :: user()->name); ?>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" 
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Logout</a>
                                <form method="post" action="<?php echo e(route('logout')); ?>" id="logout-form">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\loginregister\resources\views/auth/layouts.blade.php ENDPATH**/ ?>