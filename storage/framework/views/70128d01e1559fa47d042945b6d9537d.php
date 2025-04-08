<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent('title', 'Gotto Online Job Portal'); ?></title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/tooplate-gotto-job.css')); ?>" rel="stylesheet">
</head>

<body id="top">

    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- JS FILES -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/counter.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/behruz/Рабочий стол/laravel-job-aplication-main/resources/views/layouts/app.blade.php ENDPATH**/ ?>