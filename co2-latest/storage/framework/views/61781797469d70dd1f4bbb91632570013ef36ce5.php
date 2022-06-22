<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Onze dummy data!</h1>
                        <p>Heb plezier met het lezen van deze onzinnige dummy data. Klik op een naam om te lezen!</p>
                    </div>
                    <div class="btn">
                        <!--<h2>Maak nieuwe data</h2>-->
                        <a href="/bedrijven/create" class="btn-warning"><div class="btn btn-warning btn-sm">Voeg bedrijf toe</div></a>
                    </div>
                </div><br>              
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="list">
                        <a href="./bedrijven/<?php echo e($post->id); ?>"><ul><li><?php echo e(ucfirst($post->bedrijfnaam)); ?></ul></li></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-warning">Geen data gevonden</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my-blog\resources\views/result.blade.php ENDPATH**/ ?>