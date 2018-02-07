<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                  <ul>
                  <?php $__currentLoopData = $reg_pairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <h3 style="font-size:18px;font-weight:bold;">Approved Applications</h3>
                        <li style="list-style:none">  <a href="/admin/applicationreport?pilgrim_id=<?php echo e($pair->PI_ID); ?>"><?php echo e($pair->PI_fullname); ?></a></li>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>