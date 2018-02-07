<?php $__env->startSection('content'); ?>
<div class="successcontainer well">
   <div class="row">
      <div class="col-lg-12">
        <h2 class="pilappheading">Individual Reservation Request<br />
        <span class="pilappsubheading">Pilgrim Application</span></h2>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Name:
      </div>
      <div class="col-md-6">
 <?php echo e($success_data->PI_fullname); ?>

   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Email:
      </div>
      <div class="col-md-6">
         <?php echo e($success_data->PI_email); ?>

   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Phone:
      </div>
      <div class="col-md-6">
        <?php echo e($success_data->PI_phone); ?>

   </div>
</div>
<div class="row">
   <div class="col-md-6 text-right">
     Sponsor:
   </div>
   <div class="col-md-6">
   <?php echo e($success_data->SP_fullname); ?>

</div>
</div>
<div class="row">
   <div class="col-md-6 text-right">
     Sponsor Email:
   </div>
   <div class="col-md-6">
   <?php echo e($success_data->SP_email); ?>

</div>
</div>
<div class="row">
   <div class="col-md-6 text-right">
     Pastor:
   </div>
   <div class="col-md-6">
   <?php echo e($success_data->PI_homechurchpastor); ?>

</div>
</div>
<div class="row">
   <div class="col-md-6 text-right">
     Pastor's Email:
   </div>
   <div class="col-md-6">
     <?php echo e($success_data->PI_homechurchpastoremail); ?>


</div>
</div>
    <div class="pilgrimsuccesstext" style="border:1px solid #000">
        <p>You are now registered for the upcoming Cursillo weekend.  Your sponsor is <span style="color:red"><?php echo e($success_data->SP_fullname); ?>. </span>
          He/she will contact you to advise you on the next step.</p>

    </div>

</div>

<div class="successcontainer well" style="width:850px;margin-top:40px;">
  <form action="" method="">
    <div class="row">
      <div class="col-lg-12 text-center rowborder"><h2><strong>PILGRIM INFORMATION</strong></h2></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Full Name:<span class="data">  <?php echo e($success_data->PI_fullname); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>Email:<span class="data"> <?php echo e($success_data->PI_email); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Address:<span class="data"><?php echo e($success_data->PI_address); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>Apt/Suite:<span class="data"> <?php echo e($success_data->PI_aptsuite); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>City:<span class="data"> <?php echo e($success_data->PI_city); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>State:<span class="data"> <?php echo e($success_data->PI_state); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>ZIP Code:<span class="data"> <?php echo e($success_data->PI_zip); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>Phone:<span class="data"> <?php echo e($success_data->PI_phone); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Best Time To Call:<span class="data"> <?php echo e($success_data->PI_bestcalltime); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>Over 18?:<span class="data"> <?php echo e($success_data->PI_over18); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Occupation:<span class="data"> <?php echo e($success_data->PI_occupation); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>Name on Nametag:<span class="data"><?php echo e($success_data->PI_tagname); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Marital Status:<span class="data"> <?php echo e($success_data->PI_maritalstatus); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>Marriage Partner:<span class="data"><?php echo e($success_data->PI_marriagepartner); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Home Church:<span class="data"> <?php echo e($success_data->PI_homechurch); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>Home Church City:<span class="data"><?php echo e($success_data->PI_homechurchcity); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-4 rowborder"><label>Home Church Pastor:<span class="data"> <?php echo e($success_data->PI_homechurchpastor); ?></span></label></div>
       <div class="col-md-4 rowborder"><label>Home Church Email:<span class="data"><?php echo e($success_data->PI_homechurchpastoremail); ?></span></label></div>
       <div class="col-md-4 rowborder"><label>Home Church Attendance:<span class="data"><?php echo e($success_data->PI_homechurchattendance); ?></span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Special Needs:<span class="data"> <?php echo e($success_data->PI_specialneeds); ?></span></label></div>
       <div class="col-md-6 rowborder"><label>Reason To Attend:<span class="data"><?php echo e($success_data->PI_reasontoattend); ?></span></label></div>
    </div>
    <div class="row">
        <div class="col-md-6 rowborder"><label>Pilgrim Signature:<span class="data"> <?php echo e($success_data->PI_signed); ?></span></label></div>
        <div class="col-md-6 rowborder"><label>Date Signed: <span class="data"><?php echo e($success_data->PI_datesigned); ?></span></label></div>
      </div>
    
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>