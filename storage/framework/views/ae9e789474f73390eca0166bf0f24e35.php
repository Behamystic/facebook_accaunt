<?php $__env->startSection('title', 'Bosh sahifa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="text-center">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Gotto Logo" class="img-fluid mb-4" style="max-width: 150px;">

            <h1>Welcome to <span class="text-primary">Gotto Job Portal!</span></h1>
            <p class="lead">Find your dream job or post vacancies easily.</p>

            <a href="<?php echo e(route('job_listings')); ?>" class="btn btn-primary mt-3">
                View Job Listings
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/behruz/Рабочий стол/laravel-job-aplication-main/resources/views/index.blade.php ENDPATH**/ ?>