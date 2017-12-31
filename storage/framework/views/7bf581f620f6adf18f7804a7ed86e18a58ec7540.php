<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $sponsor_pilgrim_pairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="pair">
        <a href="pastor/pastorapp?pilgrim=<?php echo e($pair->id); ?>&sponsor=<?php echo e($pair->sponsor_id); ?>"><?php echo e($pair->firstname); ?> <?php echo e($pair->lastname); ?> sponsored by <?php echo e($pair->fullname); ?></a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="container dashboard">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">USER Dashboard</div>

                <div class="panel-body">
                  <div class="container menupanel">
    <div class="row">

        <div class="col-md-6">

            <div class="blockquote-box blockquote-primary clearfix">
                <div class="square pull-left">
                    <a href="pilgrim/pilgrimapp" class="menu"><span class="glyphicon glyphicon-time glyphicon-lg"></span></a>
                </div>
                <h4><a href="pilgrim/pilgrimapp" class="menu">Pilgrim Application</a></h4>
                <p>Pilgrims will fill out their part of the application!</p>
            </div>
            <div class="blockquote-box blockquote-success clearfix">
                <div class="square pull-left">
                    <a href="sponsor/sponsorapp"><span class="glyphicon glyphicon-phone glyphicon-lg"></span></a>
                </div>
                <h4><a href="sponsor/sponsorapp">Sponsor Application</a></h4>
                <p>
                    Sponsors will fill out their part of the application!
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="blockquote-box blockquote-danger clearfix">
                <div class="square pull-left">
                    <a href="pastor/pastorapp"><span class="glyphicon glyphicon-pencil glyphicon-lg"></span></a>
                </div>
                <h4><a href="pastor/pastorapp">Pastor Application</a></h4>
                <p>Pastors will fill out their part of the application!

                </p>
            </div>
            <div class="blockquote-box blockquote-warning clearfix">
                <div class="square pull-left">
                    <a href="/password/reset"><span class="glyphicon glyphicon-lock glyphicon-md"></span></a>
                </div>
                <h4><a href="/password/reset">Change Password</a></h4>
                <p>
                   Change your password for your dashboard.
                </p>
            </div>

        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>