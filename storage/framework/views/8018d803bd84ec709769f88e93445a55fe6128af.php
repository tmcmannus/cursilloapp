<?php $__env->startSection('content'); ?>
<div class="successcontainer well">
   <div class="row">
      <div class="col-lg-12">
        <h2 class="pilappheading">Individual Reservation Request<br />
        <span class="pilappsubheading">Sponsor Application</span></h2>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Name:
      </div>
      <div class="col-md-6">
<?php echo e($sponsorInfo->fullname); ?>

   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Email:
      </div>
      <div class="col-md-6">
        <?php echo e($sponsorInfo->email); ?>


   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Phone:
      </div>
      <div class="col-md-6">
        <?php echo e($sponsorInfo->phone); ?>


   </div>
</div>
<div class="row">
   <div class="col-md-6 text-right">
     Pilgrim Name:
   </div>
   <div class="col-md-6">
     <?php echo e($sponsorInfo->applicantname); ?>


</div>
</div>
    <div class="pilgrimsuccesstext" style="border:1px solid #000">
        <p>You have now entered your Sponsor Application.  Please reach out to the
          <span style="color:red"><?php echo e($sponsorInfo->applicantname); ?></span> you entered on your application and make sure they register for the upcoming weekend.</p>

    </div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>