<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pastor Application</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/pastor/insert">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label for="fullname" class="col-md-4 control-label">Pilgrim Information:</label>

                            <div class="col-md-6">
                              <span style="font-size:14px;font-weight:bold"><?php echo e($pilgrim_info->fullname); ?></span> <br/>
                              <span style="font-size:14px;"><?php echo e($pilgrim_info->reasontoattend); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="col-md-4 control-label">Sponsor Information:</label>

                            <div class="col-md-6">
                              <span style="font-size:14px;font-weight:bold"><?php echo e($sponsor_info->fullname); ?></span> <br />
                              <span style="font-size:14px;"><?php echo e($sponsor_info->goodcandidatereason); ?></span>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('fullname') ? ' has-error' : ''); ?>">
                            <label for="fullname" class="col-md-4 control-label">Full Name:</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control" name="fullname" value="<?php echo e(old('fullname')); ?>" required autofocus>

                                <?php if($errors->has('fullname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('fullname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('churchname') ? ' has-error' : ''); ?>">
                            <label for="churchname" class="col-md-4 control-label">Church Name:</label>

                            <div class="col-md-6">
                                <input id="churchname" type="text" class="form-control" name="churchname" value="<?php echo e(old('churchname')); ?>" required>

                                <?php if($errors->has('churchname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('churchname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <label for="address" class="col-md-4 control-label">Address:</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>

                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                            <label for="city" class="col-md-4 control-label">City:</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required>

                                <?php if($errors->has('city')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('city')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                            <label for="state" class="col-md-4 control-label">State:</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" required>

                                <?php if($errors->has('state')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('state')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('zip') ? ' has-error' : ''); ?>">
                            <label for="zip" class="col-md-4 control-label">Zip:</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" required>

                                <?php if($errors->has('zip')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('zip')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <label for="phone" class="col-md-4 control-label">Phone:</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required>

                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('goodcandidateexplanation') ? ' has-error' : ''); ?>">
                            <label for="goodcandidateexplanation" class="col-md-4 control-label">Why Is This A Good Candidate:</label>

                            <div class="col-md-6">
                               <textarea id="goodcandidateexplanation" class="form-control" name="goodcandidateexplanation" required cols="50" rows="10"></textarea>


                                <?php if($errors->has('goodcandidateexplanation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('goodcandidateexplanation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="approved" class="col-md-4 control-label">Approve Application:</label>

                            <div class="col-md-6">
                              <input type="hidden" name="approved" value="0">
                              <input name="approved" type="checkbox" value="1">

                            </div>
                        </div>




                        <div class="form-group<?php echo e($errors->has('signed') ? ' has-error' : ''); ?>">
                            <label for="signed" class="col-md-4 control-label">Type Full Name For Signature:</label>

                            <div class="col-md-6">
                                <input id="signed" type="text" class="form-control" name="signed" required>

                                <?php if($errors->has('signed')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('signed')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('date') ? ' has-error' : ''); ?>">
                            <label for="date" class="col-md-4 control-label">Date Signed:</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" required>

                                <?php if($errors->has('date')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('date')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
<input name="pilgrimID" type="hidden" value="<?php echo e($pilgrim_info->pilgrim_id); ?>">
<input name="sponsorID" type="hidden" value="<?php echo e($sponsor_info->sponsor_id); ?>">

             <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-primary">
                                    Clear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>