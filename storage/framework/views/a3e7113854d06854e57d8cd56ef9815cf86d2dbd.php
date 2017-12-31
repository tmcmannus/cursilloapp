<?php $__env->startSection('content'); ?>
<div class="container dashboard">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PASTOR Dashboard</div>

                <div class="panel-body">
                  <div class="container menupanel">
                    <?php $__currentLoopData = $sponsor_pilgrim_pairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="pair">
                            <a href="/pastor/pastorapp?pilgrim_id=<?php echo e($pair->pilgrim_id); ?>&sponsor_id=<?php echo e($pair->sponsor_id); ?>"><?php echo e($pair->PI_fullname); ?> sponsored by <?php echo e($pair->SP_fullname); ?></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>