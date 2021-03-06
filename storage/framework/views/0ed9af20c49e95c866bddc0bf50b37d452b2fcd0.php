<?php $__env->startSection('content'); ?>
<div class="successcontainer well">
   <div class="row">
      <div class="col-lg-12">
        <h2 class="pilappheading">Individual Reservation Request<br />
        <span class="pilappsubheading">Pastor Application</span></h2>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Name:
      </div>
      <div class="col-md-6">
<?php echo e($success_data->PA_fullname); ?>

   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Email:
      </div>
      <div class="col-md-6">
    <?php echo e($success_data->PA_email); ?>


   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Phone:
      </div>
      <div class="col-md-6">
         <?php echo e($success_data->PA_phone); ?>


   </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Sponsor:
      </div>
      <div class="col-md-6">
<?php echo e($success_data->SP_fullname); ?>

   </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Pilgrim:
      </div>
      <div class="col-md-6">
  <?php echo e($success_data->PI_fullname); ?>

   </div>
</div>

    <div class="pilgrimsuccesstext" style="border:1px solid #000">
        <p>You have now entered your Pastor Application.  Please reach out to Pilgrim
          <span style="color:red"><?php echo e($success_data->PI_fullname); ?></span> and Sponsor <span style="color:red"><?php echo e($success_data->SP_fullname); ?></span> to make sure they register for the upcoming weekend.</p>

    </div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>