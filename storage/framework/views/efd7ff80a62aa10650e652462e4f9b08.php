

<?php $__env->startSection('content'); ?>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">

            <div class="card-header">Register</div>

            <div class="card-body">

                <form action="<?php echo e(route('store')); ?>" method="post">


                    <?php echo csrf_field(); ?>
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col md-6">
                            <input type="text" name="name" id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>">
                            <?php if($errors->has('name')): ?>
                            <span class="text-dandger"><?php echo e($errors->first('name')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">E-mail</label>
                        <div class="col md-6">
                            <input type="email" name="email" id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>">
                            <?php if($errors->has('email')): ?>
                            <span class="text-dandger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col md-6">
                            <input type="password" name="password" id="password" class="form-control <?php $__errorArgs = ['value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('password')); ?>">
                            <?php if($errors->has('password')): ?>
                            <span class="text-dandger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Password Confirmation</label>
                        <div class="col md-6">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="btn btn-primary col-md-3 offset-md-5" value="Register">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\loginregister\resources\views/auth/register.blade.php ENDPATH**/ ?>