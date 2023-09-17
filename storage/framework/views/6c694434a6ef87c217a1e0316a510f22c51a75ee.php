<html>
    <head>
        <title>Docs login</title>
        <link href="<?php echo e(asset('vendor/auth/login.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> مشاهده مستندات </h2>       
        
            <!-- Login Form -->
            <form action="/doc/check" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="نام کاربری">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="رمز عبور">
                <input type="submit" class="fadeIn fourth" value="ورود">
            </form>
        
            <!-- Message -->
            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div id="alertBox">
                <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
          </div>
        </div>
    </body>
</html>

<?php /**PATH /home/ali/Work/apm-base-laravel/resources/views/auth/login.blade.php ENDPATH**/ ?>