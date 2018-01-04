<?php $__env->startSection('content'); ?>

                  <?php echo e($application_info->PI_fullname); ?><br />
                  <?php echo e($application_info->PI_address); ?><br />
                  <?php echo e($application_info->SP_fullname); ?><br />
                  <?php echo e($application_info->PA_fullname); ?><br />
                  <?php echo e($application_info->PA_churchname); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>