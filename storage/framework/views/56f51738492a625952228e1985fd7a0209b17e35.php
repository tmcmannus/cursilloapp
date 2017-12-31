<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sponsor Application</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/sponsor/insert">
                        <?php echo e(csrf_field()); ?>


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
                        <div class="form-group<?php echo e($errors->has('bestcalltime') ? ' has-error' : ''); ?>">
                            <label for="bestcalltime" class="col-md-4 control-label">Best Time To Call:</label>

                            <div class="col-md-6">
                                <input id="bestcalltime" type="text" class="form-control" name="bestcalltime" value="<?php echo e(old('bestcalltime')); ?>" required>

                                <?php if($errors->has('bestcalltime')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('bestcalltime')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('applicantname') ? ' has-error' : ''); ?>">
                            <label for="applicantname" class="col-md-4 control-label">Applicant Name:</label>

                            <div class="col-md-6">
                                <input id="applicantname" type="text" class="form-control" name="applicantname" value="<?php echo e(old('applicantname')); ?>" required>

                                <?php if($errors->has('applicanthname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('applicantname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('baptizedlutheran') ? ' has-error' : ''); ?>">
                            <label for="baptizedlutheran" class="col-md-4 control-label">Baptized Lutheran:</label>

                            <div class="col-md-6">
                              <input name="baptizedlutheran" type="radio" value="yes"> Yes<br>
                              <input name="baptizedlutheran" type="radio" value="no"> No

                                <?php if($errors->has('baptizedlutheran')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('baptizedlutheran')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('hadcursillospousediscussion') ? ' has-error' : ''); ?>">
                            <label for="hadcursillospousediscussion" class="col-md-4 control-label">Did You Discuss Cursillo With The Applicant's Spouse:</label>

                            <div class="col-md-6">
                              <input name="hadcursillospousediscussion" type="radio" value="yes"> Yes<br>
                              <input name="hadcursillospousediscussion" type="radio" value="no"> No

                                <?php if($errors->has('hadcursillospousediscussion')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('hadcursillospousediscussion')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('bothspousesattending') ? ' has-error' : ''); ?>">
                            <label for="bothspousesattending" class="col-md-4 control-label">Both Spouses Attending:</label>

                            <div class="col-md-6">
                              <input name="bothspousesattending" type="radio" value="yes"> Yes<br>
                              <input name="bothspousesattending" type="radio" value="no"> No

                                <?php if($errors->has('bothspousesattending')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('bothspousesattending')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('singlespouseexplanation') ? ' has-error' : ''); ?>">
                            <label for="applicantname" class="col-md-4 control-label">If Only One Spouse Attending, Briefly Explain Why:</label>

                            <div class="col-md-6">
                                <textarea id="applicantname" class="form-control" name="singlespouseexplanation" cols="50" rows="5" required></textarea>
                                <?php if($errors->has('singlespouseexplanation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('singlespouseexplanation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('goodcandidatereason') ? ' has-error' : ''); ?>">
                            <label for="goodcandidatereason" class="col-md-4 control-label">Why Do You Think This Person Is A Good Candidate For A Cursillo Weekend?:</label>

                            <div class="col-md-6">
                                <textarea id="goodcandidatereason" class="form-control" name="goodcandidatereason" cols="50" rows="5" required></textarea>
                                <?php if($errors->has('goodcandidatereason')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('goodcandidatereason')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('cursilloattitude') ? ' has-error' : ''); ?>">
                            <label for="cursilloattitude" class="col-md-4 control-label">State The Applicant's Attitude Toward A Cursillo Weekend?:</label>

                            <div class="col-md-6">
                                <textarea id="cursilloattitude" class="form-control" name="cursilloattitude" cols="50" rows="5" required></textarea>
                                <?php if($errors->has('cursilloattitude')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('cursilloattitude')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('applicantexpectations') ? ' has-error' : ''); ?>">
                            <label for="applicantexpectations" class="col-md-4 control-label">With Leadership In Mind, What Do You Expect This Person To Gain From The Cursillo Experience?:</label>

                            <div class="col-md-6">
                                <textarea id="applicantexpectations" class="form-control" name="applicantexpectations" cols="50" rows="5" required></textarea>
                                <?php if($errors->has('applicantexpectations')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('applicantexpectations')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('plantosupport') ? ' has-error' : ''); ?>">
                                <label for="plantosupport" class="col-md-4 control-label">How, Specifically, Will You Supoprt This Applicant During His/Her Fourth Day?:</label>

                                <div class="col-md-6">
                                    <textarea id="plantosupport" class="form-control" name="plantosupport" cols="50" rows="5" required></textarea>
                                    <?php if($errors->has('plantosupport')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('plantosupport')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                      
                        <div class="col-lg-12 pleasenote">
                          <p>I/We have prayerfully considered sponsoring this applicant, understand my/our
                          responsibilities as outlined in the sponsor's guidelines, and with the Lord's help will do
                          my/our best to meet these responsibilities.</p>
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
                        <div class="form-group<?php echo e($errors->has('datesigned') ? ' has-error' : ''); ?>">
                            <label for="datesigned" class="col-md-4 control-label">Date Signed:</label>

                            <div class="col-md-6">
                                <input id="datesigned" type="date" class="form-control" name="datesigned" required>

                                <?php if($errors->has('datesigned')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('datesigned')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
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